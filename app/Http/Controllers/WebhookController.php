<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class WebhookController extends Controller
{
    public function test(Request $request)
    {
    	$update = $request->json()->all();

    	$test = new Setting;

	    $test->meta = $request->json('message.chat.id');
	    $test->value = 'test_value';
	    $test->save();

	    return 'ok';
    }
}
