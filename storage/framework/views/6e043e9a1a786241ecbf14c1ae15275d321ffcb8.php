
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



<a href="<?php echo e(url('cliente/create')); ?>" class="btn btn-success"> Registrar nuevo cliente</a>
<br>
<br>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Direccion</th>
            <th>Codigo Postal</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cliente->id); ?></td>



            <td>
            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$cliente->Foto); ?>" width="100" alt="">
            </td>


            <td><?php echo e($cliente->Nombre); ?></td>
            <td><?php echo e($cliente->ApellidoPaterno); ?></td>
            <td><?php echo e($cliente->ApellidoMaterno); ?></td>
            <td><?php echo e($cliente->Correo); ?></td>
            <td><?php echo e($cliente->Direccion); ?></td>
            <td><?php echo e($cliente->CodigoPostal); ?></td>

            <td>
            <a href="<?php echo e(url('/cliente/'.$cliente->id.'/edit')); ?>" class="btn btn-warning">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/cliente/'.$cliente->id)); ?>" class="d-inline" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php echo $clientes->links(); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/cliente/index.blade.php ENDPATH**/ ?>