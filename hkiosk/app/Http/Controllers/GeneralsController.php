<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralsController extends Controller
{
    public function welcome()
    {
    	return view('welcome');
    }
    public function landing()
    {
    	return view('landing');
    }
}
