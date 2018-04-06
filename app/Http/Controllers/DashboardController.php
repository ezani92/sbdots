<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Game;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
    	

    	$user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

        $today_deposit_sum = Transaction::where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->where('created_at', '>=', Carbon::today())->sum('amount');

        $today_withdraw_sum = Transaction::where('transaction_type','withdraw')->where('status',2)->where('created_at', '>=', Carbon::today())->sum('amount');

        $today_bonus_amount = Transaction::where('transaction_type','deposit')->where('deposit_type','bonus')->where('status',2)->where('created_at', '>=', Carbon::today())->sum('amount');

    	$total_transaction = Transaction::all()->count();

    	$pending_transaction_count = Transaction::where('status',1)->count();

    	$pending_transactions = Transaction::where('status',1)->paginate(10);

    	return view('admin.dashboard',[
    		'user_today' => $user_today,
            'today_deposit_sum' => $today_deposit_sum,
            'today_withdraw_sum' => $today_withdraw_sum,
            'today_bonus_amount' => $today_bonus_amount,
    		'total_transaction' => $total_transaction,
    		'pending_transaction_count' => $pending_transaction_count,
    		'pending_transactions' => $pending_transactions
    	]);
    }

    public function login()
    {
        return view('admin.login');
    }
}
