<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function products(){
        return view('products');
        }
            
    public function news(){
        return view('news', ['news' => 'news','topic' => 'educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19']);
         }
        
    public function program(){
        return view('program');
         }
        
    public function about(){
        return view('about-us');
        }
    public function kontak(){
         return view('contact-us');
            }
        }