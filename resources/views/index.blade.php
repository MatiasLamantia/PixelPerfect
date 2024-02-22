@if(isset($data['results']) && count($data['results']) > 0)
        <ul>
            @foreach($data['results'] as $game)
                <li>{{ $game['results']['id'] }}</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron juegos.</p>
    @endif
