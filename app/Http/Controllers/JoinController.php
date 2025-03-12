<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class JoinController extends Controller
{
    function index(){
        // $students =  DB::table('student')
        //             ->join('course','course.id', '=','student.course_id')
        //             ->select('student.id','student.name','student.mobile','course.name as coursename')
        //             ->get();
        // return $students;

//         $students =  DB::table('student')
//         ->join('course','course.id', '=','student.course_id')
//         ->select(DB::raw('count(*) as student_count'))
//         ->get();
// return $students;

// $students =  DB::table('student')
// ->join('course','course.id', '=','student.course_id')
// ->select(DB::raw('count(*) as student_count'),'course.name')
// ->groupBy('course.name')
// ->get();
// return $students;

// $students =  DB::table('student')
// ->join('course','course.id', '=','student.course_id')
// ->select(DB::raw('count(*) as student_count'),'course.name')
// ->groupBy('course.name')
// ->orderBy('student_count','desc')
// ->get();
// return $students;

$students =  DB::table('student')
->join('course','course.id', '=','student.course_id')
->select(DB::raw('count(*) as student_count'),'course.name')
->groupBy('course.name')
->having('course.name','php')
->get();
return $students;
    }
}
