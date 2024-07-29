<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Produto;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Marca::factory(10)->create();
        Categoria::factory(10)->create();
        Produto::factory(50)->create();
    }
}

