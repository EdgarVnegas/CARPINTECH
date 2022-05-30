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

<label for="CodigoVenta"> Codigo de la venta</label>
<input type="text" class="form-control" name="CodigoVenta" value="{{ isset($venta->CodigoVenta)?$venta->CodigoVenta:old('CodigoVenta') }}" id="CodigoVenta">
<br>
</div>

<div class="form-group">
<label for="ProductosVendidos"> Productos vendidos </label>
<input type="text" class="form-control" name="ProductosVendidos" value="{{ isset($venta->ProductosVendidos)?$venta->ProductosVendidos:old('ProductosVendidos') }}" id="ProductosVendidos">
<br>
</div>

<div class="form-group">
<label for="TotalVenta"> Total </label>
<input type="text" class="form-control" name="TotalVenta" value="{{ isset($venta->TotalVenta)?$venta->TotalVenta:old('TotalVenta') }}" id="TotalVenta">
<br>
</div>

<div class="form-group">
<label for="Fecha"> Fecha </label>
<input type="text" class="form-control" name="Fecha" value="{{ isset($venta->Fecha)?$venta->Fecha:old('Fecha') }}" id="Fecha">
<br>
</div>




<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('Venta/create') }}"> Regresar </a>
<br>