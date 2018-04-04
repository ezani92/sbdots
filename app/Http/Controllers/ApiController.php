<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Transaction;

class ApiController extends Controller
{
    public function adminNotofication()
    {
    	$user = User::find(\Auth::user()->id);

    	$count = $user->unreadNotifications()->count();

    	if($count > 0)
    	{
    		return 1;
    	}
    	else
    	{
    		return 0;
    	}
    }

    public function depositTotal(Request $request)
    {
        $input = $request->all();

        $arrStart = explode("-", $input['fromdate']);
        $arrEnd = explode("-", $input['todate']);

        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

        return $transactions = Transaction::where('transaction_type','deposit')->where('deposit_type','normal')->where('created_at','<=',$to_date)->where('status','2')->where('created_at','>=',$from_date)->sum('amount');
    }

    public function withdrawTotal(Request $request)
    {
        $input = $request->all();

        $arrStart = explode("-", $input['fromdate']);
        $arrEnd = explode("-", $input['todate']);

        $from_date = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
        $to_date = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

        return $transactions = Transaction::where('transaction_type','withdraw')->where('created_at','<=',$to_date)->where('status','2')->where('created_at','>=',$from_date)->sum('amount');
    }
}
