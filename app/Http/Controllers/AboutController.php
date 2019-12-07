<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = "LaRaVeL";
        return view('welcome')->with('mytitle',$title);
    }

}
