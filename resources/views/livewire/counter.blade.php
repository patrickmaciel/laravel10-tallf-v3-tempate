<div>
    <h1>Componente Livewire</h1>

    <p>Contador: {{ $counter }}</p>

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <hr>

    <div x-data="{ mostraDiv: false }">
        <button type='button' x-on:click="mostraDiv = !mostraDiv">Mostra Inputs</button>
        <div x-show="mostraDiv" x-cloak>
            <input type="text" id="nome" wire:model.live="nome">
            <p>Meu nome é {{ $nome }}</p>
        </div>
    </div>

    <script>
        console.log("Livewire JavaScript loaded and working!");
    </script>
</div>
