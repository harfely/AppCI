<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}