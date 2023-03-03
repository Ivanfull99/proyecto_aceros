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
<a href="{{route('acero.create')}}">crear</a>
 <ul>
        @foreach ($aceros as $m)
            <li>{{$m->tipo_calibre}}</li>
            <li>{{$m->costos}}</li>
            <li>{{$m->cantidad}}</li>
            <a href="{{route('acero.show',$m->id)}}">Ver detalles</a>
            <a href="{{route('acero.edit',$m->id)}}">Editar</a>
        @endforeach 
        </ul>
</body>
</html>