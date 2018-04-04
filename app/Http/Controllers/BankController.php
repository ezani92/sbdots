<?php

namespace App\Http\Controllers;

use App\Bank;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use App\BankRecord;
use Auth;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();

        return view('admin.banks.index');
    }

    public function data(Datatables $datatables)
    {
        $banks = Bank::All();
        return Datatables::of($banks)
            ->addColumn('actions', function($bank) {
                return view('admin.banks.action', compact('bank'))->render();
            })
            ->editColumn('created_at', function ($bank) {
                return $bank->created_at ? with(new Carbon($bank->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banks.create');
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

        $bank = new Bank;

        $bank->name = $input['name'];
        $bank->account_name = $input['account_name'];
        $bank->account_no = $input['account_no'];

        $bank->save();

        Session::flash('message', 'Bank succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/banks/'.$bank->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        $win = $bank->records->where('record',1)->sum('amount');
        $loss = $bank->records->where('record',0)->sum('amount');

        $current_balance = $bank->balance + $win - $loss;

        $records = BankRecord::where('bank_id',$bank->id)->get();


        return view('admin.banks.show',compact('bank','current_balance','records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('admin.banks.edit',compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        
        $input = $request->all();

        $bank->name = $input['name'];
        $bank->account_name = $input['account_name'];
        $bank->account_no = $input['account_no'];

        $bank->save();

        Session::flash('message', 'Bank succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/banks/'.$bank->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        //
    }

    public function debit(Request $request, $bank_id)
    {
        $input = $request->all();
        $record = new BankRecord;

        $record->user_id = Auth::user()->id;
        $record->bank_id = $bank_id;
        $record->transaction_type = "Debit";
        $record->description = $input['description'];
        $record->record = 0;
        $record->amount = $input['amount'];

        $record->save();

        Session::flash('message', 'Debit transaction succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/banks/'.$bank_id);
    }

    public function credit(Request $request, $bank_id)
    {
        $input = $request->all();
        $record = new BankRecord;

        $record->user_id = Auth::user()->id;
        $record->bank_id = $bank_id;
        $record->transaction_type = "Credit";
        $record->description = $input['description'];
        $record->record = 1;
        $record->amount = $input['amount'];

        $record->save();

        Session::flash('message', 'Credit transaction succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/banks/'.$bank_id);
    }
}
