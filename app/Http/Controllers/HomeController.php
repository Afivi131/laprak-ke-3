<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controllers
{
    public function index() {
        return view('halaman-1');
    }
}