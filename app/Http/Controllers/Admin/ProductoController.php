<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SaveProductoRequest;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $productos = Producto::orderBy('id', 'desc')->paginate(7);
         //dd($productos);
         return view('admin.producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::orderBy('id', 'desc')->pluck('nombre', 'id');
        //dd($categorias);
        return view('admin.producto.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProductoRequest $request)
    {
       $data = [
        	'nombre' => $request->get('nombre'),
        	'slug' => str_slug($request->get('nombre')),
        	'descripcion' => $request->get('descripcion'),
        	'extract' => $request->get('extract'),
        	'precio' => $request->get('precio'),
        	'imagen' => $request->get('imagen'),
        	'visible' => $request->has('visible ') ? 1 : 0,
        	'categoria_id' => $request->get('categoria_id')
        ];

        $producto = Producto::create($data);

        $message = $producto ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse';
        return redirect()->route('producto.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
         $categorias = Categoria::orderBy('id', 'desc')->pluck('nombre', 'id');

         return view('admin.producto.edit', compact('categorias', 'producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProductoRequest $request, Producto $producto)
    {
       
        $producto->fill($request->all());
        $producto->slug = str_slug($request->get('nombre'));
        $producto->visible = $request->has('visible') ? 1 : 0;
        
        $updated = $producto->save();
        
        $message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';
        
        return redirect()->route('producto.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
       $deleted = $producto->delete();

       $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';

       return redirect()->route('producto.index')->with('message', $message);
    }
}

