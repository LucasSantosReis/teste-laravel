<?php

namespace Tests\Feature;

use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Produto;
use Livewire\Livewire;
use Tests\TestCase;
use App\Livewire\ProdutoFilter;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoFilterTest extends TestCase
{
    use RefreshDatabase;
    public function testFiltrarPorNomeDoProduto()
    {
        $produto = Produto::factory()->create(['nome' => 'Produto Teste']);
    
        Livewire::test(ProdutoFilter::class)
            ->set('nome', 'Produto Teste')
            ->assertSee('Produto Teste')
            ->assertDontSee('Outro Produto');
    }
    
    public function testFiltrarPorMarcas()
    {
        $marca1 = Marca::factory()->create();
        $marca2 = Marca::factory()->create();
        $produto1 = Produto::factory()->create(['marca_id' => $marca1->id]);
        $produto2 = Produto::factory()->create(['marca_id' => $marca2->id]);
    
        Livewire::test(ProdutoFilter::class)
            ->set('selectedMarcas', [$marca1->id])
            ->assertSee($produto1->nome)
            ->assertDontSee($produto2->nome);
    }
    
    public function testFiltrarPorCategorias()
    {
        $categoria1 = Categoria::factory()->create();
        $categoria2 = Categoria::factory()->create();
        $produto1 = Produto::factory()->create(['categoria_id' => $categoria1->id]);
        $produto2 = Produto::factory()->create(['categoria_id' => $categoria2->id]);
    
        Livewire::test(ProdutoFilter::class)
            ->set('selectedCategorias', [$categoria1->id])
            ->assertSee($produto1->nome)
            ->assertDontSee($produto2->nome);
    }
    
}
