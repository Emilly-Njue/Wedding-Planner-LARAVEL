<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function service()
    {
        return view ('services.services');
    }

    public function lovelydecoration()
    {
        return view('services.lovely_decoration');
    }

    public function seating()
    {
        return view('services.seating');
    }

    public function music()
    {
        return view('services.music_dj');
    }

    public function food()
    {
        return view('services.dinner_drinks');
    }

    public function costume()
    {
        return view('services.costume');
    }

}
