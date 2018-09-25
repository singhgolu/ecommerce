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
	            <h1>Product</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Product</li>
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
			                <h3 class="card-title text-center">Create New Brand Here</h3>
			              </div>
			            </div>
		        	</div>
	      		</div>

	      		<form action="<?php echo e(route('product.store')); ?>" method="post">
	      			<?php echo e(csrf_field()); ?>

		      		<div class="row">
				        <div class="col-md-8">

				        	<div class="form-group">
			                  	<label>Select Brand<span class="text-danger">*</span></label>
			                  	<select name="brand" class="form-control select2" style="width: 100%;">
				                  <option value="">Select Brand</option>
				                  <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                    <option value="<?php echo e($brand->id); ?>"><?php echo e($brand->name); ?></option>
				                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			                  	</select>
			                </div>

			                <div class="form-group">
			                  	<div class="form-group">
				                  <label>Category<span class="text-danger">*</span></label>
				                  <select class="form-control select2" multiple="multiple" name="categories[]" data-placeholder="Select a State" style="width: 100%;">
				                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                      <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
				                      <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                       <?php if($subcategory->parent_id == $category->id): ?>
				                      	<option value="<?php echo e($subcategory->id); ?>"><?php echo e($category->name); ?>&nbsp;&nbsp; > &nbsp;&nbsp;<?php echo e($subcategory->name); ?></option>
				                       <?php endif; ?>
				                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				                  </select>
				                </div>
			                </div> 

				            <div class="form-group">
		                    	<label for="name">Name<span class="text-danger">*</span></label>
		                    	<input type="text" class="form-control" name="name" placeholder="Enter Product Name">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="SKU">SKU<span class="text-danger">*</label>
		                    	<input type="text" class="form-control" name="sku" placeholder="Enter SKU">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="model">Model</label>
		                    	<input type="text" class="form-control" name="model" placeholder="Enter Model">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="price">Base Price<span class="text-danger">*</label>
		                    	<input type="text" class="form-control" name="base_price" placeholder="Enter Product Price">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="discount_type">Discount Type</label>
		                    	<select class="form-control" name="discount_type">
		                    		<option value="">Select Type</option>
		                    		<option value="flat">Flat</option>
		                    		<option value="percentage">Percentage</option>
		                    	</select>
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="discount_value">Discount Value</label>
		                    	<input type="text" class="form-control" name="discount_value" placeholder="Enter Discount Value">
		                  	</div>

		                  	<div class="form-group">
			                    <label for="image">Image</label>
			                    <input type="file" class="form-control" name="image">
			                </div>

			                <div class="form-group">
		                    	<label for="status">Status<span class="text-danger">*</label>
		                    	<select class="form-control" name="status">
		                    		<option value="">Select Status</option>
		                    		<option value="enable">Enable</option>
		                    		<option value="disable">Disable</option>
		                    	</select>
		                  	</div>
				       	</div>

				       	<div class="col-md-1">
				       	</div>

				       	<div class="col-md-3">
				       	  <div class="form-group">
				       	  	<h3>Choose Options</h3>
		                    <ul class="list-unstyled">
		                    	<?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                    	  <li>
		                    		<input type="checkbox" name="attribute[]" class="checked_box" id="checked_box_<?php echo e($attribute->id); ?>" value="<?php echo e($attribute->id); ?>">&nbsp; <?php echo e(ucfirst($attribute->name)); ?>


		                    		<ul class="list-unstyled attribute_value" style="padding-left: 25px; display: none;">
		                    		  <?php $__currentLoopData = $attribute->attributevalues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                    		<li>
			                    		  <input type="checkbox" name="attribute_value[]" value="<?php echo e(ucfirst($value->id)); ?>">&nbsp; <?php echo e($value->value); ?>

			                    		</li>
		                    		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    		</ul>
		                    	  </li>
		                    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                    </ul>
		                  </div>
				       	</div>
		      		</div>

		      		<div class="row">
			          <div class="col-md-12">
				       	<div class="form-group">
      				 		<label for="specification">Specification</label>
          					<textarea class="form-control ckeditor" name="specification" placeholder="Enter Specification"></textarea>
          				</div>

          				<div class="form-group">
      				 		<label for="description">Description</label>
          					<textarea class="form-control ckeditor" name="description" placeholder="Enter Description"></textarea>
          				</div>
          			  </div>
          			</div>

          			<div class="card-footer">
	                	<a href="<?php echo e(route('product.index')); ?>" class="btn btn-default">Back</a>
	                  	<button type="submit" class="btn btn-primary">Submit</button>
	                </div>
	      		</form>
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

	<script>
		$(document).ready(function(){
			$('.checked_box').click(function(){
				if($('.checked_box').is(":checked"))
					$(".attribute_value").show();
			    else
			        $(".attribute_value").hide();
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>