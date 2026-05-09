<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function offer()
    {
        return view('pages.offer');
    }

    public function policy()
    {
        return view('pages.policy');
    }
}
