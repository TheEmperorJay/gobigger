@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Add Service
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/service-list')}}" class="btn btn-purple waves-effect">Services</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Add Service</a>
            </div>
            <form action="{{URL::to('admin/store-service')}}" method="POST" class="p-t-20 pageForm" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Service Title</label>
                        <input class="form-control" name="title" type="text" required data-parsley-required-message="Please enter page title." value="{{old('title')}}">
                        </div>
                        @error('title')
                         <div class="alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Service Icon</label>
                            <input class="form-control" name="image" type="file" accept="image/x-png,image/gif,image/jpeg">
                        </div>
                        @error('image')
                         <div class="alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea rows="5" class="form-control" name="content" id="editor">{{old('content')}}</textarea>
                        <span id="errorContent" style="font-size: 0.9em; line-height: 0.9em; color: #B94A48;"></span>
                        </div>
                        @error('content')
                        <div class="alert-danger">{{$message}}</div>
                       @enderror
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
  $(".pageForm").submit( function(e) {
      var total_length = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;
      if( !total_length ) {
          $("#errorContent").html('Please enter content.' );
          e.preventDefault();
      }
  });
</script>
<script type="text/javascript">
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