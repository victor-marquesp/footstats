<x-layout>

    <x-slot:title>Novo Jogador</x-slot:title>

    <div class="container">
        <form action="{{ route('players.store') }}" method="POST">
            @include('player.partials._form')
        </form>
    </div>

</x-layout>