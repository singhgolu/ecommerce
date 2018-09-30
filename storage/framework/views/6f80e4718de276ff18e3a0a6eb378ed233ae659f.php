<?php echo $__env->make('user.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('user.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<?php $__env->startSection('main-content'); ?>
		<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('user.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>