<?php

use App\Platillo;
use Illuminate\Database\Seeder;

class PlatilloSeeder extends Seeder
{
    const PLATILLOS = array(
    [
        'id' =>  1,
        'categoria' => 'PIZZAS',
        'items' => array(

            [
                'nombre' => 'pizza hawaiana',
                'precio' => 180.00,
                'imagen' => 'https://i.pinimg.com/originals/b9/74/98/b97498827d692906e228c9e7064aa7ec.jpg'
            ],
            [
                'nombre' => 'pizza peperoni',
                'precio' => 160.00,
                'imagen' =>'https://unsplash.com/photos/SU1LFoeEUkk'
            ],
            [
                'nombre' => 'pizza napolitana',
                'precio' => 200.00,
                'imagen' => 'https://10619-2.s.cdn12.com/rests/small/w320/h220/406_60537908.jpg'
            ],
            [
                'nombre' => 'pizza vegetariana',
                'precio' => 179.00,
                'imagen' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=414&q=80'
            ],
            [
                'nombre' => 'pizza combinada',
                'precio' => 179.00,
                'imagen' => 'https://us.emedemujer.com/wp-content/uploads/sites/3/2015/06/maxresdefault.jpg'
            ],
            [
                'nombre' => 'pizza mexicana',
                'precio' => 189.00,
                'imagen' => 'https://dam.cocinafacil.com.mx/wp-content/uploads/2019/04/pizza-mexicana-frijoles-chorizo.png'
            ],
            [
                'nombre' => 'pizza marinera',
                'precio' => 189.00,
                'imagen' => 'https://hacermasapizza.com/img/pizza-marinera-469.jpg'
            ],
            [
                'nombre' => 'pizza especial',
                'precio' => 213.00,
                'imagen' => 'https://www.faragulla.com/wp-content/uploads/Receta-masa-pizza-napolitana-sencilla-sin-amasado-Thumb-01.jpg'
            ]
        )
    ],
    [
        'id' =>  2,
        'categoria' => 'BEBIDAS',
        'items' => array(
            [
                'nombre' => 'Pepsi 2Lts',
                'precio' => 30.00,
                'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:good/gr/images/product-images/img_large/00750103131160L.jpg'
            ],
            [
                'nombre' => 'mirinda 2Lts',
                'precio' => 30.00,
                'imagen' => 'https://www.chedraui.com.mx/medias/7501031346608-00-CH515Wx515H.jpg?context=bWFzdGVyfHJvb3R8NTMxNzJ8aW1hZ2UvanBlZ3xoNjIvaDZiLzk1NDMzNjI0NzgxMTAuanBnfDUwYTIwZjczNjEyN2EzNDA4MmIwMzlkODI2NWQxMTdlMThjZjU5ZWJiYTYzMzAzZTliYjlmZmIxMmVlMzVmYTQ'
            ],
            [
                'nombre' => 'manzanita sol 2Lts',
                'precio' => 30.00,
                'imagen' => 'https://res.cloudinary.com/walmart-labs/image/upload/w_960,dpr_auto,f_auto,q_auto:good/gr/images/product-images/img_large/00750103136016L.jpg'
            ],
            [
                'nombre' => 'jarra de agua',
                'precio' => 45.00,
                'imagen' => 'https://www.superama.com.mx/views/micrositio/recetas/images/ola-de-calor/aguadehorchata/Web_fotoreceta.jpg'
            ],
            [
                'nombre' => 'pepsi 355ml',
                'precio' => 15.00,
                'imagen' => 'https://www.chedraui.com.mx/medias/750103131130-00-CH515Wx515H.jpg?context=bWFzdGVyfHJvb3R8Mjk2NTJ8aW1hZ2UvanBlZ3xoNzAvaGM3Lzg4MjcwNjIwNTkwMzguanBnfGIzNTliOTJmMGY1YzdiN2UwZWQ2N2FmNTFiMDJlNmNhZmUyMGIxMGU4NmRiOTJhNzBiMjNmNGFiMjhiZDQyM2Q'
            ],
            [
                'nombre' => 'mirinda 355ml',
                'precio' => 15.00,
                'imagen' => 'https://lh3.googleusercontent.com/proxy/BgOA1ejyS7AO7pb1xL5ZYgS9AJTTjimGTB1ONdZxSgLXBd3wnATEn2gpvYqRo4VqVPcAKkZHL60BF6IGbnBoIubPVNqDohBFU8Rgmkl9tJ1mFNSiEUqzHg'
            ],
            [
                'nombre' => 'manzanita sol 355ml',
                'precio' => 15.00,
                'imagen' => 'https://tienda.scorpion.com.mx/media/catalog/product/cache/e4d64343b1bc593f1c5348fe05efa4a6/1/7/17845_1.jpg'
            ]
        )
    ],
    [
        'id' => 3,
        'categoria' => 'BEBIDAS_ALCOHOLICAS',
        'items' => array(
            [
                'nombre' => 'cerveza 255 ml',
                'precio' => 	20.00,
                'imagen' => 'https://s3.amazonaws.com/cervezasiempre.images-for-emails/Catalog/catalogo_corona_media.jpg'
            ]
        )
    ],
    [
        'id' => 4,
        'categoria' => 'COMPLEMENTOS',
        'items' => array(
            [
                'nombre' => 'papas fritas',
                'precio' => 35.00,
                'imagen' => 'https://i.pinimg.com/originals/c1/bd/fc/c1bdfc9b3f571052de4c8d8275219a3e.jpg'
            ],
            [
                'nombre' => 'spaghetti',
                'precio' => 60.00,
                'imagen' => 'https://cdn.kiwilimon.com/recetaimagen/35971/th5-320x320-43848.jpg'
            ],
            [
                'nombre' => 'spaghetti bolognese',
                'precio' => 80.00,
                'imagen' => 'https://www.kitchensanctuary.com/wp-content/uploads/2019/09/Spaghetti-Bolognese-square-FS-0204.jpg'
            ],
            [
                'nombre' => 'fondue con champiñon',
                'precio' => 65.00,
                'imagen' => 'https://lh3.googleusercontent.com/proxy/PEwfvxn-gQ4F70sewb2vQfFfHni0HpX0bjcaw0jxNmKBQ0I3aEE3pVfCRtCiNZWjXCyOEHbmmJ8lu6LBrVri5nImppd56pjgrZ7E80MenJUKwrVjOD0QJ8GlN-Um'
            ],
            [
                'nombre' => 'fondue con chorizo',
                'precio' => 65.00,
                'imagen' => 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2016/12/quesooo.jpg'
            ],
            [
                'nombre' => 'alitas angelicales',
                'precio' => 65.00,
                'imagen' => 'https://d1nsq2txwd94q7.cloudfront.net/public/files/production/recipes/images/4734/thumb/r_4734_1550829145.jpg'
            ],
            [
                'nombre' => 'spaguetti a la marinera',
                'precio' => 98.00,
                'imagen' => 'https://i.ytimg.com/vi/WixVEWa-8yQ/hqdefault.jpg'
            ],
            [
                'nombre' => 'fondue',
                'precio' => 98.00,
                'imagen' => 'https://www.eluniversal.com.mx/sites/default/files/styles/f01-1023x630/public/2019/03/15/fondu_2.jpg?itok=DbnygSuO'
            ]
        )
    ],
    [
        'id' => 5,
        'categoria' => 'POSTRES',
        'items' => array(
            [
                'nombre' => 'flan',
                'precio' => 20.00,
                'imagen' => 'https://www.lactaid.com/sites/lactaid_us/files/recipe-images/easy_flan.jpg'
            ],
            [
                'nombre' => 'helado',
                'precio' => 20.00,
                'imagen' => 'https://previews.123rf.com/images/baibaz/baibaz1709/baibaz170900018/86147348-una-bola-de-helado-de-chocolate-marr%C3%B3n-aislada-sobre-fondo-blanco.jpg'
            ]
        )
    ]);


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::PLATILLOS as $key => $categoria) {

            foreach ($categoria['items'] as $key => $item) {

                Platillo::create([
                    'nombre' => $item['nombre'],
                    'precio' => $item['precio'],
                    'imagen' => $item['imagen'],
                    'categoria_id' => $categoria['id']
                ]);
            }
        }
    }
}
