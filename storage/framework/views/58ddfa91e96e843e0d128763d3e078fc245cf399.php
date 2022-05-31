<h1> <?php echo e($modo); ?> venta </h1>


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

<label for="CodigoVenta"> Codigo de venta</label>
<input type="text" class="form-control" name="CodigoVenta" value="<?php echo e(isset($venta->CodigoVenta)?$venta->CodigoVenta:old('CodigoVenta')); ?>" id="CodigoVenta">
<br>
</div>

<div class="form-group">
<label for="CantidadArticulos"> Cantidad de articulos </label>
<input type="text" class="form-control" name="CantidadArticulos" value="<?php echo e(isset($venta->CantidadArticulos)?$venta->CantidadArticulos:old('CantidadArticulos')); ?>" id="CantidadArticulos">
<br>
</div>

<div class="form-group">
<label for="Total">Total de la venta </label>
<input type="text" class="form-control" name="Total" value="<?php echo e(isset($venta->Total)?$venta->Total:old('Total')); ?>" id="Total">
<br>
</div>

<div class="form-group">
<label for="Fecha"> Fecha de la venta </label>
<input type="text" class="form-control" name="Fecha" value="<?php echo e(isset($venta->Fecha)?$venta->Fecha:old('Fecha')); ?>" id="Fecha">
<br>
</div>

<div class="form-group">
<label for="Notas"> Notas de la venta </label>
<input type="text" class="form-control" name="Notas" value="<?php echo e(isset($venta->Notas)?$venta->Notas:old('Notas')); ?>" id="Notas">
<br>
</div>



<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('venta/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/venta/form.blade.php ENDPATH**/ ?>