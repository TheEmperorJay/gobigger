@extends('admin.layouts.master')
@section('content')

<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
        	<h5 class="pvr-header">
                Notifications
				<div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
			</h5>



            @foreach($notifications as $notification)
            <div class="lorm">
                <div class="notTitle"><span class="note">Notification</span><span class="timer">{{Date('M d, Y h:i A', strtotime($notification->created_at))}}</span></div>
                {{--<div class="notificationImage">
                    <img src="{{ URL::asset('public') }}/images/category6.jpg" alt="">
                </div>--}}
                @foreach($notification->data as $data)
                    <div class="notificationContent">
                        {{$data}}
                    </div>
                @endforeach
            </div>
            @endforeach
        </div>	<!--col-->
    </div>	<!--row-->
</div>
@endsection