@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/bodega/'.$bodega->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('bodega.form', ['modo' => 'Editar']);

</form>
</div>
@endsection
