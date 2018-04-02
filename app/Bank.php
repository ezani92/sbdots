<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    public function records()
    {
        return $this->hasMany('App\BankRecord');
    }
}
