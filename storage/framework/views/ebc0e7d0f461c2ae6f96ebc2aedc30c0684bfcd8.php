
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



<a href="<?php echo e(url('transporte/create')); ?>" class="btn btn-success"> Registrar nueva transporte</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo de vehiculo</th>
            <th>Marca de vehiculo</th>
            <th>Placa de vehiculo</th>
            <th>NIV de vehiculo</th>

        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $transportes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($transporte->id); ?></td>



            <td><?php echo e($transporte->Tipo); ?></td>
            <td><?php echo e($transporte->Marca); ?></td>
            <td><?php echo e($transporte->Placa); ?></td>
            <td><?php echo e($transporte->NIV); ?></td>


            <td>
            <a href="<?php echo e(url('/transporte/'.$transporte->id.'/edit')); ?>" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/transporte/'.$transporte->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $transportes->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/transporte/index.blade.php ENDPATH**/ ?>