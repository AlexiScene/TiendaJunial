<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categorias = Categoria::all();
        //dd($categorias);
        return view('admin.categoria.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $this->validate($request, [
            'nombre' => 'required|unique:categorias|max:255',
            'color' => 'required',
        ]);

        $categoria = Categoria::create([
            'nombre' => $request->get('nombre'),
            'slug' => str_slug($request->get('nombre')),
            'descripcion' => $request->get('descripcion'),
            'color' => $request->get('color')
        ]);

        $message = $categoria ? 'Categoría agregada correctamente!' : 'La categoría NO pudo agregarse!';

        return redirect()->route('categoria.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return $categoria;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $this->validate($request, [
          'nombre' => 'required|max:255',
          'color' => 'required',
        ]);
        $categoria->fill($request->all());
        $categoria->slug = str_slug($request->get('nombre'));
        
        $updated = $categoria->save();
        
        $message = $updated ? 'Categoría actualizada correctamente!' : 'La Categoría NO pudo actualizarse!';
        
        return redirect()->route('admin.categoria.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $deleted = $categoria->delete();

        $message = $deleted ? 'Categoria eliminada correctamente!' : 'La categoria no pudo eliminarse!';

        return redirect()->route('categoria.index')->with('message', $message);
    }
}
