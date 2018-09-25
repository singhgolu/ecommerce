@extends('admin.layouts.app')

@section('page-header')
	<link rel="stylesheet" href="{{ asset('admin/plugins/select2/select2.min.css') }}">
@endsection

@section('body-content')
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Category</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Category</li>
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
			                <h3 class="card-title">Create New Category & Subcategory Here</h3>
			              </div>
			              <!-- /.card-header -->

			              @if(count($errors) > 0)
			              	@foreach($errors->all() as $error)
			              	  <span class="alert alert-danger">{{ $error }}</span>
			              	@endforeach
			              @endif

			              @if(session()->has('message'))
			              	<span class="alert alert-success">{{ session('message') }}</span>
			              @endif

			              <!-- form start -->
			              	<form role="form" action="{{ route('category.store') }}" method="post">
			              		{{ csrf_field() }}
				                <div class="card-body">
				                	<div class="form-group">
					                  	<label>Select Category</label>
					                  	<select name="category" class="form-control select2" style="width: 100%;">
						                    <option value="0">Select Category</option>
						                  @foreach($categories as $category)
						                    <option value="{{ $category->id }}">{{ $category->name }}</option>
						                  @endforeach
					                  	</select>
					                </div>

					                <div class="form-group">
					                    <label for="category">Category</label>
					                    <input type="text" class="form-control" name="name" placeholder="Enter Category or Sub-Category Name">
					                </div>

                  				 	<div class="form-group">
                  				 		<label for="description">Description</label>
	                  					<textarea class="form-control ckeditor" name="description" placeholder="Enter Description"></textarea>
	                  				</div>

					                <div class="form-group">
					                    <label for="image">Image</label>
					                    <input type="file" class="form-control" name="image">
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
				                	<a href="{{ route('category.index') }}" class="btn btn-default">Back</a>
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
@endsection

@section('page-footer')
	<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

	
	<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('.select2').select2();
		});
	</script>
@endsection