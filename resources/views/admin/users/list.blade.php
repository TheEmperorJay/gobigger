@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Client List
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
		
			<div id="toolbar">
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Clients</a>
                <a href="{{URL::to('admin/add-client')}}" class="btn btn-purple waves-effect">Add Client</a>
            </div>
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
	                    <th>Name</th>
	                    <th>Email</th>
	                    <th>Phone</th>
	                    <th class="text-center">Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <?php $i = 1;  ?>
	                @foreach($clients as $client)
		                <tr class="odd gradeX">
		                    <td>{{$i++}}</td>
		                    <td>{{$client->name}}</td>
		                    <td>{{$client->email}}</td>
		                    <td>{{$client->phone_number ? $client->phone_number:'-'}}</td>
			                <td class="text-center">
			                	<a href="{{URL::to('admin/view-client')}}/{{$client->slug}}" class="btn btn-sm btn-info">
			                		<i class="fa fa-eye"></i>
			                	</a>
			                	<a href="{{URL::to('admin/edit-client')}}/{{$client->slug}}" class="btn btn-sm btn-warning">
			                		<i class="fa fa-edit"></i>
			                	</a>
			                	<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="DestroyClient('{{$client->id}}')">
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
	function DestroyClient(id) {
		swal({
		title: "Delete Client",
		text: "Are you sure you want to delete the client?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "Yes, delete!",
		closeOnConfirm: false
		},
		function(isconfirm){ 
			if (isconfirm) {
				$.get("{{ URL::to('admin/destroy-client') }}",{id: id}, function(res){
					//swal("Deleted!", "", "success");
					location.reload();
				});
			}
		
		});
  	}

</script>
@endsection