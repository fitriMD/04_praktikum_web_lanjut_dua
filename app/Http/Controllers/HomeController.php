<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function menucafe()
    {
        return view('menucafe');
    }

    public function varianmenu()
    {
        return view('varianmenu');
    }

    public function todayspecial()
    {
        return view('todayspecial');
    }

    public function about()
    {
        return view('about');
    }

    public function informasi1()
    {
        return view('informasi1');
    }

    public function informasi2()
    {
        return view('informasi2');
    }
    public function contact()
    {
        return view('contact');
    }
    public function respon()
    {
        return view('respon');
    }
}

