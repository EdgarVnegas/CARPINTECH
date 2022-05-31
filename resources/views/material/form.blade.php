<h1> {{ $modo }} material </h1>


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

<label for="Nombre"> Nombre del material</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($material->Nombre)?$material->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Tipo"> Tipo de material </label>
<input type="text" class="form-control" name="Tipo" value="{{ isset($material->Tipo)?$material->Tipo:old('Tipo') }}" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Codigo"> Codigo del material </label>
<input type="text" class="form-control" name="Codigo" value="{{ isset($material->Codigo)?$material->Codigo:old('Codigo') }}" id="Codigo">
<br>
</div>




<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('material/create') }}"> Regresar </a>
<br>