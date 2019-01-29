<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'nombre' => 'Super heroes',
                'slug' => 'Super-heroes',
                'descripcion' => 'Lorem ipsum sit amet, consectetur adipisicing elit. Tempore. perferendis!',
                'color' => '#440022'
            ],
            [
                'nombre' => 'Geek',
                'slug' => 'geek',
                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore. perferendis!',
                'color' => '#445500'
            ]
        );

        Categoria::insert($data);
    }
}