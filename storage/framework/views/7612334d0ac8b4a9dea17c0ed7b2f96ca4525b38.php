<h1> <?php echo e($modo); ?> transporte </h1>


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

<label for="Tipo"> Tipo de transporte</label>
<input type="text" class="form-control" name="Tipo" value="<?php echo e(isset($transporte->Tipo)?$transporte->Tipo:old('Tipo')); ?>" id="Tipo">
<br>
</div>

<div class="form-group">
<label for="Marca"> Marca del vehiculo </label>
<input type="text" class="form-control" name="Marca" value="<?php echo e(isset($transporte->Marca)?$transporte->Marca:old('Marca')); ?>" id="Marca">
<br>
</div>

<div class="form-group">
<label for="Placa">Placa del vehiculo </label>
<input type="text" class="form-control" name="Placa" value="<?php echo e(isset($transporte->Placa)?$transporte->Placa:old('Placa')); ?>" id="Placa">
<br>
</div>

<div class="form-group">
<label for="NIV"> NIV del vehiculo </label>
<input type="text" class="form-control" name="NIV" value="<?php echo e(isset($transporte->NIV)?$transporte->NIV:old('NIV')); ?>" id="NIV">
<br>
</div>





<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('transporte/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/transporte/form.blade.php ENDPATH**/ ?>