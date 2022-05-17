Mostrar lista de empleados CARPINTECH

<a href="<?php echo e(url('empleado/create')); ?>"> Registrar nuevo empleado </a>

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($empleado->id); ?></td>



            <td>
            <img src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" width="100" alt="">
            </td>


            <td><?php echo e($empleado->Nombre); ?></td>
            <td><?php echo e($empleado->ApellidoPaterno); ?></td>
            <td><?php echo e($empleado->ApellidoMaterno); ?></td>
            <td><?php echo e($empleado->Correo); ?></td>
            <td>
            <a href="<?php echo e(url('/empleado/'.$empleado->id.'/edit')); ?>">
                    Editar 
            </a>    
            | 
            
            <form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post">
            <?php echo csrf_field(); ?> 
            <?php echo e(method_field('DELETE')); ?>

            <input type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">


            </form>
        
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/empleado/index.blade.php ENDPATH**/ ?>