<?php

namespace App\Http\Controllers;

use App\Bank;
use DataTables;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

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
        return view('admin.banks.show',compact('bank'));
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
}
