@extends('admin.layouts.app')



@section('body-content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><a href="{{ route('category.create') }}" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a><span class="float-right">Subcategory For {{ $cat[0] }}</span></b>
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
            @if($subcategories->count() > 0)
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
                      @foreach ($subcategories as $subcategory)
                        <tr>
                          <td>{{ ucfirst($subcategory->name) }}</td>
                          <td>{{ ucfirst($subcategory->description) }}</td>
                          <td>{{ ucfirst($subcategory->status) }}</td>
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
              <p class="alert alert-warning">No sub-category yet. <a href="{{ route('category.create') }}">Create one</a></p>
            @endif
        </div>
      </div>
    </section>
  </div>

@endsection