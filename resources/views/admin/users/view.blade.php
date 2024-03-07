@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				{{$client->name}}
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/client-list')}}" class="btn btn-purple waves-effect">Back to List</a>
            </div>
			<div class="tab-content">
				
				<div class="table-responsive tab-pane fade in active show" id="about">
					<table class="table table-striped table-bordered">
						<tbody>

						<!-- <div class="banner-profile">
							<div class="profile-outer">
								@if(!empty($client->profile_pic))
								<img src="{{asset('storage/app/profile_pics')}}/{{$client->profile_pic}}">
								@else
								<img src="{{URL::to('public/admin/img/user_profile.png')}}" />
								@endif
							</div>
						</div> -->
							@if($client->profile_pic)
								<tr>
									<td>Profile Image</td>
									<td width="5%" class="text-center">:</td>
									<th><img src="{{asset('storage/app')}}/{{$client->profile_pic}}" class="form-control" name="profile_pic" style="width: 200px;"></th>
								</tr>
							@endif
						
							<tr>
								<td>Name</td>
								<td width="5%" class="text-center">:</td>
								<th>{{$client->name}}</th>
							</tr>
							<tr>
								<td>Email</td>
								<td width="5%" class="text-center">:</td>
								<th>{{$client->email}}</th>
							</tr>
							<tr>
								<td>Phone</td>
								<td width="5%" class="text-center">:</td>
								<th>{{$client->phone_number ? $client->phone_number : '-'}}</th>
							</tr>
							<tr>
								<td>Address</td>
								<td width="5%" class="text-center">:</td>
								<th>{{$client->address}}</th>
							</tr>
							<tr>
								<td>
									<a href="{{URL::to('admin/edit-client')}}/{{$client->slug}}" class="btn btn-sm btn-warning">
										<i class="fa fa-edit"></i> Edit
									</a>
								</td>
								<td>
									<a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="DestroyClient('{{$client->id}}')">
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
			closeOnConfirm: true
		},
		function(isconfirm){ 
			if (isconfirm) {
				$.get("{{ URL::to('admin/destroy-client') }}",{id: id}, function(res){
					//swal("Deleted!", "", "success");
					window.location="{{url('admin/client-list')}}";
				});
			}
		
		});
	}

	function DestroyCategory(id) {
		swal({
			title: "Delete Product Category",
			text: "Are you sure you want to delete the product category?",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete!",
			closeOnConfirm: true
		},
		function(isconfirm){ 
			if (isconfirm) {
				$.get("{{ URL::to('admin/destroy-user-product-category') }}",{id: id}, function(res){
					//swal("Deleted!", "", "success");
					location.reload();
				});
			}
		
		});
	}

	function DestroyBrand(id) {
		swal({
			title: "Delete Brand",
			text: "Are you sure you want to delete the brand?",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete!",
			closeOnConfirm: true
		},
		function(isconfirm){ 
			if (isconfirm) {
				$.get("{{ URL::to('admin/destroy-user-brand') }}",{id: id}, function(res){
					//swal("Deleted!", "", "success");
					location.reload();
				});
			}
		
		});
	}

	function DestroyProfessionalInfo(id) {
		swal({
			title: "Delete Professional Info",
			text: "Are you sure you want to delete the Professional Info?",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Yes, delete!",
			closeOnConfirm: true
		},
		function(isconfirm){ 
			if (isconfirm) {
				$.get("{{ URL::to('admin/destroy-user-professional-info') }}",{id: id}, function(res){
					//swal("Deleted!", "", "success");
					location.reload();
				});
			}
		
		});
	}

</script>
@endsection