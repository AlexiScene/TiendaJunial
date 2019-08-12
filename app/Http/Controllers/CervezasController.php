<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CervezasController extends Controller
{
     public function index(){
    	$cervezas = Cerveza::all();
    	//dd($productos);
    	return view('store.index', compact('cervezas'));
    }

    public function show($slug)
    {
    	$cerveza = Cerveza::where('slug', $slug)->first();
    	//dd($producto);

        return view('store.show', compact('cerveza'));
    }
}
