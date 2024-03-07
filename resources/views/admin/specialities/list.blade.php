@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Speciality List
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
		
			<div id="toolbar">
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Specialities</a>
                <a href="{{URL::to('admin/add-speciality')}}" class="btn btn-purple waves-effect">Add Speciality</a>
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
	                    <th>Speciality</th>
	                    <th>Status</th>
	                    <th class="text-center">Action</th>
	                </tr>
	                </thead>
	                <tbody>
	                <?php $i = 1;  ?>
	                @foreach($specialities as $speciality)
		                <tr class="odd gradeX">
		                    <td>{{$i++}}</td>
		                    <td>{{$speciality->speciality}}</td>
							<td>
								@if($speciality->status == 1)
								<span class="myActionStatus{{$speciality->id}}">
									<a href="javascript:void(0)" onclick="changeStatus('{{$speciality->id}}', 0)" class="badge badge-primary test">Active</a>
								</span>
								@else
								<span class="myActionStatus{{$speciality->id}}">
									<a href="javascript:void(0)" onclick="changeStatus('{{$speciality->id}}', 1)" class="badge badge-danger test">Deactive</a>
								</span>
								@endif 
							</td>
			                <td class="text-center">
			                	<a href="{{URL::to('admin/edit-speciality')}}/{{$speciality->slug}}" class="btn btn-sm btn-warning">
			                		<i class="fa fa-edit"></i>
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
	function changeStatus(id, status) {
    
		$.get("{{ URL::to('admin/speciality-status') }}",{id: id, status: status}, function(res){
			if (status == 0) {
				toastr.success('you have successfully changed the status..!!');
				$('.myActionStatus'+id+' a').remove();
				$('.myActionStatus'+id).append('<a href="javascript:void(0)" onclick="changeStatus('+id+', 1)" class="badge badge-danger">Deactive</a>');
			}else{
				toastr.success('you have successfully changed the status..!!');
				$('.myActionStatus'+id+' a').remove();
				$('.myActionStatus'+id).append('<a href="javascript:void(0)" onclick="changeStatus('+id+', 0)" class="badge badge-primary">Active</a>');
			}
		});
	}
</script>
@endsection