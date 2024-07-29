<?php

namespace Database\Factories;

use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'preco' => $this->faker->randomFloat(2, 10, 100),
            'marca_id' => Marca::factory(),
            'categoria_id' => Categoria::factory(),
        ];
    }
}
