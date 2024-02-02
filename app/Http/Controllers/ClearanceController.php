<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clearance;
use DB;

class ClearanceController extends Controller
{
    public function index(){

        $clearances=Clearance::all();
        return view('clearance.index')->with('clearances',$clearances);
    }

    public function store(Request $request){
        $data=$request->validate([
            'q1'=>'required',
        ]);
        
        $clearance =new Clearance;
        $clearance->q1=$request->input('q1');
        $clearance->save();

        return redirect(route('dashboard'))->with('success','You have completed your clearance');
    }
}
