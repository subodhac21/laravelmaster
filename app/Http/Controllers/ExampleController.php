<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function homepage(){
        $ourName = 'Subodh';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];
        return view('homepage', ['name'=>$ourName, 'animals'=> $animals]);
    }
    public function aboutPage(){
        return view('single-post');
    }
}
