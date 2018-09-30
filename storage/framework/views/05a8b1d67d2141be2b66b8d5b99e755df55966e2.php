  <?php $__env->startSection('page-heade'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.css')); ?>">
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><a href="<?php echo e(route('attribute.create')); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a><span class="float-right">Attributes</span></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Attribute Listing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
         <?php if($attributes->count() > 0): ?>  
          <table class="table">
            <thead>
              <tr>
                <th>Attribute Name</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><a href="<?php echo e(route('attribute.show', $attribute->id)); ?>"><?php echo e(ucfirst($attribute->name)); ?></a></td>
                  <td> 
                    <div class="btn-group">
                      <a href="<?php echo e(route('attribute-value.show', $attribute->id)); ?>" class="btn btn-default">
                        <i class="fa fa-plus">Add Values</i>
                      </a>

                      <a href="" class="btn btn-primary">
                        <i class="fa fa-edit">Edit</i>
                      </a>

                      <a href="" class="btn btn-danger">
                        <i class="fa fa-times">Delete</i>
                      </a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
         <?php else: ?>  
          <p class="alert alert-warning">No attribute yet. <a href="<?php echo e(route('attribute.create')); ?>">Create one</a></p>
         <?php endif; ?>
      </div>
    </section>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>