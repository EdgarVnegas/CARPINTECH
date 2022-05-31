<h1> {{ $modo }} proveedor </h1>


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

<label for="Nombre"> Nombre del proveedor</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($proveedor->Nombre)?$proveedor->Nombre:old('Nombre') }}" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Calle"> Calle del proveedor </label>
<input type="text" class="form-control" name="Calle" value="{{ isset($proveedor->Calle)?$proveedor->Calle:old('Calle') }}" id="Calle">
<br>
</div>

<div class="form-group">
<label for="Colonia"> Colonia del proveedor </label>
<input type="text" class="form-control" name="Colonia" value="{{ isset($proveedor->Colonia)?$proveedor->Colonia:old('Colonia') }}" id="Colonia">
<br>
</div>

<div class="form-group">
<label for="CP"> CP del proveedor </label>
<input type="text" class="form-control" name="CP" value="{{ isset($proveedor->CP)?$proveedor->CP:old('CP') }}" id="CP">
<br>
</div>

<div class="form-group">
<label for="Responsable"> Responsable </label>
<input type="text" class="form-control" name="Responsable" value="{{ isset($proveedor->Responsable)?$proveedor->Responsable:old('Responsable') }}" id="Responsable">
<br>
</div>

<div class="form-group">
<label for="Telefono"> Telefono del proveedor </label>
<input type="text" class="form-control" name="Telefono" value="{{ isset($proveedor->Telefono)?$proveedor->Telefono:old('Telefono') }}" id="Telefono">
<br>
</div>



<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('proveedor/create') }}"> Regresar </a>
<br>