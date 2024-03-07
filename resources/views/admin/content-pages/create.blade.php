@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Add Page
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/page-list')}}" class="btn btn-purple waves-effect">Pages</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Add Page</a>
            </div>
            <form action="{{URL::to('admin/store-page')}}" method="POST" class="p-t-20 pageForm" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Page Title</label>
                            <input class="form-control" name="title" type="text" required data-parsley-required-message="Please enter page title.">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea rows="5" class="form-control" name="content" id="editor"></textarea>
                        <span id="errorContent" style="font-size: 0.9em; line-height: 0.9em; color: #B94A48;"></span>
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