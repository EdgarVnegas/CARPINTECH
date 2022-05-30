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



<a href="{{ url('cliente/create') }}" class="btn btn-success"> Registrar nuevo cliente</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Codigo Postal</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>



            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="100" alt="">
            </td>


            <td>{{ $cliente->Nombre }}</td>
            <td>{{ $cliente->ApellidoPaterno }}</td>
            <td>{{ $cliente->ApellidoMaterno }}</td>
            <td>{{ $cliente->Correo }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->CodigoPostal }}</td>

            <td>
            <a href="{{url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/cliente/'.$cliente->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $clientes->links()!!}

</div>
@endsection