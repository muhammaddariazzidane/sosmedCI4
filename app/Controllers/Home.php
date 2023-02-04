<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('home/detailPost');
        return view('home/posts');
    }
}
