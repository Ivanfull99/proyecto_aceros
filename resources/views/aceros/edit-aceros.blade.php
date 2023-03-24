<x-Plantilla>
<h1>Aceros</h1>

    <form action=" {{route('acero.update',$m )}}" method="POST">
     @csrf <!--para cuando se reenvia info del formulario no se duplique-->
     @method('patch')  <!--para que se pueda enviar informacion-->

    <label for="tipo_calibre">tipo de calibre</label><br>
    <input type="number" name="tipo_calibre" id="tipo_calibre" value="{{$acero->tipo_calibre}}" value="{{ old('tipo_calibre') ?? $acero->tipo_calibre }}" ><br>
    @error('tipo_calibre')
    <h2>{{$message}}</h2>
    @enderror

    <label for="costos">costo</label><br>
    <input type="number" name="costos" id="costos" step="0.01" min="0"   value="{{$acero->costos}}" value="{{ old('costos') ?? $acero->costos }}" ><br>
    @error('costos')
    <h2>{{$message}}</h2>
    @enderror

    <label for="cantidad">cantidad</label><br>
    <input type="number" name="cantidad" id="cantidad" min="0" value="{{$acero->cantidad}}" value="{{ old('cantidad') ?? $acero->cantidad }}"  ><br>
    @error('cantidad')
    <h2>{{$message}}</h2>
    @enderror

    <input type="submit" value="Enviar">

    </form>
</x-Plantilla>