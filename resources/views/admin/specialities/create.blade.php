@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Add Speciality
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/speciality-list')}}" class="btn btn-purple waves-effect"> Categories</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Add Speciality</a>
            </div>
            <form action="{{URL::to('admin/store-speciality')}}" method="POST" class="p-t-20" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
            
                <div class="row">

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Speciality Name</label>
                            <input class="form-control {{ $errors->has('speciality') ? ' is-invalid' : '' }}" name="speciality" type="text" required data-parsley-required-message="Please enter speciality name.">
                            @if ($errors->has('speciality'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('speciality') }}</strong>
                                </span>
                            @endif
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