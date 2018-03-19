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
    	
    	$total_user = User::where('role',3)->count();

    	$user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

    	$total_transaction = Transaction::all()->count();

    	$pending_transaction_count = Transaction::where('status',1)->count();

    	$pending_transactions = Transaction::where('status',1)->paginate(10);

    	return view('admin.dashboard',[
    		'total_user' => $total_user,
    		'user_today' => $user_today,
    		'total_transaction' => $total_transaction,
    		'pending_transaction_count' => $pending_transaction_count,
    		'pending_transactions' => $pending_transactions
    	]);
    }
}
