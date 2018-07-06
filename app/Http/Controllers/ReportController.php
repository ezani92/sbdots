<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Transaction;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ReportController extends Controller
{
    public function index(Request $request)
    {
    	$input = $request->all();

        if(isset($input['date_from']))
        {

            $arrStart = explode("-", $input['date_from']);
            $arrEnd = explode("-", $input['date_to']);

            $from = Carbon::create($arrStart[2], $arrStart[1], $arrStart[0], 0, 0, 0);
            $to = Carbon::create($arrEnd[2], $arrEnd[1], $arrEnd[0], 23, 59, 59);

            $total_user = User::where('role',3)->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();

            

            $pending_transaction_count = Transaction::where('status',1)->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $pending_transactions = Transaction::where('status',1)->where('created_at','>=',$from)->where('created_at','<=',$to)->paginate(10);

            $count_deposit = Transaction::where('transaction_type','deposit')->where('deposit_type','normal')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();
            $count_withdrawal = Transaction::where('transaction_type','withdraw')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();
            $count_transfer = Transaction::where('transaction_type','transfer')->where('created_at','>=',$from)->where('created_at','<=',$to)->count();

            $total_transaction = $count_deposit + $count_withdrawal;

            $worth_deposit = DB::table('transactions')->where('transaction_type','deposit')->where('deposit_type','normal')->where('created_at','>=',$from)->where('created_at','<=',$to)->where('status','2')->sum('amount');
            $worth_withdrawal = DB::table('transactions')->where('transaction_type','withdraw')->where('created_at','>=',$from)->where('created_at','<=',$to)->where('status','2')->sum('amount');
            $worth_bonus = DB::table('transactions')->where('deposit_type','bonus')->where('created_at','>=',$from)->where('created_at','<=',$to)->sum('amount');

            $transactions_1 = Transaction::where('status',2)->where('deposit_type','normal')->where('created_at','>=',$from)->where('created_at','<=',$to)->get();
            $transactions_2 = Transaction::where('status',2)->Where('transaction_type', 'withdraw')->where('created_at','>=',$from)->where('created_at','<=',$to)->get();

            $transactions = $transactions_1->merge($transactions_2)->sort(); // Contains foo and bar.
            $transactions = $this->paginate($transactions)->setPath(url('admin/reports'));


        }
        else
        {
            $total_user = User::where('role',3)->count();

            $user_today = User::where('role',3)->where('created_at', '>=', Carbon::today())->count();



            $pending_transaction_count = Transaction::where('status',1)->count();

            $pending_transactions = Transaction::where('status',1)->count();

            $count_deposit = Transaction::where('transaction_type','deposit')->where('deposit_type','normal')->where('status','2')->count();
            $count_withdrawal = Transaction::where('transaction_type','withdraw')->count();
            $count_transfer = Transaction::where('transaction_type','transfer')->count();

            $total_transaction = $count_deposit + $count_withdrawal;

            $worth_deposit = DB::table('transactions')->where('transaction_type','deposit')->where('deposit_type','normal')->where('status','2')->sum('amount');
            $worth_withdrawal = DB::table('transactions')->where('transaction_type','withdraw')->where('status','2')->sum('amount');
            $worth_bonus = DB::table('transactions')->where('deposit_type','bonus')->sum('amount');

            $transactions = Transaction::where('status',2)->where('deposit_type','normal')->orWhere('transaction_type', 'withdraw')->paginate(25);
        }
        
        $winlose = $worth_deposit - $worth_withdrawal;

        // where('created_at','>=',$from)->where('created_at','<=',$to)->

        if(\Auth::user()->role == 1)
        {
            return view('admin.reports.summary',[
                'transactions' => $transactions ,
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
                'worth_bonus' => $worth_bonus,
                'input' => $input,
                'winlose' => $winlose
            ]);
        }
        else
        {
            return view('staff.reports.summary',[
                'transactions' => $transactions ,
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
                'worth_bonus' => $worth_bonus,
                'input' => $input,
                'winlose' => $winlose
            ]);
        }
    	

    	
    }

    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
