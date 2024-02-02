<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Deferement;
use DB;

class DeferementController extends Controller
{
    public function index(){
        $deferements=Deferement::all();
        return view('deferement.index')->with('deferements',$deferements);
    }

    public function create(){
        return view('deferement.create');
    }

    public function store(Request $request){
        $data=$request->validate([
            'year'=>'required',
            'semister'=>'required',
            'notes'=>'required',
            'reasons'=>'required',
            'hod_approval'=>'required',
            'registrar_approval'=>'required',
        ]);

        // Validator::make($request->all(),[
        //     'year'=>'required',
        //     'semister'=>'required',
        //     'notes'=>'required',
        //     'reasons'=>'required',
        //     'hod_approval'=>'required',
        //     'registrar_approval'=>'required', 
        // ])->validate();

        // Deferement::create([
        //     'year'=>$request->year,
        //     'semister'=>$request->semister,
        //     'notes'=>$request->notes,
        //     'reasons'=>$request->reasons,
        //     'hod_approval'=>$request->hod_approval,
        //     'registrar_approval'=>$request->registrar_approval,
        // ]);
        
        $deferement =new Deferement;
        $deferement->year=$request->input('year');
        $deferement->semister=$request->input('semister');
        $deferement->notes=$request->input('notes');
        $deferement->reasons=$request->input('reasons');
        $deferement->hod_approval=$request->input('hod_approval');
        $deferement->registrar_approval=$request->input('registrar_approval');

        $deferement->save();

        return redirect(route('deferement.index'))->with('success','You have Defered this semister');
    }
}
