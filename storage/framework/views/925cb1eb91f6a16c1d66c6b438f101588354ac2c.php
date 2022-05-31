
<h1> <?php echo e($modo); ?> cliente </h1>


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

<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')); ?>" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" class="form-control" name="ApellidoPaterno" value="<?php echo e(isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno:old('ApellidoPaterno')); ?>" id="ApellidoPaterno">
<br>
</div>

<div class="form-group">
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" class="form-control" name="ApellidoMaterno" value="<?php echo e(isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno:old('ApellidoMaterno')); ?>" id="ApellidoMaterno">
<br>
</div>

<div class="form-group">
<label for="Correo"> Correo </label>
<input type="text" class="form-control" name="Correo" value="<?php echo e(isset($cliente->Correo)?$cliente->Correo:old('Correo')); ?>" id="Correo"> 
<br>
</div>


<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" name="Direccion" value="<?php echo e(isset($cliente->Direccion)?$cliente->Direccion:old('Direccion')); ?>" id="Direccion">
<br>
</div>


<div class="form-group">
<label for="CodigoPostal"> Codigo Postal </label>
<input type="text" class="form-control" name="CodigoPostal" value="<?php echo e(isset($cliente->CodigoPostal)?$cliente->CodigoPostal:old('CodigoPostal')); ?>" id="CodigoPostal">
<br>
</div>


<div class="form-group">


<label for="Foto">  </label>
<?php if(isset($cliente->Foto)): ?>
<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$cliente->Foto); ?>" width="100" alt="">
<?php endif; ?>
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('cliente/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/cliente/form.blade.php ENDPATH**/ ?>