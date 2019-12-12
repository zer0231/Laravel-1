<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounterController extends Controller
{
    

	public function randomView()
    {
        return view('random')->with('randomNumber', "Enter range");
    }


    public function random(Request $request)//$request contain the data from form
    {
        $min = $request->from;
        $max = $request->to;
        $randomNumber = rand($min, $max);

        return view('random')->with('randomNumber', $randomNumber);
    }
}
