<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisController extends Controller
{
    public function index()
    {
        return view('statis-pages.beranda');
    }
}
