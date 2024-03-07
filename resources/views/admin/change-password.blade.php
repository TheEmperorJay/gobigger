@extends('admin.layouts.master')
@section('content')
<div class="col-lg-6 offset-3">
    <div class="pvr-wrapper">
        <div class="pvr-box">
			<h5 class="pvr-header">
				Change Password
			</h5>
			<form method="POST" action="{{URL::to('admin/changePassword')}}">
				@csrf
			    <fieldset>
			    	<div class="col-md-12">
				        <div class="form-group">
				            <label>Old Password</label>
				            <input type="password" name="current_password" class="form-control{{ $errors->has('current_password') ? ' is-invalid' : '' }}" placeholder="Old Password">
				            @if ($errors->has('current_password'))
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $errors->first('current_password') }}</strong>
			                    </span>
			                @endif

				        </div>
				        <div class="form-group">
				            <label>New Password</label>
				            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="New Password">
			                @if ($errors->has('password'))
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $errors->first('password') }}</strong>
			                    </span>
			                @endif
				        </div>
				        <div class="form-group">
				            <label>Confirm Password</label>
				            <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" placeholder="Confirm Password">
				            @if ($errors->has('password_confirmation'))
			                    <span class="invalid-feedback" role="alert">
			                        <strong>{{ $errors->first('password_confirmation') }}</strong>
			                    </span>
			                @endif
				        </div>
				        <button type="submit" class="btn btn-purple m-r-5">submit</button>
				    </div>
			    </fieldset>
			</form>
		</div>
	</div>
</div>

@endsection