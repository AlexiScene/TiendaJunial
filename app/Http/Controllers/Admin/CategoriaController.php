<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria;

use App\User;
use App\Repositories\UserRepository;


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
    public function edit(Categoria $categoria, $id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('admin.categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $this->validate($request,[ 'nombre'=>'required', 'descripcion'=>'required', 'color'=>'required']);
 
        categoria::find($id)->update($request->all());
        
         return redirect()->route('categoria.index')->with('message','Categoria actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $deleted = $categoria->delete();

        
          $message = $deleted ? 'Categoria eliminada correctamente!' : 'La categoria NO pudo eliminarse!';

        return redirect()->route('categoria.index')->with('message', $message);
    }
}
