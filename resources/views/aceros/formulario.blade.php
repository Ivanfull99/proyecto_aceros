
<x-Plantilla>
<h1>Aceros</h1>
<form action=" {{route('acero.store')}}" method="POST">
     @csrf <!--para cuando se reenvia info del formulario no se duplique-->

    <label for="tipo_calibre">tipo de calibre</label><br>
    <input type="number" name="tipo_calibre" id="tipo_calibre" ><br>
    @error('tipo_calibre')
    <h2>{{$message}}</h2>
    @enderror

    <label for="costos">costo</label><br>
    <input type="number" name="costos" id="costos" step="0.01" min="0"><br>
    @error('costos')
    <h2>{{$message}}</h2>
    @enderror

    <label for="cantidad">cantidad</label><br>
    <input type="number" name="cantidad" id="cantidad" min="0"><br>
    @error('cantidad')
    <h2>{{$message}}</h2>
    @enderror

    <input type="submit" value="Enviar">

    </form>
    </x-Plantilla>