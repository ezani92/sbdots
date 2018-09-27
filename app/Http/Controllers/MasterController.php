<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Game;
use Carbon\Carbon;

class MasterController extends Controller
{
    public function dashboard()
    {

    	$total_agent = User::where('role',4)->where('referred_by',\Auth::user()->id)->count();

    	$agents = User::where('referred_by',\Auth::user()->id)->get();

    	$total_win_lose = 0;

    	foreach($agents as $agent)
    	{
    		$members = \App\User::where('referred_by',$agent->affiliate_id)->get();

            $deposit_sum = 0;
            $withdraw_sum = 0;

            foreach($members as $member)
            {
                $dep = \App\Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');
                $with = \App\Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');

                $deposit_sum = $deposit_sum + $dep;
                $withdraw_sum = $withdraw_sum + $with;
            }

            $winlose = $deposit_sum - $withdraw_sum;
            $total_win_lose = $total_win_lose + $winlose;
    	}

    		return view('master.dashboard',[
                'total_agent' => $total_agent,
                'total_win_lose' => $total_win_lose,
                'agents' => $agents
            ]);
    }

    public function agent(User $user,Request $request)
    {
    	$input = $request->all();

        if(isset($input['date_from']))
        {
            $arrStart = explode("-", $input['date_from']);
            $arrEnd = explode("-", $input['date_to']);

            $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
            $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

            $members = User::where('referred_by',$user->affiliate_id)->get();

            $deposit_sum = 0;
            $withdraw_sum = 0;

            foreach($members as $member)
            {
                $dep = Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
                $with = Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');

                $deposit_sum = $deposit_sum + $dep;
                $withdraw_sum = $withdraw_sum + $with;
            }

            $winlose = $deposit_sum - $withdraw_sum;

            $commision_rate = \Auth::user()->affiliate_rate;
            $final_commision = $commision_rate / 100 * $winlose;
        }

        else
        {
            $members = User::where('referred_by',$user->affiliate_id)->get();

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

        

        return view('master.show',[
            'members' => $members,
            'deposit_sum' => $deposit_sum,
            'withdraw_sum' => $withdraw_sum,
            'winlose' => $winlose,
            'final_commision' => $final_commision,
            'user' => $user
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

            $members = User::where('referred_by',\Auth::user()->affiliate_id)->get();

            $deposit_sum = 0;
            $withdraw_sum = 0;

            foreach($members as $member)
            {
                $dep = Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');
                $with = Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');

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

        

        return view('master.reports',[
            'members' => $members,
            'deposit_sum' => $deposit_sum,
            'withdraw_sum' => $withdraw_sum,
            'winlose' => $winlose,
            'final_commision' => $final_commision
        ]);
    }
}
