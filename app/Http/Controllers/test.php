<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index()
    {
    	return view('test');
    }

    public function get_home_page()
    {
		return view('second');
    }

    public function get_home_data()
    {
    	echo "<pre>";print_r($_POST);die;
    	return view('test');
    }
}
