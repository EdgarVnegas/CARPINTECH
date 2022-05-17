<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="<?php echo e(isset($empleado->Nombre)?$empleado->Nombre:''); ?>" id="Nombre">
<br>

<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" name="ApellidoPaterno" value="<?php echo e(isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''); ?>" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" name="ApellidoMaterno" value="<?php echo e(isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''); ?>" id="ApellidoMaterno">
<br>
<label for="Correo"> Correo </label>
<input type="text" name="Correo" value="<?php echo e(isset($empleado->Correo)?$empleado->Correo:''); ?>" id="Correo"> 
<br>
<label for="Foto"> Foto </label>
<?php if(isset($empleado->Foto)): ?>
<img src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" width="100" alt="">
<?php endif; ?>
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="Guardar datos">


<a href="<?php echo e(url('empleado/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/empleado/form.blade.php ENDPATH**/ ?>