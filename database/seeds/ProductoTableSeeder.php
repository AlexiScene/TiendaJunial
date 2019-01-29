<?php
use Illuminate\Database\Seeder;
use App\Producto;
class ProductoTableSeeder extends Seeder
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
                'nombre'          => 'Cerveza Corona',
                'slug'          => 'Cerveza Corona',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 275.00,
                'imagen'         => '{{asset('/imagenes/articulos/thumb_55670_default_medium.jpeg')}}',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Whisky Jack Daniels',
                'slug'          => 'playera-2',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 255.00,
                'imagen'         => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Blue_Distressed_Superman_Logo_T_Shirt_hi_res.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Ron Appleton',
                'slug'          => 'playera-3',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 300.00,
                'imagen'         => '{{asset('/imagenes/articulos/41c3eaP3d-L.jpg')}}',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Vino Serbal',
                'slug'          => 'playera-4',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 475.00,
                'imagen'         => 'http://rlv.zcache.com/funny_computer_geek_t_shirt_tshirt-r537052a6a7b94b028e47b274c099fe24_804g5_324.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Gancia',
                'slug'          => 'playera-5',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 280.00,
                'imagen'         => 'https://www.nerdyshirts.com/media/catalog/product/cache/1/image/400x445/9df78eab33525d08d6e5fb8d27136e95/g/e/geek_1.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Vodka Smirnoff',
                'slug'          => 'playera-6',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 275.00,
                'imagen'         => 'http://bobstshirtcompany.net/media/catalog/product/cache/1/image/650x650/9df78eab33525d08d6e5fb8d27136e95/i/_/i_know_html.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Vino Flechas de los Andes',
                'slug'          => 'playera-7',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 275.00,
                'imagen'         => 'http://www.koszulkomat.eu/images4/preview/14/1430_7-0.png',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Licor Frangelico',
                'slug'          => 'playera-8',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'precio'         => 275.00,
                'imagen'         => 'http://cdn.somethinggeeky.com/assets/images/products/amazonlarge/4ffed02898033.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            
        );
        Producto::insert($data);
    }
}