<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class SimpleCounter extends Controller
{
    public $count;
    function __construct()
    {
        $this->count = 0;
    }
    public function countView()
    {
        return view('counter')->with('count',0);
    }
    public function count(Request $request)//$request contain the data from form
    {
        $value = $request->CurrentValue; 
        switch($request->submitbutton) {

            case 'add': 
               $this->count=$value+1;
            break;
        
            case 'sub': 
                $this->count=$value-1;//action for save-draft here
            break;
        }
                return view('counter')->with('count', $this->count);
    }
    
}
