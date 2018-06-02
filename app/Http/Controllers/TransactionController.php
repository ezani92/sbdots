<?php

namespace App\Http\Controllers;

use App\Transaction;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\BankRecord;
use App\Log;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction.index');
    }

    public function data(Datatables $datatables)
    {   
        
        $arrStart = explode("-", Input::get('from'));
        $arrEnd = explode("-", Input::get('to'));
        $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

        $transactions = Transaction::between($from, $to);

        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%05d', $transaction->id);
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
            })
            ->editColumn('user_email', function ($transaction) {
                return $transaction->user->email;
            })
            ->editColumn('status', function ($transaction) {
                
                if($transaction->status == 1)
                {
                    return '<span class="label label-warning">Progress</span>';
                }
                else if($transaction->status == 2)
                {
                    return '<span class="label label-success">Complete</span>';
                }
                else if($transaction->status == 3)
                {
                    return '<span class="label label-danger">Decline</span>';
                }


            })
            ->editColumn('group', function ($transaction) {
                return $transaction->user->group->name;
            })
            ->editColumn('created_at', function ($transaction) {
                return $transaction->created_at ? with(new Carbon($transaction->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    public function deposit()
    {
        if(\Auth::user()->role == 1)
        {

            return view('admin.transaction.deposit');

        }
        else
        {
            return view('staff.transaction.deposit');
        }

    }

    public function depositData(Datatables $datatables,Request $request)
    {
        $input = $request->all();

        $arrStart = explode("-", $input['from_date']);
        $arrEnd = explode("-", $input['to_date']);

        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);


        $transactions = Transaction::where('transaction_type','deposit')->where('deposit_type','normal')->where('created_at','<=',$to_date)->where('created_at','>=',$from_date)->latest();

        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%06d', $transaction->id);
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
            })
            ->editColumn('user_email', function ($transaction) {
                return $transaction->user->email;
            })
            ->editColumn('group', function ($transaction) {
                return $transaction->user->group->name;
            })
            ->editColumn('bank_id', function ($transaction) {

                if($transaction->bank_id == null)
                {
                    return 'Not Selected';
                }
                else
                {
                    return $transaction->bank->name.' - '.$transaction->bank->account_name;
                }
            })
            ->editColumn('status', function ($transaction) {
                
                if($transaction->status == 1)
                {
                    return '<span class="label label-warning">Progress</span>';
                }
                else if($transaction->status == 2)
                {
                    return '<span class="label label-success">Complete</span>';
                }
                else if($transaction->status == 3)
                {
                    return '<span class="label label-danger">Decline</span>';
                }


            })
            ->editColumn('created_at', function ($transaction) {
                return $transaction->created_at ? with(new Carbon($transaction->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    public function withdrawal()
    {
        if(\Auth::user()->role == 1)
        {

            return view('admin.transaction.withdrawal');

        }
        else
        {
            return view('staff.transaction.withdrawal');
        }


    }

    public function withdrawalData(Datatables $datatables,Request $request)
    {
        $input = $request->all();

        $arrStart = explode("-", $input['from_date']);
        $arrEnd = explode("-", $input['to_date']);

        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

        $transactions = Transaction::where('transaction_type','withdraw')->where('created_at','<=',$to_date)->where('created_at','>=',$from_date)->latest();
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%06d', $transaction->id);
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
            })
            ->editColumn('user_email', function ($transaction) {
                return $transaction->user->email;
            })
            ->editColumn('group', function ($transaction) {
                return $transaction->user->group->name;
            })
            ->editColumn('bank', function ($transaction) {
                
                if($transaction->bank_id == null)
                {
                    return '-';
                }
                else
                {
                    return $transaction->bank->name.' - '.$transaction->bank->account_name;
                }
            })
            ->editColumn('status', function ($transaction) {
                
                if($transaction->status == 1)
                {
                    return '<span class="label label-warning">Progress</span>';
                }
                else if($transaction->status == 2)
                {
                    return '<span class="label label-success">Complete</span>';
                }
                else if($transaction->status == 3)
                {
                    return '<span class="label label-danger">Decline</span>';
                }


            })
            ->editColumn('created_at', function ($transaction) {
                return $transaction->created_at ? with(new Carbon($transaction->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    public function transfer()
    {
        if(\Auth::user()->role == 1)
        {

            return view('admin.transaction.transfer');

        }
        else
        {
            return view('staff.transaction.transfer');
        }

    }

    public function transferData(Datatables $datatables)
    {
        $transactions = Transaction::where('transaction_type','transfer');
        return Datatables::of($transactions)
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%06d', $transaction->id);
            })
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
            })
            ->editColumn('from_game', function ($transaction) {
                
                $data = json_decode($transaction->data, true);
                $transfer_from = \App\Game::find($data['from_game']);

                return $transfer_from->name;


            })
            ->editColumn('to_game', function ($transaction) {
                
                $data = json_decode($transaction->data, true);
                $transfer_from = \App\Game::find($data['to_game']);

                return $transfer_from->name;

            })
            ->editColumn('status', function ($transaction) {
                
                if($transaction->status == 1)
                {
                    return '<span class="label label-warning">Progress</span>';
                }
                else if($transaction->status == 2)
                {
                    return '<span class="label label-success">Complete</span>';
                }
                else if($transaction->status == 3)
                {
                    return '<span class="label label-danger">Decline</span>';
                }


            })
            ->editColumn('created_at', function ($transaction) {
                return $transaction->created_at ? with(new Carbon($transaction->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {   

        $logs = Log::where('transaction_id',$transaction->id)->latest('id')->get();
        $bonuses = Transaction::where('bonus_for',$transaction->id)->get();


        if(\Auth::user()->role == 1)
        {
            return view('admin.transaction.show',compact('transaction','logs','bonuses'));
        }
        else
        {
            return view('staff.transaction.show',compact('transaction','logs','bonuses'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        if($transaction->bonus_id == null)
        {
            $bonus = "No Bonus Applied";
        }
        else
        {
            $bonus = $transaction->bonus->name;
        }

        if(\Auth::user()->role == 1)
        {
            return view('admin.transaction.edit',compact('transaction','bonus'));
        }
        else
        {
            return view('staff.transaction.edit',compact('transaction','bonus'));
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $input = $request->all();

        $log = new Log;
        $log->user_id = Auth::user()->id;

        if($input['status'] == 1)
        {
            $status = '<span class="label label-warning">Progress</span>';
        }
        else if($input['status'] == 3)
        {
            $status = '<span class="label label-danger">Rejected</span>';
        }
        else if($input['status'] == 2)
        {
            $status = '<span class="label label-success">Success</span>';  
        }

        if($input['type_transaction'] == 'deposit')
        {
            // if($input['bonus_amount'] != '0')
            // {
            //     $transaction_bonus = new Transaction;

            //     $transaction_bonus->user_id = $transaction->user_id;
            //     $transaction_bonus->transaction_id = time();
            //     $transaction_bonus->transaction_type = 'deposit';
            //     $transaction_bonus->deposit_type = 'bonus';
            //     $transaction_bonus->data = $transaction->data;
            //     $transaction_bonus->amount = $input['bonus_amount'];
            //     $transaction_bonus->status = 2;
            //     $transaction_bonus->remarks = 'Bonus for deposit transaction [#'.sprintf('%06d', $transaction->id).']';

            //     $transaction_bonus->save();

            //     $log->detail = 'Add bonus for transaction [#'.sprintf('%06d', $transaction->id).']';
            // }

            // if(isset($input['bank']))
            // {
            //     $transaction->bank_id = $input['bank'];
            // }


            $transaction->amount = $input['amount'];
            $transaction->status = $input['status'];
            $transaction->remarks = $input['remarks'];

            if($transaction->first_time_update == 0)
            {
                if($input['status'] == 2)
                {
                    $record = new BankRecord;
                    $record->user_id = Auth::user()->id;
                    $record->bank_id = $transaction->bank_id;
                    $record->transaction_type = "Deposit";
                    $record->description = 'Deposit for transaction [#'.sprintf('%06d', $transaction->id).']';
                    $record->record = 1;
                    $record->amount = $input['amount'];

                    $record->save();
                }

                $transaction->first_time_update = 1;
            }
            

        }
        else if($input['type_transaction'] == 'withdraw')
        {
            $transaction->amount = $input['amount'];
            $transaction->status = $input['status'];
            $transaction->bank_id = $input['bank'];
            $transaction->remarks = $input['remarks'];

            if($transaction->first_time_update == 0)
            {

                if($input['status'] == 2)
                {
                    $record = new BankRecord;
                    $record->user_id = Auth::user()->id;
                    $record->bank_id = $transaction->bank_id;
                    $record->transaction_type = "Withdraw";
                    $record->description = 'Withdrawal for transaction [#'.sprintf('%06d', $transaction->id).']';
                    $record->record = 0;
                    $record->amount = $input['amount'];

                    $record->save();
                }

                $transaction->first_time_update = 1;

            }

        }

        else if($input['type_transaction'] == 'transfer')
        {
            $transaction->amount = $input['amount'];
            $transaction->status = $input['status'];
            $transaction->remarks = $input['remarks'];
        }

        $log->transaction_id = $transaction->id;
        $log->detail = 'SET transaction as '.$status;
        $log->save();

        $transaction->save();

        Session::flash('message', 'Transaction succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {

            return redirect('admin/transaction/'.$transaction->id);

        }
        else
        {
            return redirect('staff/transaction/'.$transaction->id);
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function addbonus(Request $request)
    {
        $input = $request->all();

        $transaction = Transaction::find($input['transaction_id']);

        $transaction_bonus = new Transaction;

        $transaction_bonus->user_id = $transaction->user_id;
        $transaction_bonus->transaction_id = time();
        $transaction_bonus->transaction_type = 'deposit';
        $transaction_bonus->deposit_type = 'bonus';
        $transaction_bonus->data = $transaction->data;
        $transaction_bonus->amount = $input['bonus_amount'];
        $transaction_bonus->bonus_id = $transaction->bonus_id;
        $transaction_bonus->bonus_for = $transaction->id;
        $transaction_bonus->status = 2;
        $transaction_bonus->remarks = 'Bonus for deposit transaction [#'.sprintf('%06d', $transaction->id).']';

        $transaction_bonus->save();

        $log = new Log;
        $log->user_id = Auth::user()->id;
        $log->transaction_id = $transaction->id;
        $log->detail = 'Add [RM'.$input['bonus_amount'].'] bonus for transaction [#'.sprintf('%06d', $transaction->id).']';
        $log->save();



        Session::flash('message', 'Bonus Succesfully Added!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {

            return redirect('admin/transaction/'.$transaction->id);

        }
        else
        {
            return redirect('staff/transaction/'.$transaction->id);
        }
    }

    public function deletebonus($transaction_id)
    {
        $transaction = Transaction::find($transaction_id);
        $transaction->delete();

        $log = new Log;
        $log->user_id = Auth::user()->id;
        $log->transaction_id = $transaction->bonus_for;
        $log->detail = 'Delete Bonus For Transaction[#'.sprintf('%06d', $transaction->bonus_for).']';
        $log->save();

        Session::flash('message', 'Bonus Succesfully Deleted!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/transaction/'.$transaction->bonus_for);
        }
        else
        {
            return redirect('staff/transaction/'.$transaction->bonus_for);
        }
    }
}
