<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Transaction;
use DB;

class ReportController extends Controller
{
    public function index(Request $request)
    {
    	$input = $request->all();

        if(isset($input['date_from']))
        {
            $from = Carbon::createFromFormat('d-m-Y',$input['date_from']);
            $to = Carbon::createFromFormat('d-m-Y',$input['date_to']);

            $total_user = User::where('role',3)->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

            $total_transaction = Transaction::all()->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $pending_transaction_count = Transaction::where('status',1)->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $pending_transactions = Transaction::where('status',1)->where('created_at','>=',$from)->where('created_at','<=',$to)->paginate(10);

            $count_deposit = Transaction::where('transaction_type','deposit')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();
            $count_withdrawal = Transaction::where('transaction_type','withdraw')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();
            $count_transfer = Transaction::where('transaction_type','transfer')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $worth_deposit = DB::table('transactions')->where('transaction_type','deposit')->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
            $worth_withdrawal = DB::table('transactions')->where('transaction_type','withdraw')->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
            $worth_transfer = DB::table('transactions')->where('transaction_type','transfer')->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
        }
        else
        {
            $total_user = User::where('role',3)->count();

            $user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

            $total_transaction = Transaction::all()->count();

            $pending_transaction_count = Transaction::where('status',1)->count();

            $pending_transactions = Transaction::where('status',1)->paginate(10);

            $count_deposit = Transaction::where('transaction_type','deposit')->count();
            $count_withdrawal = Transaction::where('transaction_type','withdraw')->count();
            $count_transfer = Transaction::where('transaction_type','transfer')->count();

            $worth_deposit = DB::table('transactions')->where('transaction_type','deposit')->sum('amount');
            $worth_withdrawal = DB::table('transactions')->where('transaction_type','withdraw')->sum('amount');
            $worth_transfer = DB::table('transactions')->where('transaction_type','transfer')->sum('amount');
        }
        

        // where('created_at','>=',$from)->where('created_at','<=',$to)->


    	

    	return view('admin.reports.summary',[
    		'total_user' => $total_user,
    		'user_today' => $user_today,
    		'total_transaction' => $total_transaction,
    		'pending_transaction_count' => $pending_transaction_count,
    		'pending_transactions' => $pending_transactions,
    		'count_deposit' => $count_deposit,
    		'count_withdrawal' => $count_withdrawal,
    		'count_transfer' => $count_transfer,
            'worth_deposit' => $worth_deposit,
            'worth_withdrawal' => $worth_withdrawal,
            'worth_transfer' => $worth_transfer,
            'input' => $input
    	]);
    }
}
