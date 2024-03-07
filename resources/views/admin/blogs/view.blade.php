@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				View Blog
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/blog-list')}}" class="btn btn-purple waves-effect">Back to list</a>
            </div>
			<div class="table-responsive">
	            <table class="table table-striped table-bordered">
	                <tbody>
	                
		                <tr>
		                    <td>Blog Name</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$blog->title}}</th>
		                </tr>
						<tr>
		                    <td>Blog Image</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th><img src="{{asset('storage/app')}}/{{$blog->photo}}" class="form-control" name="image" style="width: 200px;"></th>
						</tr>
						<tr>
		                    <td> Auter name</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$blog->auther_name}} </th>
						</tr>
						<tr>
							
		                    <td>Meta Keyword</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$blog->meta_keywords}}</th>
						</tr>
						<tr>
							
		                    <td>Meta Description</td>
		                    <td width="5%" class="text-center">:</td>
		                    <th>{{$blog->meta_description}}</th>
						</tr>
						
						<tr>
							
		                    <td>Tags</td>
		                    <td width="5%" class="text-center">:</td>
		                    <td> @foreach($blog->tags as $tag)
								{{$tag->tag}},
							@endforeach</td>
						</tr>
						
		                <tr>
		                    <td>
		                    	<a href="{{URL::to('admin/edit-blog')}}/{{$blog->slug}}" class="btn btn-warning">
			                		<i class="fa fa-edit"></i> Edit
			                	</a>
			                </td>
			                <td colspan="2">
			                	<a href="javascript:void(0)" class="btn btn-danger" onclick="Destroyblog('{{$blog->id}}')">
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
	function Destroyblog(id) {
    swal({
      title: "Delete blog",
      text: "Are you sure you want to delete the blog?",
      type: "warning",
      showCancelButton: true,
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Yes, delete!",
      closeOnConfirm: false
    },
    function(isconfirm){ 
      if (isconfirm) {
        $.get("{{ URL::to('admin/destroy-blog') }}",{id: id}, function(res){
          //swal("Deleted!", "", "success");
           window.location="{{url('admin/blog-list')}}";
        });
      }
      
    });
  }

</script>
@endsection