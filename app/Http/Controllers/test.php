<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;
use App\User;
use Log;
use Mail;

class test extends Controller
{
	
    public function index()
    {
    	return view('test');
    }

    public function get_home_page()
    {
		    
         $user = factory(\App\User::class)->create();
         echo "<pre>";print_r($user);die;
         return view('second');
    }

    public function get_home_data()
    {
    	//echo "<pre>";print_r($_POST);die;
    	return view('email.welcome');
     
    }

   public function store()
   {

   		//ProcessPodcast::dispatch();
   		Log::info("Request Cycle with Queues Begins");
        $this->dispatch(new ProcessPodcast());
        Log::info("Request Cycle with Queues Ends");
   }
}
