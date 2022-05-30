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



<a href="{{ url('cita/create') }}" class="btn btn-success"> Registrar nueva cita</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del cliente</th>
            <th>Apellido Paterno del cliente</th>
            <th>Apellido Materno del cliente</th>
            <th>Fecha de la cita</th>
            <th>Motivo de la cita</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $citas as $cita )
        <tr>
            <td>{{ $cita->id }}</td>



            <td>{{ $cita->NombreCliente }}</td>
            <td>{{ $cita->ApellidoPaternoCliente }}</td>
            <td>{{ $cita->ApellidoMaternoCliente }}</td>
            <td>{{ $cita->Fecha }}</td>
            <td>{{ $cita->Motivo }}</td>

            <td>
            <a href="{{url('/cita/'.$cita->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/cita/'.$cita->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $citas->links()!!}

</div>
@endsection