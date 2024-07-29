<div>
    <input type="text" wire:model="nome" placeholder="Nome do Produto">
    <div>
        <h4>Categorias</h4>
        @foreach($categorias as $categoria)
            <label>
                <input type="checkbox" wire:model="selectedCategorias" value="{{ $categoria->id }}">
                {{ $categoria->nome }}
            </label>
        @endforeach
    </div>
    <div>
        <h4>Marcas</h4>
        @foreach($marcas as $marca)
            <label>
                <input type="checkbox" wire:model="selectedMarcas" value="{{ $marca->id }}">
                {{ $marca->nome }}
            </label>
        @endforeach
    </div>
    <button wire:click="clearFilters">Limpar Filtros</button>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto->nome }} - {{ $produto->marca->nome }} - {{ $produto->categoria->nome }}</li>
        @endforeach
    </ul>
</div>
