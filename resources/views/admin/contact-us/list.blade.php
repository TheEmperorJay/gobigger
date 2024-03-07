@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Customer Query List
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
		
			<div class="table-responsive">
	            <table data-toolbar="#toolbar"
	                   data-toggle="table"
	                   data-search="true"
	                   data-show-refresh="false"
	                   data-show-toggle="true"
	                   data-show-columns="true"
	                   data-show-export="true"
	                   data-detail-view="false"
	                   data-detail-formatter="detailFormatter"
	                   data-show-pagination-switch="false"
	                   data-only-info-pagination="false"
	                   data-pagination="true"
	                   data-buttons-class="purple"
	                   data-page-list="[10, 25, 50, 100, ALL]"
	                   data-show-footer="false"
	                   class="table table-striped table-bordered">
	                <thead>
	                <tr>
	                    
	                    <th data-checkbox="false">Sr. No.</th>
	                    <th>Full Name</th>
	                    <th>Email</th>
	                    <th>subject</th>
	                    <th>Availability</th>
	                    <th class="text-center">Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <?php $i = 1;  ?>
	                @foreach($queries as $query)
		                <tr class="odd gradeX">
		                    <td>{{$i++}}</td>
		                    <td>{{$query->first_name}} {{$query->last_name}}</td>
		                    <td>{{$query->email}}</td>
		                    <td>{{$query->subject}}</td>
		                    <td>{{date("F j, Y, h:i A", strtotime($query->availability))}}</td>
			                <td class="text-center">
			                	<a href="{{URL::to('admin/view-query')}}/{{$query->slug}}" class="btn btn-sm btn-info">
			                		<i class="fa fa-eye"></i>
			                	</a>
			                	<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="DestroyQuery('{{$query->id}}')">
			                		<i class="fa fa-trash"></i>
			                	</a>
			                </td>
		                </tr>
	                @endforeach
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
           location.reload();
        });
      }
      
    });
  }

</script>
@endsection