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
        $products = array(
            array("name"=>"product1","price"=>200,"category"=>"category1","image"=>"images/a.jpg"),
            array("name"=>"product2","price"=>1200,"category"=>"category2","image"=>"images/b.jpg"),
            array("name"=>"product3","price"=>800,"category"=>"category1","image"=>"images/d.jpg"),
            array("name"=>"product4","price"=>400,"category"=>"category3","image"=>"images/c.jpeg"),
            array("name"=>"product5","price"=>100,"category"=>"category1","image"=>"images/a.jpg"),
            array("name"=>"product6","price"=>1000,"category"=>"category4","image"=>"images/b.jpg"),
            array("name"=>"product7","price"=>2020,"category"=>"category1","image"=>"images/d.jpg"),
    );
        return view('products',compact('products'));   
    }
    function login(){
        return view('login');   
    }
    function register(){
        return view('register');   
    }
}
