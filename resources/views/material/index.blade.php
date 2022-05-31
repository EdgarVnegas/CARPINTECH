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



<a href="{{ url('material/create') }}" class="btn btn-success"> Registrar nueva material</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Codigo</th>

        </tr>
    </thead>


    <tbody>
        @foreach( $materials as $material )
        <tr>
            <td>{{ $material->id }}</td>



            <td>{{ $material->Nombre }}</td>
            <td>{{ $material->Tipo }}</td>
            <td>{{ $material->Codigo }}</td>


            <td>
            <a href="{{url('/material/'.$material->id.'/edit') }}" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="{{ url('/material/'.$material->id) }}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $materials->links()!!}

</div>
@endsection