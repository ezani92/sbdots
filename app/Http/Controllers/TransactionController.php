<?php

namespace App\Http\Controllers;

use App\Transaction;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

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
        $transactions = Transaction::All();
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
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

    public function deposit()
    {
        return view('admin.transaction.deposit');
    }

    public function depositData(Datatables $datatables)
    {
        $transactions = Transaction::where('transaction_type','deposit');
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
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
        return view('admin.transaction.withdrawal');
    }

    public function withdrawalData(Datatables $datatables)
    {
        $transactions = Transaction::where('transaction_type','withdrawal');
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
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
        return view('admin.transaction.transfer');
    }

    public function transferData(Datatables $datatables)
    {
        $transactions = Transaction::where('transaction_type','transfer');
        return Datatables::of($transactions)
            ->addColumn('actions', function($transaction) {
                return view('admin.transaction.action', compact('transaction'))->render();
            })
            ->editColumn('user_id', function ($transaction) {
                return $transaction->user->name;
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
        return view('admin.transaction.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('admin.transaction.edit',compact('transaction'));
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

        $transaction->amount = $input['amount'];
        $transaction->status = $input['status'];
        $transaction->remarks = $input['remarks'];

        $transaction->save();

        Session::flash('message', 'Transaction succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/transaction/'.$transaction->id);
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
}
