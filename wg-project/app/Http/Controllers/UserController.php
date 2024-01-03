<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function wealth()
    {
        return view('frontend.wealth');
    }
    public function approach()
    {
        return view('frontend.approach');
    }


    public function team()
    {
        // Your "Team" page logic goes here
        return view('frontend.team');
    }
    public function service()
    {
        return view('frontend.service');
    }

}
