<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wypozyczalnia</title>
</head>

<body>
<div class="external" id="top">
<table width="100%">
<tr><td> Kamień </td> <td>Nożyce</td> <td>Papier</td></tr>
<td>
<h1>
<form action="{{ route('game.store') }}" method="post">
	
	{{csrf_field()	 }}
	<input type="hidden" name="choose" value = "1">
	<input type="image" src="img/Kamien.jpg" name="kamien" alt="Submit"> <br />

</form>
</h1>
<br/>
</td>
</td>
<td>
<h1>
<form action="{{ route('game.store') }}" method="post">
	{{csrf_field()	 }}
	
	<input type="hidden" name="choose" value = "2">
	<input type="image" src="img/Nozyce.jpg" name="nozyce" alt="Submit"> <br />	

</form>
</h1>
</td>
<td>
<h1>
<form action="{{ route('game.store') }}" method="post">
	{{csrf_field()	 }}
	<input type="hidden" name="choose" value = "3">
	<input type="image" src="img/Papier.jpg" name="papier" alt="Submit"> <br />
	 
	

</form>
</h1>
</td>
</tr>
</table>
</div>
</body>
</html>