<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = ['nombre', 'slug', 'descripcion', 'extract', 'imagen', 'visible', 'precio', 'categoria_id'];

    //Relacion con Categoria
    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }

}
