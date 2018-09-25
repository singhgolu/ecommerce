@extends('admin.layouts.app')



@section('body-content')
	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
  		<section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Set Attribute Value For {{ $attribute->name }}</h1>
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
	      	<div class="container-fluid">
		        <!-- Small boxes (Stat box) -->
		        <div class="row">
		          	<div class="col-md-6">
		          		<!-- general form elements -->
			            <div class="card card-primary">
			              	<div class="card-header">
			                	<h3 class="card-title">Create New Attribute Value Here</h3>
			              	</div> <!-- /.card-header -->

			              	@include('common_messages.message')

			              	<!-- form start -->
			              	<form role="form" action="{{ route('attribute-value.store') }}" method="post">
			              		{{ csrf_field() }}

			              		<input type="hidden" name="attribute_id" value="{{ $attribute->id }}">

				                <div class="card-body">
				                  	<div class="form-group">
				                    	<label for="attribute-value">Attribute Value</label>
				                    	<input type="text" class="form-control" name="value" placeholder="Enter Attribute Value">
				                  	</div>

				                  	<div class="form-group">
				                    	<label>Status</label>
					                    <select class="form-control" name="status">
					                      <option value="1">Enable</option>
					                      <option value="0">Disable</option>
					                    </select>
                  				 	</div>
				                </div><!-- /.card-body -->
				                <div class="card-footer">
				                	<a href="{{ route('attribute.index') }}" class="btn btn-default">Back</a>
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