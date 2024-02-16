<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use DB;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::all();

        return view('reporting.index')->with('reports',$reports);
    }

    public function create(){
        return view('reporting.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'year'=>'required',
            'semester'=>'required',
        ]);
        
        $report =new Report;
        $report->year=$request->input('year');
        $report->semester=$request->input('semester');
        $report->user_id=$request->input('user_id');
        $report->save();

        return redirect(route('dashboard'))->with('success','You have reported for this Semester');
    }

}
