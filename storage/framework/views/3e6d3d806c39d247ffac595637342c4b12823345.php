<h1> <?php echo e($modo); ?> bodega </h1>


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

<label for="Calle"> Calle de la bodega</label>
<input type="text" class="form-control" name="Calle" value="<?php echo e(isset($bodega->Calle)?$bodega->Calle:old('Calle')); ?>" id="Calle">
<br>
</div>

<div class="form-group">
<label for="Colonia"> Colonia de la bodega </label>
<input type="text" class="form-control" name="Colonia" value="<?php echo e(isset($bodega->Colonia)?$bodega->Colonia:old('Colonia')); ?>" id="Colonia">
<br>
</div>

<div class="form-group">
<label for="CP"> CP de la bodega </label>
<input type="text" class="form-control" name="CP" value="<?php echo e(isset($bodega->CP)?$bodega->CP:old('CP')); ?>" id="CP">
<br>
</div>

<div class="form-group">
<label for="Responsable"> Responsable de la bodega </label>
<input type="text" class="form-control" name="Responsable" value="<?php echo e(isset($bodega->Responsable)?$bodega->Responsable:old('Responsable')); ?>" id="Responsable">
<br>
</div>




<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('bodega/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/bodega/form.blade.php ENDPATH**/ ?>