<h1> {{ $modo }} transporte </h1>


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

<label for="Tipo"> Tipo de transporte</label>
<input type="text" class="form-control" name="Tipo" value="{{ isset($transporte->Tipo)?$transporte->Tipo:old('Tipo') }}" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Marca"> Marca del vehiculo </label>
<input type="text" class="form-control" name="Marca" value="{{ isset($transporte->Marca)?$transporte->Marca:old('Marca') }}" id="Marca">
<br>
</div>

<div class="form-group">
<label for="Placa">Placa del vehiculo </label>
<input type="text" class="form-control" name="Placa" value="{{ isset($transporte->Placa)?$transporte->Placa:old('Placa') }}" id="Placa">
<br>
</div>

<div class="form-group">
<label for="NIV"> NIV del vehiculo </label>
<input type="text" class="form-control" name="NIV" value="{{ isset($transporte->NIV)?$transporte->NIV:old('NIV') }}" id="NIV">
<br>
</div>





<input class="btn btn-success" type="submit" value="{{ $modo }} datos">


<a class="btn btn-primary" href="{{ url('transporte/create') }}"> Regresar </a>
<br>