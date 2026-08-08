<x-layout> 

    <x-slot:title>Jogadores</x-slot>

        
    <div>
        <h1>Jogadores</h1>
        <button class="btn btn-primary">+ Jogador</button>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Altura</th>
            </tr>
        </thead>
        <tbody>
            @foreach($players as $player)
                <tr>
                    <td>{{ $player->id }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->height }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>