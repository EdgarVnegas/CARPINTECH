<h1> <?php echo e($modo); ?> proveedor </h1>


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

<label for="Nombre"> Nombre del cliente que hace la proveedor</label>
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($proveedor->Nombre)?$proveedor->Nombre:old('Nombre')); ?>" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Calle"> Apellido Paterno del cliente que hace la proveedor </label>
<input type="text" class="form-control" name="Calle" value="<?php echo e(isset($proveedor->Calle)?$proveedor->Calle:old('Calle')); ?>" id="Calle">
<br>
</div>

<div class="form-group">
<label for="Colonia"> Apellido Materno del cliente que hace la proveedor </label>
<input type="text" class="form-control" name="Colonia" value="<?php echo e(isset($proveedor->Colonia)?$proveedor->Colonia:old('Colonia')); ?>" id="Colonia">
<br>
</div>

<div class="form-group">
<label for="CP"> CP de la proveedor </label>
<input type="text" class="form-control" name="CP" value="<?php echo e(isset($proveedor->CP)?$proveedor->CP:old('CP')); ?>" id="CP">
<br>
</div>

<div class="form-group">
<label for="Responsable"> Responsable de la proveedor </label>
<input type="text" class="form-control" name="Responsable" value="<?php echo e(isset($proveedor->Responsable)?$proveedor->Responsable:old('Responsable')); ?>" id="Responsable">
<br>
</div>

<div class="form-group">
<label for="Telefono"> Telefono de la proveedor </label>
<input type="text" class="form-control" name="Telefono" value="<?php echo e(isset($proveedor->Telefono)?$proveedor->Telefono:old('Telefono')); ?>" id="Telefono">
<br>
</div>



<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('proveedor/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/proveedor/form.blade.php ENDPATH**/ ?>