@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
				Add User
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>
			<div id="toolbar">
                <a href="{{URL::to('admin/client-list')}}" class="btn btn-purple waves-effect">Clients</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Add client</a>
            </div>
            <form action="{{URL::to('admin/store-client')}}" method="POST" class="p-t-20" data-parsley-validate data-parsley-trigger="focusin focusout" autocomplete="off" enctype="multipart/form-data">
                @csrf
            
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" type="text" required data-parsley-required-message="Please enter name.">
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" type="email" required data-parsley-required-message="Please enter email.">
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" type="number" required data-parsley-required-message="Please enter phone number.">
                            @if ($errors->has('phone_number'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input 
                                class="form-control" 
                                name="address" 
                                type="text"
                                placeholder="Pick Address"
                                id="searchTextField"
                                autocomplete="on"
                                runat="server"
                                onkeyup="initialize()"
                                required data-parsley-required-message="Please enter address."
                            >
                            <input class="form-control" type="hidden" name="latitude" id="latitude"/>
                            <input class="form-control" type="hidden" name="longitude" id="longitude" />
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input 
                                class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password" 
                                id='password'
                                type="password" 
                                required 
                                data-parsley-required-message="Please enter password."
                                data-parsley-equalto="#password"
                                data-parsley-equalto-message="Password and confirm password is not same."
                            >
                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input 
                                class="form-control {{ $errors->has('c_password') ? ' is-invalid' : '' }}" 
                                name="c_password" 
                                type="password" 
                                required 
                                data-parsley-required-message="Please enter confirm password." 
                                data-parsley-equalto="#password"
                                data-parsley-equalto-message="Password and confirm password is not same."
                            >
                            @if ($errors->has('c_password'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('c_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Profile Image</label>
                            <input class="form-control" name="profile_pic" type="file">
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
@section('script')

<script>
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();
        });
    }
</script>