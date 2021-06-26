<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyecto;

class ProyectoController extends Controller
{
    public  function index(){
    $proyectos = proyecto::orderBy('id', 'desc')->get();       

        return view('index',compact('proyectos'));

    }
}
