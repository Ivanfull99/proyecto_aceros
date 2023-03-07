<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aceros</title>
</head>
<body>
<h1>aceros</h1>
 <ul>
            <li>{{$acero->tipo_calibre}}</li>
            <li>{{$acero->costos}}</li>
            <li>{{$acero->cantidad}}</li>

            <a href="{{route('acero.index')}}">Inicio</a>
        </ul>
        
        <hr>
<form action="{{ route('acero.destroy', $acero ) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">BORRAR</button>

</form>
</body>
</html>