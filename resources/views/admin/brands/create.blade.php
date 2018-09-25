@extends('admin.layouts.app')



@section('body-content')
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Brand</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Brand</li>
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
		          	<div class="col-md-6">
		          		<!-- general form elements -->
			            <div class="card card-primary">
			              <div class="card-header">
			                <h3 class="card-title">Create New Brand Here</h3>
			              </div>
			              	@if(count($errors) > 0)
				              	@foreach ($errors->all() as $error)
				              		<span class="alert alert-danger">{{ $error }}</span>
				              	@endforeach
				            @endif

				            @if(session()->has('message'))
				              <span class="alert alert-success">{{ session('message') }}</span>
				            @endif
			              
			              <!-- /.card-header -->
			              <!-- form start -->
			              	<form role="form" action="{{ route('brand.store') }}" method="post">
			              		{{ csrf_field() }}
				                <div class="card-body">
				                  	<div class="form-group">
				                    	<label for="brand">Brand</label>
				                    	<input type="text" class="form-control" name="name" placeholder="Enter Brand Name">
				                  	</div>

				                  	<div class="form-group">
				                    	<label for="status">Status</label>
					                    <select class="form-control" name="status">
					                      <option value="enable">Enable</option>
					                      <option value="disable">Disable</option>
					                    </select>
                  				 	</div>
				                </div><!-- /.card-body -->
				                <div class="card-footer">
				                	<a href="{{ route('brand.index') }}" class="btn btn-default">Back</a>
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