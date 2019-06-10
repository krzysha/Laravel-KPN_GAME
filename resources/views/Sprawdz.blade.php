<br />Wybor gracza<br />

<br /><img src='img/{{$handGame->player}}.jpg'><br />


<br />Wybor komputera<br />

<br /><img src='img/{{$handGame->computer}}.jpg'><br />

<br />{{ $handGame->result }}<br />

<br /><a href='{{route('game.index')}}'>Zagraj ponownie</a><br />

        <table>
		<tr>
		<td>Gracz</td>
		<td>Komputer</td>
		<td>Wynik</td>
		</tr>
		@foreach( $AllTable as $ActualTable)
            <tr>
            <td>{{ $ActualTable -> player }}</td>
            <td>{{ $ActualTable -> computer }}</td>
            <td>{{ $ActualTable -> result }}</td>
            </tr>
        @endforeach
		</table>


