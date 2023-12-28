<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio.portfolio');
    }

    public function wedding()
    {
        return view('portfolio.wedding-bells');
    }

    public function photo()
    {
        return view('portfolio.photo-memories');
    }

    public function bridegroom()
    {
        return view('portfolio.bride-groom');
    }

    public function florist()
    {
        return view('portfolio.florist');
    }

    public function engagement()
    {
        return view('portfolio.engagement');
    }

    public function vows()
    {
        return view('portfolio.vows');
    }
}
