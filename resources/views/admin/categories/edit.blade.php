@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Update Category
                <div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/category-list')}}" class="btn btn-purple waves-effect">Categories</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Update Category</a>
            </div>
            <form action="{{URL::to('admin/update-category')}}" method="POST" class="p-t-20" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input class="form-control {{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" type="text" required data-parsley-required-message="Please enter first name." value="{{$category->category}}">
                            @if ($errors->has('category'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Category Image</label>
                            <img src="{{asset('storage/app')}}/{{$category->image}}" class="form-control" name="image" style="width: 200px;">
                            <input type="hidden" name="image" value="{{$category->image}}">
                            <input type="file" name="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-purple waves-effect" type="submit">Update</button>
                        </div>
                    </div>
                    
                </div>
            </form>
		</div>
	</div>
</div>

@endsection