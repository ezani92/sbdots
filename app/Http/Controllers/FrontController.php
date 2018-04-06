<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class FrontController extends Controller
{

	public function __construct()
    {
        $this->middleware('referral');
    }

    public function index()
    {
    	$agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.index');
        }

        return view('front.index');
    }

    public function downloads()
    {
        $agent = new Agent;

        if($agent->isMobile())
        {
            return 'mobile.download';
        }

    	return view('front.downloads');
    }

    public function sportsbooks()
    {

        if($agent->isMobile())
        {
            return 'mobile.sportsbook';
        }

    	return view('front.sportsbook');
    }

    public function live_casinos()
    {
        if($agent->isMobile())
        {
            return 'mobile.live_casino';
        }

    	return view('front.live_casino');
    }

    public function slots()
    {
        if($agent->isMobile())
        {
            return 'mobile.slot';
        }

    	return view('front.slot');
    }

    public function arcades()
    {

        if($agent->isMobile())
        {
            return 'mobile.arcade';
        }
        
    	return view('front.Arcade.arcade');
    }

    public function game_live22()
    {
    	return view('front.Arcade.game-live22');
    }

    public function lottery()
    {
        if($agent->isMobile())
        {
            return 'mobile.lottery';
        }

    	return view('front.lottery');
    }

    public function promotions()
    {

        if($agent->isMobile())
        {
            return 'mobile.promotion';
        }

    	return view('front.promotion');
    }

    public function contact_us()
    {

        if($agent->isMobile())
        {
            return 'mobile.contactus';
        }

    	return view('front.contact_us');
    }

}
