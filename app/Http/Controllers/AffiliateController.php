<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Game;
use Carbon\Carbon;

class AffiliateController extends Controller
{
    public function dashboard()
    {

    	$user_today = User::where('role',3)->where('referred_by',\Auth::user()->affiliate_id)->where('created_at', '>=', Carbon::today())->count();

    	$members = User::where('referred_by',\Auth::user()->affiliate_id)->get();

    	$today_deposit_sum = 0;
    	$today_withdraw_sum = 0;

    	foreach($members as $member)
    	{
    		$dep = Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->where('created_at', '>=', Carbon::today())->sum('amount');
    		$with = Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->where('created_at', '>=', Carbon::today())->sum('amount');

    		$today_deposit_sum = $today_deposit_sum + $dep;
    		$today_withdraw_sum = $today_withdraw_sum + $with;
    	}

    	$today_winlose = $today_deposit_sum - $today_withdraw_sum;

    		return view('affiliate.dashboard',[
                'user_today' => $user_today,
                'today_deposit_sum' => $today_deposit_sum,
                'today_withdraw_sum' => $today_withdraw_sum,
                'today_winlose' => $today_winlose,
                'members' => $members
            ]);
    }
}
