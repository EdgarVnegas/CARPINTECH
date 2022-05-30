
<h1> {{ $modo }} producto </h1>


@if(count($errors)>0)

        <div class="alert alert-primary" role="alert">
    <ul>

        @foreach( $errors->all() as $error)

        <li> {{ $error }} </li>

         @endforeach

    </ul>     
        </div>



@endif


<div class="form-group">

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($producto->Nombre)?$producto->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Clave del producto </label>
<input type="text" class="form-control" name="ClaveProducto" value="{{ isset($producto->ClaveProducto)?$producto->ClaveProducto:old('ClaveProducto') }}" id="ClaveProducto">
<br>
</div>

<div class="form-group">
<label for="Peso"> Peso </label>
<input type="text" class="form-control" name="Peso" value="{{ isset($producto->Peso)?$producto->Peso:old('Peso') }}" id="Peso">
<br>
</div>

<div class="form-group">
<label for="Alto"> Alto </label>
<input type="text" class="form-control" name="Alto" value="{{ isset($producto->Alto)?$producto->Alto:old('Alto') }}" id="Alto">
<br>
</div>

<div class="form-group">
<label for="Ancho"> Ancho </label>
<input type="text" class="form-control" name="Ancho" value="{{ isset($producto->Ancho)?$producto->Ancho:old('Ancho') }}" id="Ancho">
<br>
</div>

<div class="form-group">
<label for="Precio"> Precio </label>
<input type="text" class="form-control" name="Precio" value="{{ isset($producto->Precio)?$producto->Precio:old('Precio') }}" id="Precio">
<br>
</div>


<div class="form-group">
<label for="Foto"> Foto </label>
@if(isset($producto->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->Foto }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('producto/create') }}"> Regresar </a>
<br>