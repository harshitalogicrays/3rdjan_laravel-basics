<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Rules\uppercase;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class customerController extends Controller
{
    function index(){
        // $customers = Customer::all();
        $customers = Customer::paginate(3);
        return view('customer.index',compact('customers'));   
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
                'name'=>['required',new uppercase],
                'email'=>['required' , function($attribute , $value , $fail){
                    if(!preg_match("/^[\w\.]+\@[\w]+\.[a-zA-Z]{3}$/" , $value)){
                        $fail("Invalid :attribute");
                    }
                }],
                'password'=>['required','min:5','max:20'],
                'cpassword'=>['required','same:password'],
            ]);

            $customer = new Customer; 
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->mobile = $request->mobile;
            $customer->dob = $request->dob;
            $customer->password = $request->password;
            $customer->gender = $request->gender;
            $customer->address = $request->address;
            $customer->status = $request->status==true?"1":"0";
            if($customer->save()){
                return redirect('/customer')->with('message','customer added');
            }

    }

    function delete($id){
        $customer = Customer::find($id)->delete();
        return redirect('/customer')->with('message','customer deleted');
    }
    function edit($id){
        $customer = Customer::find($id);
        return view('customer.edit',compact('customer'));
    }
    function update($id, Request $request){
        $customer = Customer::find($id);
        $request->validate([
            'name'=>['required',new uppercase],
            'email'=>['required' , function($attribute , $value , $fail){
                if(!preg_match("/^[\w\.]+\@[\w]+\.[a-zA-Z]{3}$/" , $value)){
                    $fail("Invalid :attribute");
                }
            }],
            'password'=>['required','min:5','max:20'],
            'cpassword'=>['required','same:password'],
        ]);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->dob = $request->dob;
        $customer->password = $request->password;
        $customer->gender = $request->gender;
        $customer->address = $request->address;
        $customer->status = $request->status==true?"1":"0";
        if($customer->save()){
            return redirect('/customer')->with('message','customer added');
        }
    }
}

// 'password'=>['required','min:5','max:20','confirmed']