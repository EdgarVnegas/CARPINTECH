@extends('layouts.app')
@section('content')
<div class="container">


    
    @if(Session::has('mensaje')) 
    <div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
@endif



<a href="{{ url('transporte/create') }}" class="btn btn-success"> Registrar nueva transporte</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo de vehiculo</th>
            <th>Marca de vehiculo</th>
            <th>Placa de vehiculo</th>
            <th>NIV de vehiculo</th>

        </tr>
    </thead>


    <tbody>
        @foreach( $transportes as $transporte )
        <tr>
            <td>{{ $transporte->id }}</td>



            <td>{{ $transporte->Tipo }}</td>
            <td>{{ $transporte->Marca }}</td>
            <td>{{ $transporte->Placa }}</td>
            <td>{{ $transporte->NIV }}</td>


            <td>
            <a href="{{url('/transporte/'.$transporte->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/transporte/'.$transporte->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $transportes->links()!!}

</div>
@endsection