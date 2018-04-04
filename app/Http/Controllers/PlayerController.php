<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Game;
use App\Bank;
use App\Transaction;
use App\Bonus;
use Session;
use Ixudra\Curl\Facades\Curl;
use Hash;
use App\Notifications\NewDeposit;
use App\Notifications\NewWithdraw;
use App\Notifications\NewTransfer;
use Pusher\Pusher;
use Carbon\Carbon;

class PlayerController extends Controller
{	
	public function verification()
	{
		$user = User::find(\Auth::user()->id);

        $now = time();

        //github

        if($user->tac_send_at == null)
        {
            $response = Curl::to('http://sms.sms2asia.com/xmlgateway.php')
            ->withData( array( 
                'command' => 'sendRandom',
                'email' => 'sbdots88@gmail.com',
                'password' => 'Password88',
                'customer' => $user->phone,
                'text' => 'sbdots.com verification TAC : '.$user->tac_no
            ))
            ->get();

            $user->tac_send_at = $now;
            $user->save();
        }
        else
        {
            $interval_tac = $now - $user->tac_send_at;

            if($interval_tac <= 120)
            {
                $sec = 120 - $interval_tac;
                Session::flash('message', 'Please wait '.$sec.' second more to start request TAC again'); 
                Session::flash('alert-class', 'alert-warning');
            }
            else
            {
                $response = Curl::to('http://sms.sms2asia.com/xmlgateway.php')
                ->withData( array( 
                    'command' => 'sendRandom',
                    'email' => 'sbdots88@gmail.com',
                    'password' => 'Password88',
                    'customer' => $user->phone,
                    'text' => 'sbdots.com verification TAC : '.$user->tac_no
                ))
                ->get();

                $user->tac_send_at = $now;
                $user->save();
            }
        }


        return view('player.verification');
	}

	public function verification_confirm(Request $request)
	{
		$input = $request->all();

		$user = User::find($input['_userid']);

		if($user->tac_no == $input['tac_no'])
		{
			$user->phone_verification = 1;
			$user->save();

			return redirect('/player');
		}
		else
		{
			Session::flash('message', 'TAC number incorrect, Please try again!'); 
            Session::flash('alert-class', 'alert-danger');

			return redirect('/player/verification');
		}
	}

    public function main()
    {
    	return view('player.main');
    }

    public function deposit_step1()
    {
    	$user = User::find(\Auth::user()->id);

        if($user->bank_name == null)
        {
            return view('player.bank');
        }

        $games = Game::all();
        $banks = Bank::all();

        $cat_game = Game::select('category')->orderBy('category','ASC')->get();

        $cat_array = array();

        foreach($cat_game as $cat) {

            $cat_array[] = $cat->category;

        }

        $game_cat = array_unique($cat_array);

    	return view('player.deposit_step1',['games' => $games , 'banks' => $banks, 'game_cat' => $game_cat]);
    }

    public function deposit_step2(Request $request)
    {
    	$input = $request->all();
    	$banks = Bank::all();

    	if(!isset($input['games']))
    	{	
    		Session::flash('message', 'Please select games first before proceed!'); 
            Session::flash('alert-class', 'alert-danger');

    		return redirect('player/deposit/step1');
    	}

    	return view('player.deposit_step2',[
    		'game_id' => $input['games'],
    		'banks' => $banks,
    	]);
    }

    public function deposit_step3(Request $request)
    {
    	$input = $request->all();

        $bonuses = Bonus::all();
        $banks = Bank::all();

    	if(!isset($input['games']))
    	{	
    		Session::flash('message', 'Please select games first before proceed!'); 
            Session::flash('alert-class', 'alert-danger');

    		return redirect('player/deposit/step1');
    	}

    	return view('player.deposit_step3',[
    		'game_id' => $input['games'],
            'bonuses' => $bonuses,
            'banks' => $banks
    	]);
    }

