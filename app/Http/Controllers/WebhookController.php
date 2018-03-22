<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Bot;
use App\User;

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
			$admin->notify(new NewWithdraw($text));
	    }
	    else
	    {
	    	$text = "Sorry, I dont understand what are you talking about. You can always type /help to view available command to talk with me";

	    	$admin = User::where('role',1)->first();
			$admin->notify(new NewWithdraw($text));
	    }

	    return 'ok';
    }
}
