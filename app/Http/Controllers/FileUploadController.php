<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    function index(){
        return view('fileupload');
    }
    function upload(Request $request){
       $file =  $request->file("image");  
    //    dd($file);

        $request->validate([
            'image'=>'required | mimes:png,jpg,jpeg,pdf | max:2048'         
        ]);
        
       if($request->hasFile('image')){
        $filename = time()."dummy.".$file->getClientOriginalExtension();
        $file->move('uploads',$filename);
        return redirect()->back()->with('message','file upladed successfully');
       }
    }
}
