<?php

namespace App\Http\Controllers;

use App\User;
use App\Transaction;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\Game;
use App\Bank;
use App\BankRecord;
use App\Bonus;
use App\Log;
use App\Notifications\NewDeposit;
use App\Notifications\NewWithdraw;
use App\Notifications\NewTransfer;
use Pusher\Pusher;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(\Auth::user()->role == 1)
        {

            return view('admin.users.index');

        }
        else
        {
            return view('staff.users.index');
        }
    }

    public function data(Datatables $datatables)
    {
        

        if(\Auth::user()->role == 1)
        {

            $users = User::All();

        }
        else
        {
            $users = User::where('role',3)->get();
        }


        return Datatables::of($users)
            ->addColumn('actions', function($user) {
                return view('admin.users.action', compact('user'))->render();
            })
            ->editColumn('role', function ($user) {
                if($user->role == 1)
                {
                    return 'Administrator';
                }
                else if($user->role == 2)
                {
                    return 'Staff';
                }
                else if($user->role == 3)
                {
                    return 'User';
                }
                else if($user->role == 4)
                {
                    return 'Affiliate';
                }
            })
            ->editColumn('win_lose', function ($user) {
                $dep = Transaction::where('user_id',$user->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');

                $with = Transaction::where('user_id',$user->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');

                $winlose = $dep - $with;

                if($winlose < 0)
                {
                    return '<span class="label label-danger">RM '.$winlose.'</span>';
                }
                else
                {
                    return '<span class="label label-success">RM '.$winlose.'</span>';
                }
            })
            ->editColumn('referred_by', function ($user) {
                if($user->referred_by == null)
                {
                    return '-';
                }
                else
                {
                    $referred = User::where('affiliate_id',$user->referred_by)->first();

                    return $referred->name;
                }
            })
            ->editColumn('phone_verification', function ($user) {
                if($user->phone_verification == 1)
                {
                    return '<span class="label label-success">Verified</span>';
                }
                else
                {
                    return '<span class="label label-warning">Pending Verification</span>';
                }
            })
            ->editColumn('group_id', function ($user) {
                
                return $user->group->name;

            })
            ->editColumn('created_at', function ($user) {
                return '<span style="display: none;">'. $user->created_at->format('Ymd') .'</span>'.$user->created_at->format('d M Y, h:i A');
            })
            ->rawColumns(['win_lose','actions','phone_verification','created_at'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(\Auth::user()->role == 1)
        {
            return view('admin.users.create');
        }
        else
        {
            return view('staff.users.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $user = new User;
        $user->name = $input['name'];
        $user->password = bcrypt($input['password']);
        $user->email = $input['email'];
        $user->role = $input['role'];

        if(isset($input['affiliate_rate']))
        {
            $user->affiliate_rate = $input['affiliate_rate'];
        }
        
        $user->phone_verification = $input['phone_verification'];
        $user->phone = $input['phone'];
        $user->affiliate_id = str_random('8');
        $user->remarks = $input['remarks'];

        $user->save();

        Session::flash('message', 'User created succesfully!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/users/'.$user->id);
        }
        else
        {
            return redirect('staff/users/'.$user->id);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $user = User::find($id);

        if(\Auth::user()->role == 1)
        {

            if($user->role == 4)
            {
                $games = Game::all();
                $banks = Bank::all();
                $bonuses = Bonus::all();

                $input = $request->all();

                if(isset($input['date_from']))
                {
                    $arrStart = explode("-", $input['date_from']);
                    $arrEnd = explode("-", $input['date_to']);

                    $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
                    $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

                    $members = User::where('referred_by',$user->affiliate_id)->get();

                    $deposit_sum = 0;
                    $withdraw_sum = 0;

                    foreach($members as $member)
                    {
                        $dep = Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
                        $with = Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');

                        $deposit_sum = $deposit_sum + $dep;
                        $withdraw_sum = $withdraw_sum + $with;
                    }

                    $winlose = $deposit_sum - $withdraw_sum;

                    $commision_rate = $user->affiliate_rate;
                    $final_commision = $commision_rate / 100 * $winlose;
                }

                else
                {
                    $members = User::where('referred_by',$user->affiliate_id)->get();

                    $deposit_sum = 0;
                    $withdraw_sum = 0;

                    foreach($members as $member)
                    {
                        $dep = Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');
                        $with = Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');

                        $deposit_sum = $deposit_sum + $dep;
                        $withdraw_sum = $withdraw_sum + $with;
                    }

                    $winlose = $deposit_sum - $withdraw_sum;

                    $commision_rate = $user->affiliate_rate;
                    $final_commision = $commision_rate / 100 * $winlose;

                }



                return view('admin.users.affiliate',compact('user','games','banks','bonuses','members','members','deposit_sum','withdraw_sum','winlose','final_commision'));
            }
            else if($user->role == 3)
            {
                $games = Game::all();
                $banks = Bank::all();
                $bonuses = Bonus::all();

                return view('admin.users.show',compact('user','games','banks','bonuses'));
            }

            else
            {
                $games = Game::all();
                $banks = Bank::all();
                $bonuses = Bonus::all();

                $members = User::where('referred_by',$user->affiliate_id)->get();

                return view('admin.users.staff',compact('user','games','banks','bonuses','members'));
            }

        }
        else
        {
            $games = Game::all();
            $banks = Bank::all();
            $bonuses = Bonus::all();

            return view('staff.users.show',compact('user','games','banks','bonuses'));
        }


        
          
        
    }

    public function transactiondata(Datatables $datatables,$user_id)
    {
        $transactions = Transaction::where('user_id',$user_id)->get();
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                if($transaction->deposit_type == 'bonus')
                {
                    return '-';
                }
                else
                {
                    return view('admin.transaction.action', compact('transaction'))->render();
                }
                
            })
            ->editColumn('transaction_id', function ($transaction) {
                return '#'.sprintf('%06d', $transaction->id);
            })
            ->editColumn('transaction_type', function ($transaction) {

                if($transaction->deposit_type == 'bonus')
                {
                    return 'Bonus';
                }
                else if($transaction->deposit_type == 'rebate')
                {
                    return 'Rebate';
                }
                else
                {
                    return $transaction->transaction_type;
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
            ->editColumn('last_login', function ($transaction) {
                return $transaction->last_login ? with(new Carbon($transaction->last_login))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','status'])
            ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $affiliate = User::where('role',4)->where('is_ban',0)->pluck('name','affiliate_id');
        $affiliate->prepend('No Affiliate', '');

        if(\Auth::user()->role == 1)
        {

            return view('admin.users.edit',compact('user','affiliate'));

        }
        else
        {
            return view('staff.users.edit',compact('user','affiliate'));
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->role = $input['role'];

        if(isset($input['affiliate_rate']))
        {
            $user->affiliate_rate = $input['affiliate_rate'];
        }

        $user->group_id = $input['group'];
        $user->phone = $input['phone'];
        $user->phone_verification = $input['phone_verification'];
        $user->bank_name = $input['bank_name'];
        $user->bank_account_no = $input['bank_account_no'];
        $user->remarks = $input['remarks'];
        $user->referred_by = $input['referred_by'];

        $user->save();

        Session::flash('message', 'User succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        
        if(\Auth::user()->role == 1)
        {

            return redirect('admin/users/'.$user->id);

        }
        else
        {
            return redirect('staff/users/'.$user->id);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->transactions()->delete();
        $user->delete();

        Session::flash('message', 'User and all transaction attached succesfully Deleted!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users');
    }

    public function ban($id)
    {
        $user = User::find($id);
        $user->is_ban = 1;
        $user->save();

        Session::flash('message', 'User succesfully Banned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    public function unban($id)
    {
        $user = User::find($id);
        $user->is_ban = 0;
        $user->save();

        Session::flash('message', 'User succesfully Unbanned!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }

    public function deposit(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        if(isset($input['bonus_code']))
        {
            $transaction->bonus_id = $input['bonus_code'];
        }

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data_raw = array_add($data_raw, 'payment_method', $input['payment_method']);
        $data = json_encode($data_raw);

        if ($request->hasFile('receipt')) {
            
            $file = $request->file('receipt');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'storage/receipt';
            $file->move($destinationPath,$filename);

            $transaction->receipt_file = $filename;
        }

        

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'deposit';
        $transaction->deposit_type = 'normal';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->bank_id = $input['bank'];
        $transaction->datetime = $input['deposit_date']." ".$input['deposit_hour'].":".$input['deposit_minutes']." ".$input['deposit_stamp'];

        if(isset($input['refference_no']))
        {
            $transaction->refference_no = $input['refference_no'];
        }
        else
        {
            $transaction->refference_no = 'none';
        }
        
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewDeposit($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        Session::flash('message', 'Deposit transaction succesfully added, You still need to approve the deposit at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/users/'.$input['user_id']);
        }
        else
        {
            return redirect('staff/users/'.$input['user_id']);
        }
    }

    public function withdraw(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data = json_encode($data_raw);

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'withdraw';
        $transaction->data = $data;
        $transaction->bank_id = $input['bank'];
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewWithdraw($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        session::flash('message', 'Withdraw transaction succesfully added, You still need to approve the withdraw at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/users/'.$input['user_id']);
        }
        else
        {
            return redirect('staff/users/'.$input['user_id']);
        }

        
    }

    public function transfer(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'from_game', $input['from_game_id']);
        $data_raw = array_add($data_raw, 'to_game', $input['to_game_id']);
        $data = json_encode($data_raw);

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'transfer';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewTransfer($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        session::flash('message', 'Transfer transaction succesfully added, You still need to approve the transfer at transaction page!'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/users/'.$input['user_id']);
        }
        else
        {
            return redirect('staff/users/'.$input['user_id']);
        }
    }

    public function rebate(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data_raw = array_add($data_raw, 'notes', $input['notes']);
        $data = json_encode($data_raw);

        $transaction->user_id = $input['user_id'];
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'deposit';
        $transaction->deposit_type = 'rebate';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->status = 2;

        $transaction->save();

        session::flash('message', 'Rebate has successfuly added'); 
        Session::flash('alert-class', 'alert-success');

        if(\Auth::user()->role == 1)
        {
            return redirect('admin/users/'.$input['user_id']);
        }
        else
        {
            return redirect('staff/users/'.$input['user_id']);
        }
    }

    public function logsdata(Datatables $datatables,$user_id)
    {
        $logs = Log::where('user_id',$user_id);

        return Datatables::of($logs)
            ->editColumn('created_at', function ($log) {
                return $log->created_at ? with(new Carbon($log->created_at))->format('d M Y, h:i A') : '';
            })
            ->editColumn('transaction_id', function ($log) {
                return '#'.sprintf('%05d', $log->id);
            })
            ->editColumn('detail', function ($log) {
                return $log->detail;
            })
            ->rawColumns(['detail'])
            ->make(true);
    }

    public function password(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $user->password = bcrypt($input['password']);

        $user->save();

        session::flash('message', 'User password successfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/users/'.$user->id);
    }
}
