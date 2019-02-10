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
                'extract'       => 'Botella 710cc.',
                'precio'         => 140.00,
                'imagen'         => 'https://www.distribuidorabebidas.com.uy/wp-content/uploads/sites/31/2018/01/cerveza_corana_botella_710.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Whisky Jack Daniels',
                'slug'          => 'Whisky Jack Daniels',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 1Lt.',
                'precio'         => 1800.00,
                'imagen'         => 'https://cdn.shopify.com/s/files/1/1341/5633/products/Jack_Daniel_1L.jpg?v=1521741185',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Ron Appleton',
                'slug'          => 'Ron Appleton',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Rare Blend 700cc.',
                'precio'         => 975.00,
                'imagen'         =>'https://www.disevil.com/tienda/14137-large_default/ron-appleton-extra-12-anos.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Vino Serbal',
                'slug'          => 'Vino Serbal',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Sauvignon Blanc 750ml.',
                'precio'         => 250.00,
                'imagen'         => 'https://http2.mlstatic.com/vino-serbal-malbec-D_NQ_NP_684465-MLA27207227643_042018-F.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Gancia',
                'slug'          => 'Gancia',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 1lt.',
                'precio'         => 155.00,
                'imagen'         => 'https://www.deliargentina.es/wp-content/uploads/2016/06/gancia.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Vodka Smirnoff',
                'slug'          => 'Vodka Smirnoff',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 750ml.',
                'precio'         => 245.00,
                'imagen'         => 'https://bodegasalianza.vteximg.com.br/arquivos/ids/157188-1000-1000/24752-1.jpg?v=636065093026100000',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Vino Flechas de los Andes',
                'slug'          => 'Vino Flechas de los Andes',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Gran Malbec 750ml.',
                'precio'         => 720.00,
                'imagen'         => 'https://tonelprivado.vteximg.com.br/arquivos/ids/167052-1000-1000/Flecha-de-los-Andes-Malbec-750-ml-110185.jpg?v=635875285304600000',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 1
            ],
            [
                'nombre'          => 'Licor Frangelico',
                'slug'          => 'Licor Frangelico',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 700cc.',
                'precio'         => 890.00,
                'imagen'         => 'https://http2.mlstatic.com/frangelico-licor-italiano-de-avellanas-oferta-D_NQ_NP_926447-MLA25950967975_092017-F.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Bitter Cynar',
                'slug'          => 'Bitter Cynar',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 750cc.',
                'precio'         => 230.00,
                'imagen'         => 'https://s7d9.scene7.com/is/image/SAQ/10859492_is?$saq%2Dprod%2Dtra$',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Whisky Turkey 101',
                'slug'          => 'Whisky Turkey 101',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Proof Bourbon 750cc.',
                'precio'         => 1650.00,
                'imagen'         => 'https://tonelprivado.vteximg.com.br/arquivos/ids/175376-1000-1000/wild-101.jpg?v=636384802713200000',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Grappa Valleviejo',
                'slug'          => 'Grappa Valleviejo',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'Botella 1lt.',
                'precio'         => 225.00,
                'imagen'         => 'http://rinconelegido.com.ar/wp-content/uploads/2017/08/Grappa_ValleViejo.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            [
                'nombre'          => 'Cognac Otard Dupuy',
                'slug'          => 'Cognac Otard Dupuy',
                'descripcion'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract'       => 'VSOP 750cc.',
                'precio'         => 145.00,
                'imagen'         => 'https://i.pinimg.com/originals/2a/0d/2a/2a0d2a172477167cf3760a0878009c0b.jpg',
                'visible'       => 1,
                'created_at'    => new DateTime,
                'updated_at'    => new DateTime,
                'categoria_id'   => 2
            ],
            
        );
        Producto::insert($data);
    }
}