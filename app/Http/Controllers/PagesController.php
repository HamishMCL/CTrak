<?php

namespace CTrak\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use CTrak\Http\Requests;
use CTrak\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function landingpage() {

    	return view('landing_page');

    }

    public function dashboard() {

        return view('dashboard');
    }

    public function newinnings() {

        return view('pages.new_innings');
    }



    public function settings()
    {
        return view('pages.settings');
    }

    public function test()
    {
        return redirect()->route('landingpage')->with('failed','');
    }





}
