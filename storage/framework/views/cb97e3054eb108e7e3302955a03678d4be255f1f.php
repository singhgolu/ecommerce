<?php echo $__env->make('admin.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



	<?php $__env->startSection('body-content'); ?>
		<?php echo $__env->yieldSection(); ?>


<?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>