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



<a href="{{ url('venta/create') }}" class="btn btn-success"> Registrar nueva venta</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Codigo de venta</th>
            <th>Productos vendidos</th>
            <th>Total de la venta</th>
            <th>Fecha de la venta</th>

        </tr>
    </thead>


    <tbody>
        @foreach( $ventas as $venta )
        <tr>
            <td>{{ $venta->id }}</td>



            <td>{{ $venta->CodigoVenta }}</td>
            <td>{{ $venta->ProductosVendidos }}</td>
            <td>{{ $venta->TotalVenta }}</td>
            <td>{{ $venta->Fecha }}</td>


            <td>
            <a href="{{url('/venta/'.$venta->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/venta/'.$venta->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $ventas->links()!!}

</div>
@endsection