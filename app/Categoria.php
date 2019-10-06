<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    protected $fillable = ['nombre', 'slug', 'descripcion', 'color'];

    public $timestamps = false;

    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }
}
