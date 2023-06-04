<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index(){
        $jasa = Jasa::all();
        // dd($jasa);
        $title = "Jasa";
        // return view('jasa',['title' => $title]);
        return view('jasa',compact('jasa','title'));
    }
}
