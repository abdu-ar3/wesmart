<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function dashboard()
    {
        return view('frontend.client');
    }

    public function ftbm()
    {
        $tbms = \App\Models\Tbm::paginate(10);
        return view('frontend/tbm.index', ['tbms' => $tbms]);
    }


    public function frontic()
    {
        $events = \App\Models\Event::paginate(10);
        return view('frontend/frontic.index', ['events' => $events]);
    }

    public function digital_reads()
    {
        $categories = \App\Models\Category::paginate(10);
        return view('frontend/digital.index', ['categories' => $categories]);
    }

    public function show($id)
    {
        //    
    }

    public function ebook()
    {
        return view('frontend/help.index');
    }

    public function flash()
    {
        return view('frontend/flash.index');
    }

    public function donation()
    {
        return view('frontend/donation.index');
    }
}
