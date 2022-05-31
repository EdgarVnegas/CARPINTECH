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



<a href="{{ url('bodega/create') }}" class="btn btn-success"> Registrar nueva bodega</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Calle de la bodega</th>
            <th>Colonia de la bodega</th>
            <th>CP de la bodega</th>
            <th>Reponsable de la bodega</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $bodegas as $bodega )
        <tr>
            <td>{{ $bodega->id }}</td>



            <td>{{ $bodega->Calle }}</td>
            <td>{{ $bodega->Colonia }}</td>
            <td>{{ $bodega->CP }}</td>
            <td>{{ $bodega->Responsable }}</td>
            

            <td>
            <a href="{{url('/bodega/'.$bodega->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/bodega/'.$bodega->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $bodegas->links()!!}

</div>
@endsection