    public function deposit_store(Request $request)
    {
    	$input = $request->all();

        $transaction = new Transaction;

        if(isset($input['bonus_code']))
        {
            $bonus = Bonus::where('bonus_code',$input['bonus_code'])->first();

            if ($bonus == null)
            {
                Session::flash('message', 'Bonus code does not exist! Leave blank if you dont have bonus code!'); 
                Session::flash('alert-class', 'alert-danger');

                return back()->withInput();
            }
            else
            {   


                if($bonus->daily == 1)
                {
                    $arrToday = explode("-", Carbon::now()->format('d-m-Y'));

                    $from_date = Carbon::create($arrToday[2], $arrToday[1], $arrToday[0], 0, 0, 0);
                    $to_date = Carbon::create($arrToday[2], $arrToday[1], $arrToday[0], 23, 59, 59);

                    $today_count = Transaction::where('bonus_id',$bonus->id)->where('user_id',\Auth::user()->id)->where('created_at','<=',$to_date)->where('created_at','>=',$from_date)->count();

                    if($today_count == 1)
                    {
                        Session::flash('message', 'You Already Used This Code Today, Come Back Tomorrow To use this Code.'); 
                        Session::flash('alert-class', 'alert-danger');

                        return back()->withInput();
                    }
                    else
                    {
                        $can_use_bonus = 1;
                    }
                    
                }


                if($input['amount'] < $bonus->min_deposit)
                {
                    Session::flash('message', 'Minimum deposit to use this code is MYR '.$bonus->min_deposit); 
                    Session::flash('alert-class', 'alert-danger');

                    return back()->withInput();
                }

                $transaction_count = Transaction::where('bonus_id',$bonus->id)->where('user_id',\Auth::user()->id)->count();

                if($bonus->allow_multiple == 0)
                {
                    if($transaction_count == 0)
                    {
                        $can_use_bonus = 1;
                        $transaction->bonus_id = $bonus->id;
                    }
                    else
                    {
                        Session::flash('message', 'You already use this code. Please use other code OR leave blank to continue.'); 
                        Session::flash('alert-class', 'alert-danger');

                        return back()->withInput();
                    }
                }
                else
                {
                    $can_use_bonus = 1;
                    $transaction->bonus_id = $bonus->id;
                }
            }
        }

    	$data_raw = array();
		$data_raw = array_add($data_raw, 'game_id', $input['game_id']);
    	$data_raw = array_add($data_raw, 'payment_method', $input['payment_method']);
    	$data = json_encode($data_raw);

        if ($request->hasFile('receipt')) {
            
            $file = $request->file('receipt');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = 'storage/receipt';
            $file->move($destinationPath,$filename);

            $transaction->receipt_file = $filename;
        }

        

        $transaction->user_id = \Auth::user()->id;
    	$transaction->transaction_id = time();
    	$transaction->transaction_type = 'deposit';
        $transaction->deposit_type = 'normal';
    	$transaction->data = $data;
    	$transaction->amount = $input['amount'];
        $transaction->bank_id = $input['bank'];
    	$transaction->datetime = $input['deposit_date']." ".$input['deposit_hour'].":".$input['deposit_minutes']." ".$input['deposit_stamp'];
    	$transaction->refference_no = $input['refference_no'];
    	$transaction->status = 1;

    	$transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewDeposit($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

    	Session::flash('message', 'Thank you for you deposit. Please wait while we process your transaction. You can view the status on this page.'); 
        Session::flash('alert-class', 'alert-info');

        return redirect('player/transaction?tab=deposit');

    }

    public function withdrawal_step1()
    {
        $games = Game::all();

        return view('player.withdrawal.step1',['games' => $games]);
    }

    public function withdrawal_step2(Request $request)
    {
        $input = $request->all();

        if(!isset($input['game_id']))
        {   
            Session::flash('message', 'Please enter below details first before proceed!'); 
            Session::flash('alert-class', 'alert-danger');

            return redirect('player/withdrawal/step1');
        }

        return view('player.withdrawal.step2',['input' => $input]);
    }

    public function withdrawal_store(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'game_id', $input['game_id']);
        $data = json_encode($data_raw);

        $transaction->user_id = \Auth::user()->id;
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'withdraw';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewWithdraw($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        return view('player.withdrawal.step3',['transaction' => $transaction]);

    }

    public function transfer_step1()
    {
        $games = Game::all();

        return view('player.transfer.step1',['games' => $games]);
    }

    public function transfer_store(Request $request)
    {
        $input = $request->all();

        $transaction = new Transaction;

        $data_raw = array();
        $data_raw = array_add($data_raw, 'from_game', $input['from_game']);
        $data_raw = array_add($data_raw, 'to_game', $input['to_game']);
        $data = json_encode($data_raw);

        $transaction->user_id = \Auth::user()->id;
        $transaction->transaction_id = time();
        $transaction->transaction_type = 'transfer';
        $transaction->data = $data;
        $transaction->amount = $input['amount'];
        $transaction->status = 1;

        $transaction->save();

        $admins = User::where('role',1)->get();
        foreach($admins as $admin)
        {
            $admin->notify(new NewTransfer($transaction));
        }

        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );
        $pusher = new Pusher('32a087e0e1378c7b7210', 'bda79f5550252850598e', '494870', $options);
        $pusher->trigger('sbdots', 'transaction', []);

        return view('player.transfer.step2',['transaction' => $transaction]);
    }

    public function transaction(Request $request)
    {
        $input = $request->all();

        if(!isset($input['tab']) || $input['tab'] == 'deposit')
        {   
            $transactions = Transaction::where('transaction_type','deposit')->get();

            return view('player.transaction.deposit',['transactions' => $transactions]);
        }

        if($input['tab'] == 'withdrawal')
        {   
            $transactions = Transaction::where('transaction_type','withdraw')->get();

            return view('player.transaction.withdrawal',['transactions' => $transactions]);
        }

        else if($input['tab'] == 'transfer')
        {   
            $transactions = Transaction::where('transaction_type','transfer')->get();

            return view('player.transaction.transfer',['transactions' => $transactions]);
        }
    }

    public function profile()
    {
        return view('player.profile');
    }

    public function profile_update(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $user->name  = $input['fullname'];
        $user->phone  = $input['phone'];
        $user->gender  = $input['gender'];
        $user->dob  = $input['dob'];
        $user->address  = $input['address'];
        $user->state  = $input['state'];
        $user->sms_service  = $input['sms_service'];

        $user->save();

        Session::flash('message', 'Profile succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('player/profile');
    }

    public function password_update(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        if (Hash::check($input['current_pass'], $user->password)) {
            
            $user->password  = bcrypt($input['new_pass']);
            $user->save();

            Session::flash('message', 'Password succesfully updated!'); 
            Session::flash('alert-class', 'alert-success');

        }
        else
        {
            Session::flash('message', 'Incorrect current password!'); 
            Session::flash('alert-class', 'alert-danger');
        }

        

        return redirect('player/profile');
    }

    public function bank(Request $request)
    {
        $input = $request->all();

        $user = User::find($input['user_id']);

        $user->name  = $input['bank_acc_name'];
        $user->bank_name  = $input['bank_name'];
        $user->bank_account_no  = $input['bank_acc_no'];

        $user->save();

        Session::flash('message', 'Bank succesfully updated!'); 
        Session::flash('alert-class', 'alert-success');

        return redirect('player/deposit/step1');
    }
}
