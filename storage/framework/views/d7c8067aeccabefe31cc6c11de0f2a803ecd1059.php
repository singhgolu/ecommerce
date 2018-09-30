<?php $__env->startSection('body-content'); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><a href="<?php echo e(route('category.create')); ?>" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a><span class="float-right">Subcategory For <?php echo e($cat[0]); ?></span></b>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subcategory Listing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
            <?php if($subcategories->count() > 0): ?>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e(ucfirst($subcategory->name)); ?></td>
                          <td><?php echo e(ucfirst($subcategory->description)); ?></td>
                          <td><?php echo e(ucfirst($subcategory->status)); ?></td>
                          <td>
                            <div class="btn-group">
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
              <p class="alert alert-warning">No sub-category yet. <a href="<?php echo e(route('category.create')); ?>">Create one</a></p>
            <?php endif; ?>
        </div>
      </div>
    </section>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>