@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				View Testimonial
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/testimonial-list')}}" class="btn btn-purple waves-effect">Back to list</a>
            </div>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <tbody>
	                
		                <tr>
		                    <td>Testimonial Name</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$testimonial->name}}</th>
		                </tr>
		                <tr>
		                    <td>Testimonial Name</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$testimonial->designation}}</th>
		                </tr>
						<tr>
		                    <td>Testimonial Image</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th><img src="{{asset('storage/app')}}/{{$testimonial->image}}" class="form-control" name="image" style="width: 200px;"></th>
		                </tr>
						<tr>
		                    <td>Testimonial Description</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{!! $testimonial->designation !!}</th>
		                </tr>
		                <tr>
		                    <td>
		                    	<a href="{{URL::to('admin/edit-testimonial')}}/{{$testimonial->slug}}" class="btn btn-warning">
			                		<i class="fa fa-edit"></i> Edit
			                	</a>
			                </td>
			                <td colspan="2">
			                	<a href="javascript:void(0)" class="btn btn-danger" onclick="Destroytestimonial('{{$testimonial->id}}')">
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
	function Destroytestimonial(id) {
    swal({
      title: "Delete testimonial",
      text: "Are you sure you want to delete the testimonial?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete!",
      closeOnConfirm: false
    },
    function(isconfirm){ 
      if (isconfirm) {
        $.get("{{ URL::to('admin/destroy-testimonial') }}",{id: id}, function(res){
          //swal("Deleted!", "", "success");
           window.location="{{url('admin/testimonial-list')}}";
        });
      }
      
    });
  }

</script>
@endsection