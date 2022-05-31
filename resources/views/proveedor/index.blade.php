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



<a href="{{ url('proveedor/create') }}" class="btn btn-success"> Registrar nueva proveedor</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre </th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>CP</th>
            <th>Responsable</th>
            <th>Telefono</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $proveedors as $proveedor )
        <tr>
            <td>{{ $proveedor->id }}</td>



            <td>{{ $proveedor->Nombre }}</td>
            <td>{{ $proveedor->Calle }}</td>
            <td>{{ $proveedor->Colonia }}</td>
            <td>{{ $proveedor->CP }}</td>
            <td>{{ $proveedor->Responsable }}</td>
            <td>{{ $proveedor->Telefono }}</td>

            <td>
            <a href="{{url('/proveedor/'.$proveedor->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/proveedor/'.$proveedor->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $proveedors->links()!!}

</div>
@endsection