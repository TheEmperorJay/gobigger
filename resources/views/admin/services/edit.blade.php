@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
            <h5 class="pvr-header">
                Update service
                <div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
            </h5>
            <div id="toolbar">
                <a href="{{URL::to('admin/service-list')}}" class="btn btn-purple waves-effect">services</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Update service</a>
            </div>
            <form action="{{URL::to('admin/update-service')}}" method="POST" class="p-t-20 serviceForm" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$service->id}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>service Title</label>
                            <input class="form-control" name="title" type="text" required data-parsley-required-message="Please enter service title." value="{{$service->title}}">
                        </div>
                        @error('title')
                        <div class="alert-danger">{{$message}}</div>
                       @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Service Icon</label>
                            <img src="{{asset('storage/app')}}/{{$service->image}}" class="form-control" name="image" style="width: 200px;">
                            <input type="hidden" name="image" value="{{$service->image}}">
                            <input type="file" name="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" accept="image/x-png,image/gif,image/jpeg">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea rows="5" class="form-control" name="content" id="editor">{!! $service->content !!}</textarea>
                            <span id="errorContent" style="font-size: 0.9em; line-height: 0.9em; color: #B94A48;"></span>
                        </div>
                        @error('content')
                        <div class="alert-danger">{{$message}}</div>
                       @enderror
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
@section('script')

<script>
$(".serviceForm").submit( function(e) {
  var total_length = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;
  if( !total_length ) {
      $("#errorContent").html('Please enter content.' );
      e.preventDefault();
  }
});

$('input#picupload').fileuploader({
    theme: 'default',
    addMore: false,
    limit: 1,
    extensions: ['jpg', 'jpeg', 'pdf', 'png'],
    files: null,
});

//CKEDITOR.replace( 'editor' );
</script>
@endsection