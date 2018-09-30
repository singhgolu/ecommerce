  <?php $__env->startSection('page-header'); ?>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.min.css')); ?>">
  <?php $__env->stopSection(); ?>

<?php $__env->startSection('body-content'); ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Listing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body" style="overflow-x: auto;">
          <?php if($products->count() > 0): ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>SI NO</th>
                <th>Name</th>
                <th>Brand</th>
                <th>SKU</th>
                <th>Description</th>
                <th>Base Price</th>
                <th>Discount Type</th>
                <th>Discount Value</th>
                <th>Status</th>
                <th>Option</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($product->brands->name); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->sku); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td><?php echo e($product->base_price); ?></td>
                    <td><?php echo e($product->discount_type); ?></td>
                    <td><?php echo e($product->discount_value); ?></td>
                    <td><?php echo e($product->status); ?></td>
                    <td>Manage Product</td>
                    <td>Edit/Delete</td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          <?php else: ?>

          <?php endif; ?>
        </div>
      </div>
    </section>
  </div>

  <?php $__env->startSection('page-footer'); ?>
    <script src="<?php echo e(asset('admin/plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/plugins/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>