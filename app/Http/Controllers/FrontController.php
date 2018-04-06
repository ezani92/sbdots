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
            return view('mobile.download');
        }

    	return view('front.downloads');
    }

    public function sportsbooks()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.sportsbook');
        }

    	return view('front.sportsbook');
    }

    public function live_casinos()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.live_casino');
        }

    	return view('front.live_casino');
    }

    public function slots()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.slot');
        }

    	return view('front.slot');
    }

    public function arcades()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.arcade');
        }
        
    	return view('front.Arcade.arcade');
    }

    public function game_live22()
    {
    	return view('front.Arcade.game-live22');
    }

    public function lottery()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.lottery');
        }

    	return view('front.lottery');
    }

    public function promotions()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.promotions');
        }

    	return view('front.promotion');
    }

    public function contact_us()
    {

        $agent = new Agent;

        if($agent->isMobile())
        {
            return view('mobile.contactus');
        }

    	return view('front.contact_us');
    }

}
