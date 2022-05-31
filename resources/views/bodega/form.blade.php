<h1> {{ $modo }} bodega </h1>


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

<label for="Calle"> Calle de la bodega</label>
<input type="text" class="form-control" name="Calle" value="{{ isset($bodega->Calle)?$bodega->Calle:old('Calle') }}" id="Calle">
<br>
</div>

<div class="form-group">
<label for="Colonia"> Colonia de la bodega </label>
<input type="text" class="form-control" name="Colonia" value="{{ isset($bodega->Colonia)?$bodega->Colonia:old('Colonia') }}" id="Colonia">
<br>
</div>

<div class="form-group">
<label for="CP"> CP de la bodega </label>
<input type="text" class="form-control" name="CP" value="{{ isset($bodega->CP)?$bodega->CP:old('CP') }}" id="CP">
<br>
</div>

<div class="form-group">
<label for="Responsable"> Responsable de la bodega </label>
<input type="text" class="form-control" name="Responsable" value="{{ isset($bodega->Responsable)?$bodega->Responsable:old('Responsable') }}" id="Responsable">
<br>
</div>




<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('bodega/create') }}"> Regresar </a>
<br>