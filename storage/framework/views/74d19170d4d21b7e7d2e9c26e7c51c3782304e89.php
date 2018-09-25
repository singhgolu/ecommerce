<?php $__env->startSection('page-header'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Category</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Category</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>
  		<!-- Main content -->
	    <section class="content">
	      	<div class="container-fluid">
		        <!-- Small boxes (Stat box) -->
		        <div class="row">
		          	<div class="col-md-12">
			            <div class="card card-primary">
			              <div class="card-header">
			                <h3 class="card-title">Create New Category & Subcategory Here</h3>
			              </div>
			              <!-- /.card-header -->

			              <?php if(count($errors) > 0): ?>
			              	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			              	  <span class="alert alert-danger"><?php echo e($error); ?></span>
			              	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			              <?php endif; ?>

			              <?php if(session()->has('message')): ?>
			              	<span class="alert alert-success"><?php echo e(session('message')); ?></span>
			              <?php endif; ?>

			              <!-- form start -->
			              	<form role="form" action="<?php echo e(route('category.store')); ?>" method="post">
			              		<?php echo e(csrf_field()); ?>

				                <div class="card-body">
				                	<div class="form-group">
					                  	<label>Select Category</label>
					                  	<select name="category" class="form-control select2" style="width: 100%;">
						                    <option value="0">Select Category</option>
						                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
						                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  	</select>
					                </div>

					                <div class="form-group">
					                    <label for="category">Category</label>
					                    <input type="text" class="form-control" name="name" placeholder="Enter Category or Sub-Category Name">
					                </div>

                  				 	<div class="form-group">
                  				 		<label for="description">Description</label>
	                  					<textarea class="form-control ckeditor" name="description" placeholder="Enter Description"></textarea>
	                  				</div>

					                <div class="form-group">
					                    <label for="image">Image</label>
					                    <input type="file" class="form-control" name="image">
					                </div>

				                  	<div class="form-group">
				                    	<label>Status</label>
					                    <select class="form-control" name="status">
					                      <option value="enable">Enable</option>
					                      <option value="disable">Disable</option>
					                    </select>
                  				 	</div>
                  				</div><!-- /.card-body -->

				                <div class="card-footer">
				                	<a href="<?php echo e(route('category.index')); ?>" class="btn btn-default">Back</a>
				                  	<button type="submit" class="btn btn-primary">Submit</button>
				                </div>
			              	</form>
			            </div>
			            <!-- /.card -->
		        	</div>
	      		</div>
	      	</div>
	    </section>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-footer'); ?>
	<script src="<?php echo e(asset('admin/ckeditor/ckeditor.js')); ?>"></script>

	
	<script src="<?php echo e(asset('admin/plugins/select2/select2.full.min.js')); ?>"></script>
	<script>
		$(document).ready(function(){
			$('.select2').select2();
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>