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



<a href="{{ url('herramienta/create') }}" class="btn btn-success"> Registrar nueva herramienta</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la herramienta</th>
            <th>Tipo de herramienta</th>
            <th>Codigo de la herramienta</th>
            <th>Marca de la herramienta</th>
        </tr>
    </thead>


    <tbody>
        @foreach( $herramientas as $herramienta )
        <tr>
            <td>{{ $herramienta->id }}</td>



            <td>{{ $herramienta->Nombre }}</td>
            <td>{{ $herramienta->Tipo }}</td>
            <td>{{ $herramienta->Codigo }}</td>
            <td>{{ $herramienta->Marca }}</td>


            <td>
            <a href="{{url('/herramienta/'.$herramienta->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/herramienta/'.$herramienta->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $herramientas->links()!!}

</div>
@endsection