<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

	public function __construct()
    {
        $this->middleware('referral');
    }

    public function index()
    {
    	return view('front.index');
    }

    public function mobile()
    {
    	return view('front.mobile');
    }

    public function sportsbooks()
    {
    	return view('front.sportsbook');
    }

    public function live_casinos()
    {
    	return view('front.live_casino');
    }

    public function slots()
    {
    	return view('front.slot');
    }

    public function arcades()
    {
    	return view('front.Arcade.arcade');
    }

    public function game_live22()
    {
    	return view('front.Arcade.game-live22');
    }

    public function poker()
    {
    	return view('front.poker');
    }

    public function promotions()
    {
    	return view('front.promotion');
    }

    public function contact_us()
    {
    	return view('front.contact_us');
    }

}
