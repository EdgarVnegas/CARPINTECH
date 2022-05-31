<h1> <?php echo e($modo); ?> herramienta </h1>


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
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($herramienta->Nombre)?$herramienta->Nombre:old('Nombre')); ?>" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="Tipo"> Tipo de herramienta </label>
<input type="text" class="form-control" name="Tipo" value="<?php echo e(isset($herramienta->Tipo)?$herramienta->Tipo:old('Tipo')); ?>" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Codigo"> Codigo de la herramienta </label>
<input type="text" class="form-control" name="Codigo" value="<?php echo e(isset($herramienta->Codigo)?$herramienta->Codigo:old('Codigo')); ?>" id="Codigo">
<br>
</div>

<div class="form-group">
<label for="Marca"> Marca de la herramienta </label>
<input type="text" class="form-control" name="Marca" value="<?php echo e(isset($herramienta->Marca)?$herramienta->Marca:old('Marca')); ?>" id="Marca">
<br>
</div>




<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('herramienta/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/herramienta/form.blade.php ENDPATH**/ ?>