<h1> <?php echo e($modo); ?> cita </h1>


<?php if(count($errors)>0): ?>

        <div class="alert alert-primary" role="alert">
    <ul>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <li> <?php echo e($error); ?> </li>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>     
        </div>



<?php endif; ?>


<div class="form-group">

<label for="NombreCliente"> Nombre del cliente que hace la cita</label>
<input type="text" class="form-control" name="NombreCliente" value="<?php echo e(isset($cita->NombreCliente)?$cita->NombreCliente:old('NombreCliente')); ?>" id="NombreCliente">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaternoCliente"> Apellido Paterno del cliente que hace la cita </label>
<input type="text" class="form-control" name="ApellidoPaternoCliente" value="<?php echo e(isset($cita->ApellidoPaternoCliente)?$cita->ApellidoPaternoCliente:old('ApellidoPaternoCliente')); ?>" id="ApellidoPaternoCliente">
<br>
</div>

<div class="form-group">
<label for="ApellidoMaternoCliente"> Apellido Materno del cliente que hace la cita </label>
<input type="text" class="form-control" name="ApellidoMaternoCliente" value="<?php echo e(isset($cita->ApellidoMaternoCliente)?$cita->ApellidoMaternoCliente:old('ApellidoMaternoCliente')); ?>" id="ApellidoMaternoCliente">
<br>
</div>

<div class="form-group">
<label for="Fecha"> Fecha de la cita </label>
<input type="text" class="form-control" name="Fecha" value="<?php echo e(isset($cita->Fecha)?$cita->Fecha:old('Fecha')); ?>" id="Fecha">
<br>
</div>

<div class="form-group">
<label for="Motivo"> Motivo de la cita </label>
<input type="text" class="form-control" name="Motivo" value="<?php echo e(isset($cita->Motivo)?$cita->Motivo:old('Motivo')); ?>" id="Motivo">
<br>
</div>



<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('cita/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/cita/form.blade.php ENDPATH**/ ?>