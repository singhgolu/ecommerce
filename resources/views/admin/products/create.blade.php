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
	            <h1>Product</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Product</li>
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
			                <h3 class="card-title text-center">Create New Brand Here</h3>
			              </div>
			            </div>
		        	</div>
	      		</div>

	      		<form action="{{ route('product.store') }}" method="post">
	      			{{ csrf_field() }}
		      		<div class="row">
				        <div class="col-md-8">

				        	<div class="form-group">
			                  	<label>Select Brand<span class="text-danger">*</span></label>
			                  	<select name="brand" class="form-control select2" style="width: 100%;">
				                  <option value="">Select Brand</option>
				                  @foreach($brands as $brand)
				                    <option value="{{$brand->id}}">{{$brand->name}}</option>
				                  @endforeach
			                  	</select>
			                </div>

			                <div class="form-group">
			                  	<div class="form-group">
				                  <label>Category<span class="text-danger">*</span></label>
				                  <select class="form-control select2" multiple="multiple" name="categories[]" data-placeholder="Select a State" style="width: 100%;">
				                    @foreach($categories as $category)
				                      <option value="{{$category->id}}">{{$category->name}}</option>
				                      @foreach($subcategories as $subcategory)
				                       @if($subcategory->parent_id == $category->id)
				                      	<option value="{{$subcategory->id}}">{{$category->name}}&nbsp;&nbsp; > &nbsp;&nbsp;{{$subcategory->name}}</option>
				                       @endif
				                      @endforeach
				                    @endforeach
				                  </select>
				                </div>
			                </div> 

				            <div class="form-group">
		                    	<label for="name">Name<span class="text-danger">*</span></label>
		                    	<input type="text" class="form-control" name="name" placeholder="Enter Product Name">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="SKU">SKU<span class="text-danger">*</label>
		                    	<input type="text" class="form-control" name="sku" placeholder="Enter SKU">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="model">Model</label>
		                    	<input type="text" class="form-control" name="model" placeholder="Enter Model">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="price">Base Price<span class="text-danger">*</label>
		                    	<input type="text" class="form-control" name="base_price" placeholder="Enter Product Price">
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="discount_type">Discount Type</label>
		                    	<select class="form-control" name="discount_type">
		                    		<option value="">Select Type</option>
		                    		<option value="flat">Flat</option>
		                    		<option value="percentage">Percentage</option>
		                    	</select>
		                  	</div>

		                  	<div class="form-group">
		                    	<label for="discount_value">Discount Value</label>
		                    	<input type="text" class="form-control" name="discount_value" placeholder="Enter Discount Value">
		                  	</div>

		                  	<div class="form-group">
			                    <label for="image">Image</label>
			                    <input type="file" class="form-control" name="image">
			                </div>

			                <div class="form-group">
		                    	<label for="status">Status<span class="text-danger">*</label>
		                    	<select class="form-control" name="status">
		                    		<option value="">Select Status</option>
		                    		<option value="enable">Enable</option>
		                    		<option value="disable">Disable</option>
		                    	</select>
		                  	</div>
				       	</div>

				       	<div class="col-md-1">
				       	</div>

				       	<div class="col-md-3">
				       	  <div class="form-group">
				       	  	<h3>Choose Options</h3>
		                    <ul class="list-unstyled">
		                    	@foreach($attributes as $attribute)
		                    	  <li>
		                    		<input type="checkbox" name="attribute[]" class="checked_box" id="checked_box_{{$attribute->id}}" value="{{$attribute->id}}">&nbsp; {{ucfirst($attribute->name)}}

		                    		<ul class="list-unstyled attribute_value" style="padding-left: 25px; display: none;">
		                    		  @foreach($attribute->attributevalues as $value)
			                    		<li>
			                    		  <input type="checkbox" name="attribute_value[]" value="{{ucfirst($value->id)}}">&nbsp; {{$value->value}}
			                    		</li>
		                    		  @endforeach
		                    		</ul>
		                    	  </li>
		                    	@endforeach
		                    </ul>
		                  </div>
				       	</div>
		      		</div>

		      		<div class="row">
			          <div class="col-md-12">
				       	<div class="form-group">
      				 		<label for="specification">Specification</label>
          					<textarea class="form-control ckeditor" name="specification" placeholder="Enter Specification"></textarea>
          				</div>

          				<div class="form-group">
      				 		<label for="description">Description</label>
          					<textarea class="form-control ckeditor" name="description" placeholder="Enter Description"></textarea>
          				</div>
          			  </div>
          			</div>

          			<div class="card-footer">
	                	<a href="{{ route('product.index') }}" class="btn btn-default">Back</a>
	                  	<button type="submit" class="btn btn-primary">Submit</button>
	                </div>
	      		</form>
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

	<script>
		$(document).ready(function(){
			$('.checked_box').click(function(){
				if($('.checked_box').is(":checked"))
					$(".attribute_value").show();
			    else
			        $(".attribute_value").hide();
			});
		});
	</script>
@endsection