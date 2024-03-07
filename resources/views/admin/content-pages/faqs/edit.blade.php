@extends('admin.layouts.master')
@section('content')
<div class="col-lg-12">
    <div class="pvr-wrapper">
        <div class="pvr-box">
            <h5 class="pvr-header">
                Update FAQ
                <div class="pvr-box-controls">
                    <i class="material-icons" data-box="refresh" data-effect="win8_linear">refresh</i>
                    <i class="material-icons" data-box="fullscreen">fullscreen</i>
                </div>
            </h5>
            <div id="toolbar">
                <a href="{{URL::to('admin/page-faq')}}" class="btn btn-purple waves-effect">FAQs</a>
                <a href="javascript:void(0)" class="btn btn-disebled waves-effect">Update FAQ</a>
            </div>
            <form action="{{URL::to('admin/update-faq')}}" method="POST" class="p-t-20 pageForm" data-parsley-validate data-parsley-trigger="focusin focusout" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$faq->id}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>FAQ Title</label>
                            <input class="form-control" name="title" type="text" required data-parsley-required-message="Please enter faq title." value="{{$faq->title}}">
                        </div>
                    </div>
                    @foreach($faq->faqs as $faqs)
                        <div class=" col-sm-12">
                            <div class="input-group custom-width">
                                <div class="form-group">
                                    <label>Question</label>
                                    <input class="form-control" name="question[]" type="text" required data-parsley-required-message="Please enter question." value="{{$faqs->question}}" >
                                    <input type="hidden" name="faq_id" value="{{$faqs->id}}">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <input class="form-control" name="answer[]" type="text" required data-parsley-required-message="Please enter answer." value="{{$faqs->answer}}" >
                                </div>
                                <div class="removeBtn"></div>
                            </div>
                        </div>
                    @endforeach
                    <div class="input_fields_wrap col-sm-12">
                    </div>
                    <!-- add button div -->
                    <div class="d-inline-block customfield">
                        <button class="add_field_button"><i class="fas fa-plus-square"></i> Add More</button>
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
@section('script')

<script>
    $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="input-group custom-width"><div class="form-group"><label>Question</label><input class="form-control" name="question[]" type="text" required data-parsley-required-message="Please enter question."></div><div class="form-group"><label>Answer</label><input class="form-control" name="answer[]" type="text" required data-parsley-required-message="Please enter answer."></div><div class="removeBtn"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
</script>
@endsection