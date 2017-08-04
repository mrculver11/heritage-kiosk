<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralsController extends Controller
{
    public function landing()
    {
    	return view('landing');
    }
    public function index() 
    {
         $generals = \DB::table('generals')->get();
    	return view('index', compact('generals'));
    }
    public function single($id) 
    {
        $general = \DB::table('generals')->find($id);
        return view('single', compact('general'));
    }
    public function moh()
    {
         $mohs = \DB::table('mohs')->get();
        return view('medalofhonor', compact('mohs'));
    }
    public function song()
    {
        return view('song');
    }
    public function insignia()
    {
        return view('insignia');
    }
}
