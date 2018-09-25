<?php $__env->startSection('body-content'); ?>
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Attribute</h1>
	          </div>

	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Attribute</li>
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
		          	<div class="col-md-6">
		          		<!-- general form elements -->
			            <div class="card card-primary">
			              	<div class="card-header">
			                	<h3 class="card-title">Create New Attribute Here</h3>
			              	</div> <!-- /.card-header -->

			            	<?php echo $__env->make('common_messages.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			              	<!-- form start -->
			              	<form role="form" action="<?php echo e(route('attribute.store')); ?>" method="post">
			              		<?php echo e(csrf_field()); ?>

				                <div class="card-body">
				                  	<div class="form-group">
				                    	<label for="Attribute">Attribute</label>
				                    	<input type="text" class="form-control" name="name" placeholder="Enter Attribute Name">
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
				                	<a href="<?php echo e(route('attribute.index')); ?>" class="btn btn-default">Back</a>
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
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>