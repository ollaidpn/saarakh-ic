<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{
    public function home(){
        return view('FrontOffice.Pages.home');
    }

    public function causes(){
        return view('FrontOffice.Pages.causes');
    }

    public function about(){
        return view('FrontOffice.Pages.about');
    }

    public function events(){
        return view('FrontOffice.Pages.events');
    }

    public function blog(){
        return view('FrontOffice.Pages.blog');
    }

    public function partners(){
        return view('FrontOffice.Pages.partners');
    }

    public function contacts(){
        return view('FrontOffice.Pages.contacts');
    }
}
