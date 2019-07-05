

<?php $__env->startSection('title'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Empleados</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <div id='app'>
     <lista-empleados></lista-empleados>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ProjectDuoc/resources/views/empleados.blade.php ENDPATH**/ ?>