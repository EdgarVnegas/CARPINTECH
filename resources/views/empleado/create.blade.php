Formulario de creacion de empleados de CARPINTECH

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf 
@include('empleado.form');



</form>