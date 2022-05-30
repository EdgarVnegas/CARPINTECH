
<h1> {{ $modo }} cliente </h1>


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
<input type="text" class="form-control" name="Nombre" value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
<br>
</div>

<div class="form-group">
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
<br>
</div>

<div class="form-group">
<label for="Correo"> Correo </label>
<input type="text" class="form-control" name="Correo" value="{{ isset($cliente->Correo)?$cliente->Correo:old('Correo') }}" id="Correo"> 
<br>
</div>


<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" name="Direccion" value="{{ isset($cliente->Direccion)?$cliente->Direccion:old('Direccion') }}" id="Direccion">
<br>
</div>


<div class="form-group">
<label for="CodigoPostal"> Codigo Postal </label>
<input type="text" class="form-control" name="CodigoPostal" value="{{ isset($cliente->CodigoPostal)?$cliente->CodigoPostal:old('CodigoPostal') }}" id="CodigoPostal">
<br>
</div>


<div class="form-group">


<label for="Foto">  </label>
@if(isset($cliente->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('cliente/create') }}"> Regresar </a>
<br>