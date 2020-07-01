<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register
    public function register(){
    	return view('register');
    }

    public function welcome(Request $biodata){
    	$first = $biodata["namaAwal"];
    	$last = $biodata["namaAkhir"];
    	$data = array ("namaAwal" => $first, "namaAkhir" => $last);

    	return view('welcome', $data);
    }
}
