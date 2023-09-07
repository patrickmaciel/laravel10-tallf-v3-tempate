<div>
    <h1>Counter</h1>

    <p>Contador: {{ $counter }}</p>

    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>

    <hr>

    <input type="text" id="nome" wire:model.live="nome">
    <p>Meu nome é {{ $nome }}</p>

    <script>
        console.log("Livewire JavaScript loaded and working!");
    </script>
</div>
