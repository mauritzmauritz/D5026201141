<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showETS(){
        return view('ETS');
    }
    function showTugasPHP(){
        return view('TugasPHP');
    }
    function showkode(Request $request){
        return view('kode');
    }
}
