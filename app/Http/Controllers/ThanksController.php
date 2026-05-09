<?php

namespace App\Http\Controllers;

class ThanksController extends Controller
{
    public function __invoke()
    {
        return view('pages.thanks');
    }
}
