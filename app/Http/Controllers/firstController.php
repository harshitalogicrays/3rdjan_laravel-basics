<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function student($id){
    //    return view('student')->with(['id'=>$id]);
    // return view('student')->with('id',$id);

    $username ="Hiren";
    // return view('student')->with(['id'=>$id,'username'=>$username]);
    // return view('student',compact('id','username'));

    $address = "<b>Pune</b>";
    $sports = ['cricket','badminton','tennis','basketball'];
    return view('student',compact('id','username','address','sports'));
    }
}
