<h1> {{ $modo }} venta </h1>


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

<label for="CodigoVenta"> Codigo de venta</label>
<input type="text" class="form-control" name="CodigoVenta" value="{{ isset($venta->CodigoVenta)?$venta->CodigoVenta:old('CodigoVenta') }}" id="CodigoVenta">
<br>
</div>

<div class="form-group">
<label for="CantidadArticulos"> Cantidad de articulos </label>
<input type="text" class="form-control" name="CantidadArticulos" value="{{ isset($venta->CantidadArticulos)?$venta->CantidadArticulos:old('CantidadArticulos') }}" id="CantidadArticulos">
<br>
</div>

<div class="form-group">
<label for="Total">Total de la venta </label>
<input type="text" class="form-control" name="Total" value="{{ isset($venta->Total)?$venta->Total:old('Total') }}" id="Total">
<br>
</div>

<div class="form-group">
<label for="Fecha"> Fecha de la venta </label>
<input type="text" class="form-control" name="Fecha" value="{{ isset($venta->Fecha)?$venta->Fecha:old('Fecha') }}" id="Fecha">
<br>
</div>

<div class="form-group">
<label for="Notas"> Notas de la venta </label>
<input type="text" class="form-control" name="Notas" value="{{ isset($venta->Notas)?$venta->Notas:old('Notas') }}" id="Notas">
<br>
</div>



<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('venta/create') }}"> Regresar </a>
<br>