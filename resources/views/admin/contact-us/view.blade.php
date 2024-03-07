@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				View Query
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <tbody>
	                
		                <tr>
		                    <td>Full Name</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$query->full_name}}</th>
		                </tr>
		                <tr>
		                    <td>Email</td>
		                    <td class="text-center">:</td>
		                    <th>{{$query->email}}</th>
		                </tr>
		                <tr>
		                    <td>Contact Number</td>
		                    <td class="text-center">:</td>
		                    <th>{{$query->contact_number}}</th>
		                </tr>
		                
		                <tr>
		                    <td>Availability</td>
		                    <td class="text-center">:</td>
		                    <th>{{date("F j, Y, h:i A", strtotime($query->availability))}}</th>
		                </tr>
		                <tr>
		                    <td>Message</td>
		                    <td class="text-center">:</td>
		                    <th>{{$query->message}}</th>
		                </tr>
		                <tr>
			                <td colspan="3">
			                	<a href="javascript:void(0)" class="btn btn-danger" onclick="DestroyQuery('{{$query->id}}')">
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
	function DestroyQuery(id) {
    swal({
      title: "Delete Query",
      text: "Are you sure you want to delete the query?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete!",
      closeOnConfirm: false
    },
    function(isconfirm){ 
      if (isconfirm) {
        $.get("{{ URL::to('admin/destroy-query') }}",{id: id}, function(res){
          //swal("Deleted!", "", "success");
           window.location="{{url('admin/customer-queries')}}";
        });
      }
      
    });
  }

</script>
@endsection