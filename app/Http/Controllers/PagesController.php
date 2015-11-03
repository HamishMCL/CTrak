<?php

namespace CTrak\Http\Controllers;


use Illuminate\Http\Request;
use CTrak\Http\Requests;
use CTrak\Http\Controllers\Controller;
use CTrak\User;
use Auth;
use Validator;
use DB;
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

 

    public function signIn(Request $request)
    {
         $this->validate($request,[
            'username' => 'required',
            'password' => 'required',

        ]);
    

         if(!Auth::attempt($request->only(['username','password'])))
         {
             return redirect()
         ->route('landingpage')
         ->with('failed','');
         }

            if (Auth::check())
            {
                 $id = Auth::id();

                   $stats = User::Find($id);

                return  view('pages.stats', compact('stats'));
            }
         
    
    }
/*
|--------------------------------------------------------------------------
| Routes for getting the dashboard
|--------------------------------------------------------------------------
|
*/

/*
|----------------------------------------------------------------------------
| Routes for getting the new innings page and update the db with new stats
|----------------------------------------------------------------------------
|
*/

    public function newinnings() {


        return view('pages.new-innings');
    }


    public function storeNewInnings(Request $request)
    {
     
        if (Auth::check())
            {
                 $id = Auth::id();

                 // Batting

                $newruns = $request->input('runs');
                $newouts = $request->input('outs');
                $newsixes = $request->input('sixes');
                $newfours = $request->input('fours');
             
           

                // Bowling

                $newwickets = $request->input('wickets');
                $newovers = $request->input('overs');
                $newruns_conceded = $request->input('runs_conceded');
                $newmaidens = $request->input('maidens');
                $newbest_figures = $request->input('runs');

                // fielding

                $newcatches = $request->input('catches');
                $newrun_outs = $request->input('run_outs');

                $newhighestwicket =$request->input('wickets');
                $newlastestruns = $request->input('runs_conceded');
  


                 $stats = User::Find($id);

                 $runs = $stats->runs;
                 $sixes = $stats->sixes;
                 $fours = $stats->fours;
                 $outs = $stats->outs;

                 $wickets =$stats->wickets;
                 $runs_conceded = $stats->runs_conceded;
                 $overs = $stats->overs;
                 $maidens = $stats->maidens;

                 $catches = $stats->catches;
                 $run_outs = $stats->run_outs;

                 $highest_wickets = $stats->highest_wickets;
                 $lastest_runs = $stats->lastest_runs;
                 $innings = $stats->Innings;



                 if($newhighestwicket > $highest_wickets)
                 {
                    $stats->highest_wickets = $newhighestwicket;
                    $stats->lastest_runs = $newlastestruns;
                 }
                 else if($newhighestwicket == $highest_wickets )
                 {
                    if( $newlastestruns < $lastest_runs)
                    {
                        $stats->lastest_runs = $newlastestruns;
                    }
                 }

                 $updatedruns = $runs + $newruns;
                 $updatedsixes = $sixes + $newsixes;
                 $updatedfours = $fours + $newfours;
                 $updatedouts = $outs + $newouts;

                 $updatedwickets = $wickets + $newwickets;
                 $updatedruns_conceded = $runs_conceded + $newruns_conceded;
                 $updatedovers = $overs + $newovers;
                 $updatedmaidens = $maidens + $newmaidens;

                 $updatedcatches = $catches + $newcatches;
                 $updatedrun_outs = $run_outs + $newrun_outs;

                 $updated_innings = $innings + 1 ;


                 $stats->runs =  $updatedruns;
                 $stats->sixes = $updatedsixes;
                 $stats->fours = $updatedfours;
                 $stats->outs =  $updatedouts;

                 if($updatedouts <= 0 )
                 {
                     $stats->Average = 0;
                 }else
                 {
                    $stats->Average = $updatedruns / $updatedouts;
                }



                 $stats->Innings = $updated_innings;
                 $stats->wickets = $updatedwickets;
                 $stats->runs_conceded = $updatedruns_conceded;
                 $stats->overs = $updatedovers;
                 $stats->maidens = $updatedmaidens;

                 if($updatedovers <= 0)
                 {
                    

                 }
                 else
                 {
                     $stats->economy =  $updatedruns_conceded /  $updatedovers;
                 }

                 if($updatedruns_conceded <=0)
                 {

                 }
                 else
                 {
                    $stats->strike_rate = $updatedovers * 6 / $updatedwickets;
                 }


                 if($newruns > $stats->Highest_score)
                 {
                    $stats->Highest_score = $newruns;
                 }


                 $stats->catches = $updatedcatches;
                 $stats->run_outs = $updatedrun_outs;



                $stats->save();

                
            }
        return view('pages.stats',compact('stats'));
    }



/*
|--------------------------------------------------------------------------
| Routes getting the stats
|--------------------------------------------------------------------------
|
*/


     public function getStats(Request $request)
    {
      

             if (Auth::check())
            {
                 $id = Auth::id();
                $stats = User::Find($id);

                
            }

        return view('pages.stats',compact('stats'));
    }



    public function logOut(Request $request)
    {
        Auth::logOut();
        if(!Auth::check())
        {
            dd('still loged in');
        }
        Session::flush();

        return view('landingpage');
    }



}
