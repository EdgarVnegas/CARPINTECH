@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/herramienta') }}" method="post" enctype="multipart/form-data">
@csrf 
@include('herramienta.form', ['modo' => 'Crear']);



</form>
</div>
@endsection