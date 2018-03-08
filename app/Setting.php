<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public static function meta($meta)
    {
    	$setting = Setting::where('meta',$meta)->first();

    	return $setting->value;
    }
}
