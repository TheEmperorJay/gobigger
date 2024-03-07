@extends('admin.layouts.master')
@section('content')
<div class="col-sm-12">
    <div class="user-profile compact">
        <div class="up-head-w" style="background-image:url('{{ asset('public/admin/img/adminBg.jpg') }}')">
            <div class="up-main-info">
                <div class="avatar">
                    <img alt="" class="avatar " src="{{ asset('public/admin/img/user_profile.png') }}">
                </div>
                <h2 class="up-header">
                    {{Auth::user()->name}}
                </h2>
                <h6 class="up-sub-header">
                    Admin
                </h6>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 p-15">
    <div class="pvr-wrapper">
        <div class="pvr-box">
            <form action="{{URL::to('admin/update-profile')}}" method="POST" data-parsley-validate data-parsley-trigger="focusin focusout">
            @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="{{Auth::user()->name}}" type="text" required data-parsley-required-message="Please enter name.">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{Auth::user()->email}}" type="text" required data-parsley-required-message="Please enter email.">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" name="phone_number" value="{{Auth::user()->phone_number}}" type="text">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <button class="btn btn-purple waves-effect" type="submit">Update</button>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>       
@endsection