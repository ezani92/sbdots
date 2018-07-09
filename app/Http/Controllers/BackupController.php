<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class BackupController extends Controller
{
    public function index()
    {
    	return view('admin.backup.index');
    }

    public function act(Request $request)
    {
    	$input = $request->all();

    	$admin = User::find(1);  

		if (Hash::check($input['password'], $admin->password))
		{
		    return 'betol';// The passwords match...
		}
		else
		{
			return 'Salah';
		}
    }
}
