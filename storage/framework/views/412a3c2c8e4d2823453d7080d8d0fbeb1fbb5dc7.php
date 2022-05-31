
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



<a href="<?php echo e(url('venta/create')); ?>" class="btn btn-success"> Registrar nueva venta</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Codigo de la venta</th>
            <th>Cantidad de articulos</th>
            <th>Total de la venta</th>
            <th>Fecha de la venta</th>
            <th>Notas</th>
        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($venta->id); ?></td>



            <td><?php echo e($venta->CodigoVenta); ?></td>
            <td><?php echo e($venta->CantidadArticulos); ?></td>
            <td><?php echo e($venta->Total); ?></td>
            <td><?php echo e($venta->Fecha); ?></td>
            <td><?php echo e($venta->Notas); ?></td>

            <td>
            <a href="<?php echo e(url('/venta/'.$venta->id.'/edit')); ?>" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/venta/'.$venta->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $ventas->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/venta/index.blade.php ENDPATH**/ ?>