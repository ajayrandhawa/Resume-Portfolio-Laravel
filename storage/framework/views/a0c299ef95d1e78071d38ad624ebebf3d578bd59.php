<?php $__env->startSection('content'); ?>
<h3>Contact</h3>

<?php echo Form::open(['url' => 'contact/submit']); ?>


<div class="form-group">
    <?php echo Form::label('name', 'Your Name'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email', 'E-mail Address'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::textarea('message', null, ['class' => 'form-control']); ?>

</div>

<?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo Form::submit('Submit', ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>