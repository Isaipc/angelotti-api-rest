<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    const CATEGORIAS = array(
        'Pizzas',
        'Bebidas',
        'Bebidas alcoholicas',
        'Postres',
        'Postres frios',
        'Acompañamiento'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::CATEGORIAS as $value) {
            Categoria::create([
                'nombre' => $value
            ]);
        }
    }
}
