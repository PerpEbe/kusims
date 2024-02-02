<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function deferement(){
        return view('student.deferement');
    }

    public function units(){
        return view('student.units_curriculum');
    }

    public function examcard(){
        return view('student.examcard');
    }

    public function special_exams(){
        return view('student.special_exams');
    }

    public function supplementary_exams(){
        return view('student.supplementary_exams');
    }

    public function transcript(){
        return view('student.transcript');
    }
}
