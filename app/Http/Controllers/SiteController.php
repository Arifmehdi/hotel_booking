<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){
        return view('website.home');
    }

    public function rooms(){
        return view('website.rooms');
    }

    public function about(){
        return view('website.about');
    }

    public function events(){
        return view('website.events');
    }

    public function contact(){
        return view('website.contact');
    }

    public function comingSoon(){
        return view('website.comingSoon');
    }
}
