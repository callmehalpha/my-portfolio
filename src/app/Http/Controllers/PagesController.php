<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function homePage()
    {
        return view('index');
    }
}
