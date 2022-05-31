
<?php $__env->startSection('content'); ?>
<div class="container">


    
    <?php if(Session::has('mensaje')): ?> 
    <div class="alert alert-success alert-dismissible" role="alert">
    <?php echo e(Session::get('mensaje')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>
<?php endif; ?>



<a href="<?php echo e(url('herramienta/create')); ?>" class="btn btn-success"> Registrar nueva herramienta</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre de la herramienta</th>
            <th>Tipo de herramienta</th>
            <th>Codigo de la herramienta</th>
            <th>Marca de la herramienta</th>
        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $herramientas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $herramienta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($herramienta->id); ?></td>



            <td><?php echo e($herramienta->Nombre); ?></td>
            <td><?php echo e($herramienta->Tipo); ?></td>
            <td><?php echo e($herramienta->Codigo); ?></td>
            <td><?php echo e($herramienta->Marca); ?></td>


            <td>
            <a href="<?php echo e(url('/herramienta/'.$herramienta->id.'/edit')); ?>" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/herramienta/'.$herramienta->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $herramientas->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/herramienta/index.blade.php ENDPATH**/ ?>