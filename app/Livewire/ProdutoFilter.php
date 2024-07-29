<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;

class ProdutoFilter extends Component
{
    public $nome = '';
    public $selectedCategorias = [];
    public $selectedMarcas = [];

    protected $queryString = [
        'nome' => ['except' => ''],
        'selectedCategorias' => ['as' => 'categorias'],
        'selectedMarcas' => ['as' => 'marcas'],
    ];

    public function render()
    {
        $produtos = Produto::query()
            ->when($this->nome, fn($query) => $query->where('nome', 'like', "%{$this->nome}%"))
            ->when($this->selectedCategorias, fn($query) => $query->whereIn('categoria_id', $this->selectedCategorias))
            ->when($this->selectedMarcas, fn($query) => $query->whereIn('marca_id', $this->selectedMarcas))
            ->get();

        return view('livewire.produto-filter', [
            'produtos' => $produtos,
            'categorias' => Categoria::all(),
            'marcas' => Marca::all(),
        ]);
    }

    public function clearFilters()
    {
        $this->reset(['nome', 'selectedCategorias', 'selectedMarcas']);
    }
}