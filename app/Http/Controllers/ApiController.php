<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}
