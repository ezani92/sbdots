<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Transaction;

class ReportController extends Controller
{
    public function index()
    {
    	
    	$total_user = User::where('role',3)->count();

    	$user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

    	$total_transaction = Transaction::all()->count();

    	$pending_transaction_count = Transaction::where('status',1)->count();

    	$pending_transactions = Transaction::where('status',1)->paginate(10);

    	$count_deposit = Transaction::where('transaction_type','deposit')->count();
    	$count_withdrawal = Transaction::where('transaction_type','withdrawal')->count();
    	$count_transfer = Transaction::where('transaction_type','transfer')->count();

    	return view('admin.report',[
    		'total_user' => $total_user,
    		'user_today' => $user_today,
    		'total_transaction' => $total_transaction,
    		'pending_transaction_count' => $pending_transaction_count,
    		'pending_transactions' => $pending_transactions,
    		'count_deposit' => $count_deposit,
    		'count_withdrawal' => $count_withdrawal,
    		'count_transfer' => $count_transfer 
    	]);
    }
}
