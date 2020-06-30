<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function sapa(Request $request){
        dd($request);
        return "Halo";
    }

    public function sapa_post(Request $request){
        $nama = $request['nama'];
        return $nama;
    }
}
