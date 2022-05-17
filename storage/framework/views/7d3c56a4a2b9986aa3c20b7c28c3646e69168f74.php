Formulario de edicion de empleado de CARPINTECH

<form action="<?php echo e(url('/empleado/'.$empleado->id)); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>

<?php echo e(method_field('PATCH')); ?>


<?php echo $__env->make('empleado.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

</form><?php /**PATH C:\xampp\htdocs\CARPINTECH\resources\views/empleado/edit.blade.php ENDPATH**/ ?>