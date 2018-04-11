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

    public function reports(Request $request)
    {
        $input = $request->all();

        if(isset($input['date_from']))
        {
            $arrStart = explode("-", $input['date_from']);
            $arrEnd = explode("-", $input['date_to']);

            $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
            $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

            $members = User::where('referred_by',\Auth::user()->affiliate_id)->where('created_at','>=',$from)->where('created_at','<=',$to)->get();

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

            $commision_rate = \Auth::user()->affiliate_rate;
            $final_commision = $commision_rate / 100 * $winlose;
        }

        else
        {
            $members = User::where('referred_by',\Auth::user()->affiliate_id)->get();

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

            $commision_rate = \Auth::user()->affiliate_rate;
            $final_commision = $commision_rate / 100 * $winlose;

        }

        

        return view('affiliate.reports',[
            'members' => $members,
            'deposit_sum' => $deposit_sum,
            'withdraw_sum' => $withdraw_sum,
            'winlose' => $winlose,
            'final_commision' => $final_commision
        ]);
    }
}
