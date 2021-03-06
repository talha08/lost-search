<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function about()
    {
        return view('about')->with('title', 'About Lost');
    }


    public function condition()
    {
        return view('condition')->with('title', 'Lost::Terms & Condition');
    }


}
