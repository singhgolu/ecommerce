@extends('admin.layouts.app')



@section('body-content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><a href="{{ route('brand.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a><span class="float-right">Brand</span></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand Listing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          @if($brands->count() > 0)
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                @foreach ($brands as $brand)
                  <tr>
                    <td>{{ ucfirst($brand->name) }}</td>
                    <td>{{ $brand->status }}</td>
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
                @endforeach
              </tbody>
            </table>
            @else  
              <p class="alert alert-warning">No attribute yet. <a href="{{ route('brand.create') }}">Create one</a></p>
            @endif
        </div>
      </div>
    </section>
  </div>

@endsection