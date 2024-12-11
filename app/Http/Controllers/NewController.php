<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //

    public function about(){

        return view('about');

    }

    public function contact(){

        return view('contact');

    }


    public function services(){

        return view('services');

    }




}
