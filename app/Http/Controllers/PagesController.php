<?php

namespace CTrak\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use CTrak\Http\Requests;
use CTrak\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function landingpage() {

    	return view('pages.signup');

    }

    public function dashboard() {

        return view('pages.stats');
    }

    

    public function newinnings() {

        return view('pages.new-innings');
    }

    public function storeNewInnings()
    {
        return redirect()->route('stats')->with('success','Your stats have been updated!');
    }






     public function getStats()
    {
        return view('pages.stats');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function test()
    {
        return redirect()->route('landingpage')->with('success','');
    }





}
