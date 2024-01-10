<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $numero = rand(1,10);
        $nombre = "Manuel";
//        return view("main",compact('numero','nombre'));
        return view("home",["numero"=>$numero,"nombre"=>$nombre]);
    }


}
