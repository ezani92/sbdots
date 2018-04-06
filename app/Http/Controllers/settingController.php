<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class settingController extends Controller
{
    public function index()
    {
    	return view('admin.settings');
    }

    public function update(Request $request)
    {
    	$input = $request->all();

    	$setting_1 = Setting::find(1);
    	$setting_1->value = $input['seo_title'];
    	$setting_1->save();

    	$setting_2 = Setting::find(2);
    	$setting_2->value = $input['seo_desc'];
    	$setting_2->save();

    	$setting_3 = Setting::find(3);
    	$setting_3->value = $input['seo_keyword'];
    	$setting_3->save();

    	$setting_4 = Setting::find(4);
    	$setting_4->value = $input['google_analytic_id'];
    	$setting_4->save();

    	$setting_5 = Setting::find(5);
    	$setting_5->value = $input['min_deposit'];
    	$setting_5->save();

    	$setting_6 = Setting::find(6);
    	$setting_6->value = $input['max_deposit'];
    	$setting_6->save();

        $setting_7 = Setting::find(7);
        $setting_7->value = $input['annoucement'];
        $setting_7->save();

    	Session::flash('message', 'Settings Succesfully Updated'); 
        Session::flash('alert-class', 'alert-success');

    	return redirect('admin/settings');
    }
}
