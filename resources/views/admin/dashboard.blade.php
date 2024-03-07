@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
	    <div class="welcome_message pvr-box-gray">
	    	<?php 
        		$hour = date('H');
				$dayTerm = ($hour > 17) ? "Evening" : (($hour > 12) ? "Afternoon" : "Morning");
        	?>
            
            <div class="element-info">
                <div class="element-info-with-icon">
                    <div class="element-info-text">
                        <h2 class="element-inner-header m-t-0 text-purple" id="good_morning"
                            data-typeit="true">
                            Good {{$dayTerm}}, {{Auth::user()->name}}
                        </h2>
                        <div class="element-inner-desc text-justify m-b-20">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard of type and
                            scrambled it to make a type specimen book. It has survived not only
                            five centuries
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

@endsection
@section('script')
<script>
	$('.Single').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>

@endsection