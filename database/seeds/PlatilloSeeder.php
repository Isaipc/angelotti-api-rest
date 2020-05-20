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
                'precio' => 180,
                'imagen' => 'https://www.shutterstock.com/es/image-photo/hawaiian-pizza-on-old-table-302723033'
            ],
            [
                'nombre' => 'pizza peperoni',
                'precio' => 160,
                'imagen' =>'https://www.shutterstock.com/es/image-photo/hot-homemade-pepperoni-pizza-ready-eat-225746563'
            ],
            [
                'nombre' => 'pizza napolitana',
                'precio' => 200,
                'imagen' => 'https://www.shutterstock.com/es/image-photo/neapolitan-pizza-429176962'
            ]
        )
    ],
    [
        'id' =>  2,
        'categoria' => 'BEBIDAS',
        'items' => array(
            [
                'nombre' => 'Pepsi 2Lts',
                'precio' => 30,
                'imagen' => 'https://www.shutterstock.com/es/image-photo/bucharest-romania-march-15-20141750ml-pepsi-181933535'
            ],
            [
                'nombre' => 'jarra de agua',
                'precio' => 	45,
                'imagen' => 'https://www.shutterstock.com/es/image-photo/horchata-cinnamon-ice-glass-over-rustic-328934612'
            ]
        )
    ],
    [
        'id' => 3,
        'categoria' => 'BEBIDAS_ALCOHOLICAS',
        'items' => array(
            [
                'nombre' => 'cerveza 255 ml',
                'precio' => 	20,
                'imagen' => 'https://www.shutterstock.com/es/image-photo/los-angeles-ca-march-15-photo-636794986'
            ]
        )
    ],
    [
        'id' => 4,
        'categoria' => 'COMPLEMENTOS',
        'items' => array(
            [
                'nombre' => 'papas fritas',
                'precio' =>	35,
                'imagen' =>	'https://www.shutterstock.com/es/image-photo/french-fries-594623735'
            ],
            [
                'nombre' => 'spaghetti',
                'precio' => 60,
                'imagen' =>	'https://www.shutterstock.com/es/image-photo/italian-pasta-bolognese-beef-basil-parmesan-1190885131'
            ],
            [
                'nombre' => 'spaghetti bolognese',
                'precio' =>	80,
                'imagen' =>	'https://www.shutterstock.com/es/image-photo/spaghetti-meatballs-bolognese-sauce-1699833442'
            ]
        )
    ],
    [
        'id' => 5,
        'categoria' => 'POSTRES',
        'items' => array(
            [
                'nombre' => 'flan',
                'precio' => 20,
                'imagen' =>	'https://www.shutterstock.com/es/image-photo/above-white-plate-flan-spoon-on-629128961'
            ]
        )
    ],
    [
        'id' => 6,
        'categoria' => 'POSTRES_FRIOS',
        'items' => array(
            [
                'nombre' => 'helado',
                'precio' => 20,
                'imagen' =>	'https://www.shutterstock.com/es/image-photo/scoop-vanilla-ice-cream-top-isolated-108987350'
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
