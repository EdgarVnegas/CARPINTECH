<h1> <?php echo e($modo); ?> material </h1>


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

<label for="Nombre"> Nombre del material</label>
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($material->Nombre)?$material->Nombre:old('Nombre')); ?>" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Tipo"> Tipo de material </label>
<input type="text" class="form-control" name="Tipo" value="<?php echo e(isset($material->Tipo)?$material->Tipo:old('Tipo')); ?>" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Codigo"> Codigo del material </label>
<input type="text" class="form-control" name="Codigo" value="<?php echo e(isset($material->Codigo)?$material->Codigo:old('Codigo')); ?>" id="Codigo">
<br>
</div>




<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('material/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/material/form.blade.php ENDPATH**/ ?>