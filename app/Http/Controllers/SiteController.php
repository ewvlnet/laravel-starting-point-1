<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function about()
    {
        return view('site.about');
    }

    public function history()
    {
        return view('site.history');
    }

    public function services()
    {
        return view('site.services');
    }

    public function contact()
    {
        return view('site.contact');
    }
}


