<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use DataTables;
use Carbon\Carbon;
use Session;

class AccountController extends Controller
{
    public function index(Request $request)
    {
    	$input = $request->all();

    	if(isset($input['from_date']))
		{
			$arrStart = explode("-", $input['from_date']);
	        $arrEnd = explode("-", $input['to_date']);

	        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
	        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

			$total_debit = Account::where('created_at','<=',$to_date)
	            ->where('created_at','>=',$from_date)
	            ->where('type',1)
	            ->sum('amount');

	        $total_credit = Account::where('created_at','<=',$to_date)
	            ->where('created_at','>=',$from_date)
	            ->where('type',2)
	            ->sum('amount');
        }
        else
        {
        	$total_debit = Account::where('type',1)
	            ->sum('amount');

	        $total_credit = Account::where('type',2)
	            ->sum('amount');
        }

        if(\Auth::user()->role == 1)
        {

            return view('admin.accounts.index',compact('total_debit','total_credit'));

        }
        else
        {
            return view('staff.accounts.index');
        }

        
    }

    public function data(Datatables $datatables,Request $request)
    {
        $input = $request->all();

        if(isset($input['from_date']))
		{
			$arrStart = explode("-", $input['from_date']);
	        $arrEnd = explode("-", $input['to_date']);

	        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
	        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

	        $accounts = Account::where('created_at','<=',$to_date)
	            ->where('created_at','>=',$from_date)
	            ->orderBy('id', 'DESC');
        }
        else
        {
        	 $accounts = Account::orderBy('id', 'DESC');
        }

        return Datatables::of($accounts)
            ->addColumn('actions', function($account) {
                return '<a href="'.url('admin/accounts/'.$account->id.'/delete').'" onclick="return confirm(\'Are you sure?\')"><span class="label label-default">delete</span></a>';
            })
            ->editColumn('debit', function ($account) {
                if($account->type == 1)
                {
                    return '<span class="label label-success">'.$account->amount.'</span>';
                }
            })
            ->editColumn('credit', function ($account) {
                if($account->type == 2)
                {
                    return '<span class="label label-danger">'.$account->amount.'</span>';
                }
            })
            ->editColumn('user_id', function ($account) {
                return $account->user->name;
            })
            ->editColumn('created_at', function ($account) {
                return $account->created_at ? with(new Carbon($account->created_at))->format('d M Y, h:i A') : '';
            })
            ->rawColumns(['actions','amount','debit','credit'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('admin.accounts.edit');
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
        $bank->active = $input['status'];

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
    public function destroy(Account $account)
    {
        $account->delete();

        Session::flash('message', 'Transaction deleted!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/accounts');
    }

    public function debit(Request $request)
    {
        $input = $request->all();
        $account = new Account;

        $account->user_id = \Auth::user()->id;
        $account->type = 1;
        $account->title = $input['title'];
        $account->description = $input['description'];
        $account->amount = $input['amount'];

        $account->save();

        Session::flash('message', 'Debit transaction succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/banks/'.$bank_id);
    }

    public function credit(Request $request)
    {
        $input = $request->all();
        $account = new Account;

        $account->user_id = \Auth::user()->id;
        $account->type = 2;
        $account->title = $input['title'];
        $account->description = $input['description'];
        $account->amount = $input['amount'];

        $account->save();

        Session::flash('message', 'Credit transaction succesfully added!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('admin/accounts/');
    }
}
