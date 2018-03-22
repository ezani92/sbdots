<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Bot;
use App\User;
use App\Setting;
use App\Transaction;

class WebhookController extends Controller
{
    public function test(Request $request)
    {
    	$update = $request->json()->all();

	    $chat_text = $request->json('message.text');


	    if($chat_text == '/start')
	    {
	    	$text = "Hello, My name is SB. Im a bot. I will help you to make your life easier. :)";

	    	$admin = User::where('role',1)->first();
			$admin->notify(new Bot($text));
	    }
	    elseif($chat_text == '/pending')
	    {
	    	$pendingTransactionCount = Transaction::where('status',1)->count();

	    	$text = "Currently we still have ".$pendingTransactionCount." pending ticket request. PLEASE SOMEONE SOLVE IT!";

	    	$admin = User::where('role',1)->first();
			$admin->notify(new Bot($text));
	    }
	    else
	    {
	    	$text = "Sorry, I dont understand what are you talking about. You can always type /help to view available command to talk with me";

	    	$admin = User::where('role',1)->first();
			$admin->notify(new Bot($text));
	    }

	    return 'ok';
    }
}
