@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Update Blog
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/blog-list')}}" class="btn btn-purple waves-effect"> Blogs</a>
                <a href="{{URL::to('admin/add-blog')}}" class="btn btn-disebled waves-effect">Add Blog</a>
            </div>
            <form action="{{URL::to('admin/update-blog')}}" method="POST" class="p-t-20" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
                <input type="hidden" name="blog_id" value="{{$blog->id}}">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" type="text" required data-parsley-required-message="Please enter title ." value="{{old('title',$blog->title)}}">
                            @if ($errors->has('title'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}" name="category_id" type="text" required data-parsley-required-message="Please enter category name.">
                                <option value="">Select Category</option>
                                @foreach($categories as $list)
                                   <option value="{{$list->id}}" {{old('category_id',$blog->category_id) == $list->id ? "selected" : ""}}>{{$list->category}}</option> 
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Auther Name</label>
                            <input class="form-control {{ $errors->has('auther_name') ? ' is-invalid' : '' }}" name="auther_name" type="text" required data-parsley-required-message="Please enter auther_name ." value="{{old('auther_name',$blog->auther_name)}}">
                            @if ($errors->has('auther_name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('auther_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Meta keywords</label>
                            <input class="form-control {{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}" name="meta_keywords" type="text" required data-parsley-required-message="Please enter meta_keywords ." value="{{old('meta_keywords',$blog->meta_keywords)}}">
                            @if ($errors->has('meta_keywords'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('meta_keywords') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Meta Description</label>
                            <input class="form-control {{ $errors->has('meta_description') ? ' is-invalid' : '' }}" name="meta_description" type="text" required data-parsley-required-message="Please enter meta_description ." value="{{old('meta_description',$blog->meta_description)}}">
                            @if ($errors->has('meta_description'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tags</label>                            
                            <select id="tags" multiple="multiple" name="tags[]"  class="form-control {{ $errors->has('tags[]') ? ' is-invalid' : '' }}" type="text" required data-parsley-required-message="Please enter tags .">
                                @foreach($blogTags as $tag)
                                    <option value="{{$tag}}" selected>{{$tag}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tags[]'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" type="text" required id ="editor" data-parsley-required-message="Please enter description .">{{old('description',$blog->description)}}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Blog Image</label>
                            <img src="{{asset('storage/app')}}/{{$blog->photo}}" class="form-control" name="photo" style="width: 200px;">
                            <input type="file" name="photo" class="form-control {{ $errors->has('photo') ? ' is-invalid' : '' }}">
                            @if ($errors->has('photo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
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

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<script>
    var tags = <?php echo json_encode($tags);?>;
    console.log(tags);
   $('#tags').select2({
        tags: true,
        data:tags ,
        tokenSeparators: [','], 
        placeholder: "Add your tags here",
        /* the next 2 lines make sure the user can click away after typing and not lose the new tag */
        selectOnClose: true, 
        closeOnSelect: false
    });
</script>
@endsection