
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



<a href="<?php echo e(url('cita/create')); ?>" class="btn btn-success"> Registrar nueva cita</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del cliente</th>
            <th>Apellido Paterno del cliente</th>
            <th>Apellido Materno del cliente</th>
            <th>Fecha de la cita</th>
            <th>Motivo de la cita</th>
        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $citas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cita->id); ?></td>



            <td><?php echo e($cita->NombreCliente); ?></td>
            <td><?php echo e($cita->ApellidoPaternoCliente); ?></td>
            <td><?php echo e($cita->ApellidoMaternoCliente); ?></td>
            <td><?php echo e($cita->Fecha); ?></td>
            <td><?php echo e($cita->Motivo); ?></td>

            <td>
            <a href="<?php echo e(url('/cita/'.$cita->id.'/edit')); ?>" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/cita/'.$cita->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $citas->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/cita/index.blade.php ENDPATH**/ ?>