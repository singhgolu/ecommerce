@extends('admin.layouts.app')

  @section('page-header')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}">
  @endsection

@section('body-content')
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
          @if($products->count() > 0)
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
                @foreach ($products as $product)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $product->brands->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->base_price }}</td>
                    <td>{{ $product->discount_type }}</td>
                    <td>{{ $product->discount_value }}</td>
                    <td>{{ $product->status }}</td>
                    <td>Manage Product</td>
                    <td>Edit/Delete</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @else

          @endif
        </div>
      </div>
    </section>
  </div>

  @section('page-footer')
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
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
  @endsection

@endsection