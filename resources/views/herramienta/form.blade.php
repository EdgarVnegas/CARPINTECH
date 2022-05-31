<h1> {{ $modo }} herramienta </h1>


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
<input type="text" class="form-control" name="Nombre" value="{{ isset($herramienta->Nombre)?$herramienta->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Tipo"> Tipo de herramienta </label>
<input type="text" class="form-control" name="Tipo" value="{{ isset($herramienta->Tipo)?$herramienta->Tipo:old('Tipo') }}" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Codigo"> Codigo de la herramienta </label>
<input type="text" class="form-control" name="Codigo" value="{{ isset($herramienta->Codigo)?$herramienta->Codigo:old('Codigo') }}" id="Codigo">
<br>
</div>

<div class="form-group">
<label for="Marca"> Marca de la herramienta </label>
<input type="text" class="form-control" name="Marca" value="{{ isset($herramienta->Marca)?$herramienta->Marca:old('Marca') }}" id="Marca">
<br>
</div>




<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('herramienta/create') }}"> Regresar </a>
<br>