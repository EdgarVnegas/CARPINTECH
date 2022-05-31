@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/material') }}" method="post" enctype="multipart/form-data">
@csrf 
@include('material.form', ['modo' => 'Crear']);



</form>
</div>
@endsection