<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transaction;
use App\Game;
use Carbon\Carbon;
use Hash;
use Auth;

class AffiliateController extends Controller
{
    public function viewregister(Request $request)
    {
        if(isset($request->ref))
        {
            return view('affiliate.register',compact('request'));
        }
        else
        {
            return abort(404);
        }
    }

    public function register(Request $request)
    {   

        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|min:10|unique:users'
        ]);
        
        
        $user_reg = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'affiliate_id' => str_random(8),
            'referred_by'   => $request->ref
        ]);

        $user = User::find($user_reg->id);
        $user->role = 4;
        $user->phone_verification = 1;
        $user->save();

        Auth::loginUsingId($user->id);

        return redirect('affiliate');
    }

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

        

        return view('affiliate.reports',[
            'members' => $members,
            'deposit_sum' => $deposit_sum,
            'withdraw_sum' => $withdraw_sum,
            'winlose' => $winlose,
            'final_commision' => $final_commision
        ]);
    }
}
