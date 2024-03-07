@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				View Page
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/page-list')}}" class="btn btn-purple waves-effect">Back to list</a>
            </div>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <tbody>
	                
		                <tr>
		                    <td>Page Title</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$page->title}}</th>
		                </tr>
		                <tr>
		                    <td>Content</td>
		                    <td class="text-center">:</td>
		                    <th>{!! $page->content !!}</th>
		                </tr>
		                
		                <tr>
		                    <td>
		                    	<a href="{{URL::to('admin/edit-page')}}/{{$page->slug}}" class="btn btn-warning">
			                		<i class="fa fa-edit"></i> Edit
			                	</a>
			                </td>
			                <td colspan="2">
			                	<a href="javascript:void(0)" class="btn btn-danger" onclick="DestroyPage('{{$page->id}}')">
			                		<i class="fa fa-trash"></i> Delete
			                	</a>
			                </td>
		                </tr>
	                </tbody>
	            </table>
        	</div>
		</div>
	</div>
</div>

@endsection

@section('script')
<script>
	function DestroyPage(id) {
    swal({
      title: "Delete Page",
      text: "Are you sure you want to delete the page?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete!",
      closeOnConfirm: false
    },
    function(isconfirm){ 
      if (isconfirm) {
        $.get("{{ URL::to('admin/destroy-page') }}",{id: id}, function(res){
          //swal("Deleted!", "", "success");
           window.location="{{url('admin/page-list')}}";
        });
      }
      
    });
  }

</script>
@endsection