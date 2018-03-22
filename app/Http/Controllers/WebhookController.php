<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class WebhookController extends Controller
{
    public function test(Request $request)
    {
    	$input = $request->all();

    	$test = new Setting;

	    $test->meta = 'test';
	    $test->value = 'test_value';
	    $test->save();

	    return 'ok';
    }
}
