<h1> {{ $modo }} cita </h1>


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

<label for="NombreCliente"> Nombre del cliente que hace la cita</label>
<input type="text" class="form-control" name="NombreCliente" value="{{ isset($cita->NombreCliente)?$cita->NombreCliente:old('NombreCliente') }}" id="NombreCliente">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaternoCliente"> Apellido Paterno del cliente que hace la cita </label>
<input type="text" class="form-control" name="ApellidoPaternoCliente" value="{{ isset($cita->ApellidoPaternoCliente)?$cita->ApellidoPaternoCliente:old('ApellidoPaternoCliente') }}" id="ApellidoPaternoCliente">
<br>
</div>

<div class="form-group">
<label for="ApellidoMaternoCliente"> Apellido Materno del cliente que hace la cita </label>
<input type="text" class="form-control" name="ApellidoMaternoCliente" value="{{ isset($cita->ApellidoMaternoCliente)?$cita->ApellidoMaternoCliente:old('ApellidoMaternoCliente') }}" id="ApellidoMaternoCliente">
<br>
</div>

<div class="form-group">
<label for="Fecha"> Fecha de la cita </label>
<input type="text" class="form-control" name="Fecha" value="{{ isset($cita->Fecha)?$cita->Fecha:old('Fecha') }}" id="Fecha">
<br>
</div>

<div class="form-group">
<label for="Motivo"> Motivo de la cita </label>
<input type="text" class="form-control" name="Motivo" value="{{ isset($cita->Motivo)?$cita->Motivo:old('Motivo') }}" id="Motivo">
<br>
</div>



<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('cita/create') }}"> Regresar </a>
<br>