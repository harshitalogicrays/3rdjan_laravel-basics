<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customerController extends Controller
{
    function index(){
        return view('customer.index');   
    }
    function create(){
        return view('customer.create');
    }
    function store(Request $request){
        // return $request->all();
        // return $request->email; //$request['email'] and $request->input('email')
        // if($request->isMethod('post')){
        //     return $request->all();
        // }

        // if($request->has('email')){
        //     return $request->input('email');
        // }

        // return $request->all();
        // return $request->only(['email','name','gender']);
        // return $request->except('_token','password');

        
        // if($request->has(['email','username'])){
        //     return $request->input('email');
        // }
        // if($request->hasAny(['email','username'])){
        //     return $request->input('email');
        // }

        // dd($request->all());

            $request->validate([
                'name'=>'required',
                'email'=>['required'],
                'password'=>['required','min:5','max:20'],
                'cpassword'=>['required','same:password'],
            ]);

        return redirect('/customer')->with('message','customer added');
    }
}

// 'password'=>['required','min:5','max:20','confirmed']