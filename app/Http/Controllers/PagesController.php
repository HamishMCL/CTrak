<?php

namespace CTrak\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use CTrak\Http\Requests;
use CTrak\Http\Controllers\Controller;
use CTrak\User;
use Auth;

class PagesController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Routes for getting the landing page
|--------------------------------------------------------------------------
|
*/
    public function landingpage() {

    	return view('pages.signup');

    }
/*
|--------------------------------------------------------------------------
| Routes for signing new users up 
|--------------------------------------------------------------------------
|
*/
    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('/')
            ->withErrors($validator)
            ->withInput();
                    
        }

        User::create([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

         return redirect()
         ->route('landingpage')
         ->with('success','');
    }

    public function test()
    {
        
    }

    public function signIn(Request $request)
    {
         $this->validate($request,[
            'username' => 'required',
            'password' => 'required',

        ]);

         if(!Auth::attempt($request->only(['username','password'])))
         {
            dd('failed');
         }
        
      

            return redirect()
         ->route('stats');
        
    
    }
/*
|--------------------------------------------------------------------------
| Routes for getting the dashboard
|--------------------------------------------------------------------------
|
*/
    public function dashboard() {

        return view('pages.stats');
    }


/*
|----------------------------------------------------------------------------
| Routes for getting the new innings page and update the db with new stats
|----------------------------------------------------------------------------
|
*/

    public function newinnings() {

        return view('pages.new-innings');
    }


    public function storeNewInnings()
    {
        return redirect()->route('stats')->with('success','Your stats have been updated!');
    }



/*
|--------------------------------------------------------------------------
| Routes getting the stats
|--------------------------------------------------------------------------
|
*/


     public function getStats()
    {
      
          if (Auth::user())
            {
            dd('here');
             }

          $username = 'ackmed';
     

        return view('pages.stats')->with('name', $username);
    }

    public function settings()
    {
        return view('pages.settings');
    }






}
