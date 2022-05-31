@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/transporte/'.$transporte->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('transporte.form', ['modo' => 'Editar']);

</form>
</div>
@endsection
