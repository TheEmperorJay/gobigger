@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Add Testimonial
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/testimonial-list')}}" class="btn btn-purple waves-effect"> Testimonials</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Add Testimonial</a>
            </div>
            <form action="{{URL::to('admin/update-testimonial')}}" method="POST" class="p-t-20" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$testimonial->id}}">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Testimonial Name</label>
                        <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" type="text" required data-parsley-required-message="Please enter name name." value="{{old('name',$testimonial->name)}}">
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> designation</label>
                            <input class="form-control {{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" type="text" required data-parsley-required-message="Please enter designation designation." value="{{old('designation',$testimonial->designation)}}">
                            @if ($errors->has('designation'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('designation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Testimonial Image</label>
                            <img src="{{asset('storage/app')}}/{{$testimonial->image}}" class="form-control" name="image" style="width: 200px;">
                            <input type="file" name="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label> Content</label>
                            <textarea class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" type="text" id="summernote" required data-parsley-required-message="Please enter content content." >
                                {{old('content',$testimonial->content)}}
                            </textarea>
                            @if ($errors->has('content'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>  
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-purple waves-effect" type="submit">Add</button>
                        </div>
                    </div>
                    
                </div>
            </form>
		</div>
	</div>
</div>

@endsection
@section('script')
<script>
    new FroalaEditor('#summernote')    
</script>    
    
@endsection