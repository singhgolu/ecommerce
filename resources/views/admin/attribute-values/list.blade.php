@extends('admin.layouts.app')

  @section('page-heade')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.css') }}">
  @endsection

@section('body-content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <b><a href="{{ route('attribute-value.show', $attribute->id) }}" class="btn btn-info"><i class="fa fa-plus"></i> Add New</a><span class="float-right">Attribute Value For {{ $attribute->name }}</span></b>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Attribute Value</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-body">
            @if($attribute->attributeValues->count() > 0)
                <table class="table">
                    <thead>
                      <tr>
                        <th>Value</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($attribute->attributeValues as $attributeValue)
                        <tr>
                          <td>{{ ucfirst($attributeValue->value) }}</td>
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
              <p class="alert alert-warning">No Record yet. <a href="{{ route('attribute-value.show', $attribute->id) }}">Create one</a></p>
            @endif
        </div>
      </div>
    </section>
  </div>

@endsection