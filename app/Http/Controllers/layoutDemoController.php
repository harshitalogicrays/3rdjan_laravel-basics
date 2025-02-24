<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class layoutDemoController extends Controller
{
    function index(){
        return view('home');   
    }
    function about(){
        return view('about');   
    }
    function products(){
        return view('products');   
    }
    function login(){
        return view('login');   
    }
    function register(){
        return view('register');   
    }
}
