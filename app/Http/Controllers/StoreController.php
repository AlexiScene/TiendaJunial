<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Producto;



class StoreController extends Controller
{
    public function index(){
    	$productos = Producto::all();
    	//dd($productos);
    	return view('store.index', compact('productos'));
    }

    public function show($slug)
    {
    	$producto = Producto::where('slug', $slug)->first();
    	//dd($producto);

        return view('store.show', compact('producto'));
    }
}
