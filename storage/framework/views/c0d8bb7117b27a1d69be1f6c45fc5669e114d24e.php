<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo e(asset('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Category <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('category.index')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Categories</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('category.create')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Category</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Brand <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('brand.index')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Brands</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('brand.create')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Brand</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Attribute <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('attribute.index')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Attributes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('attribute.create')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Attribute</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Product <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo e(route('product.create')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('product.create')); ?>" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Product</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Coupon <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Coupons</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Coupon</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-first-order"></i>
            <p> Order <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Order</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Banner <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Banner</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p> Customer <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Customers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Customer</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Merchant <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Merchants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Merchant</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Role <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Roles</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Role</p>
              </a>
            </li>
          </ul>
        </li>  

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-book"></i>
            <p> Permission <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Permissions</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Permission</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user-circle"></i>
            <p> Sub Admin <i class="fa fa-angle-left right"></i> </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/invoice.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i><p>List Sub Admins</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/profile.html" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Sub Admin</p>
              </a>
            </li>
          </ul>
        </li>        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>