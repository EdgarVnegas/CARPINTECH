
<h1> <?php echo e($modo); ?> producto </h1>


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
<input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($producto->Nombre)?$producto->Nombre:old('Nombre')); ?>" id="Nombre">
<br>
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Clave del producto </label>
<input type="text" class="form-control" name="ClaveProducto" value="<?php echo e(isset($producto->ClaveProducto)?$producto->ClaveProducto:old('ClaveProducto')); ?>" id="ClaveProducto">
<br>
</div>

<div class="form-group">
<label for="Peso"> Peso </label>
<input type="text" class="form-control" name="Peso" value="<?php echo e(isset($producto->Peso)?$producto->Peso:old('Peso')); ?>" id="Peso">
<br>
</div>

<div class="form-group">
<label for="Alto"> Alto </label>
<input type="text" class="form-control" name="Alto" value="<?php echo e(isset($producto->Alto)?$producto->Alto:old('Alto')); ?>" id="Alto">
<br>
</div>

<div class="form-group">
<label for="Ancho"> Ancho </label>
<input type="text" class="form-control" name="Ancho" value="<?php echo e(isset($producto->Ancho)?$producto->Ancho:old('Ancho')); ?>" id="Ancho">
<br>
</div>

<div class="form-group">
<label for="Precio"> Precio </label>
<input type="text" class="form-control" name="Precio" value="<?php echo e(isset($producto->Precio)?$producto->Precio:old('Precio')); ?>" id="Precio">
<br>
</div>


<div class="form-group">
<label for="Foto"> Foto </label>
<?php if(isset($producto->Foto)): ?>
<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$producto->Foto); ?>" width="100" alt="">
<?php endif; ?>
<input type="file" class="form-control" name="Foto" value="" id="Foto">
<br>
</div>

<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> datos">


<a class="btn btn-primary" href="<?php echo e(url('producto/create')); ?>"> Regresar </a>
<br><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/producto/form.blade.php ENDPATH**/ ?>