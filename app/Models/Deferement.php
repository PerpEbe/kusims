<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deferement extends Model
{
    use HasFactory;
    protected $fillable=[
            'year'=>'required',
            'semister'=>'required',
            'notes'=>'required',
            'reasons'=>'required',
            'hod_approval'=>'required',
            'registrar_approval'=>'required', 
    ];
}
