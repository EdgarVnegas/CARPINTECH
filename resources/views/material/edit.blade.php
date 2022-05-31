@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/material/'.$material->id) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}

@include('material.form', ['modo' => 'Editar']);

</form>
</div>
@endsection
