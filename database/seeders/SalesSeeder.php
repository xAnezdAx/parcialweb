<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'vendedor' => 'Juan',
            'cliente' => 'María',
            'producto' => 'iPhone 12',
            'precio' => 999.99,
            'fecha_compra' => '2023-05-08',
        ]);
        Sale::create([
            'vendedor' => 'Pedro',
            'cliente' => 'Ana',
            'producto' => 'Samsung Galaxy S21',
            'precio' => 799.99,
            'fecha_compra' => '2023-05-07',
        ]);
    }
}
