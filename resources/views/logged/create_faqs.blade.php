@php $title = "Faqs" @endphp

@extends('user.main')
 @section('content')

    <div class="author-area-pro">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="author-widgets-single res-mg-t-30">

                        <div class="row mb-5">

                            <div class="col-lg-2"></div>
                            
                                <div class="col-lg-8">

                                    <div class="col-sm-12">
                                    <h2 style="color:white;">Create Faqs</h2>
                                </div>

                                <div class="col-sm-12">
                                    @if(Session::has('success_message'))
                                        <p class="alert alert-success text-center"  role="alert">

                                            {{ Session::get('success_message') }}

                                        </p>
                                    @elseif(Session::has('error_message'))
                                        <p class="alert alert-danger text-center text-white" role="alert">

                                            {{ Session::get('error_message') }}

                                        </p>
                                    @endif
                                </div>

                                <div class="col-sm-12" style="padding-left: 20px; padding-right: 20px;">
                                <div class="row">
                                    <form id="contactForm" enctype="multipart/form-data" method="POST" action="{{ route('store_faqs') }}" class="log-form">
                                        @csrf

                                        <div class="col-12 col-sm-12 faqs_fields_holder" data-count-holder="1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 style="color:white;" >1)</h5>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="title_">Question</label>
                                                        <input type="text" id="question" name="question[]" class="form-control" placeholder="Question"  />
                                                    </div>
                                                    @if($errors->has('question.*'))
                                                        <span class="invalid-feedback" role="alert">
                                                                @foreach($errors->get('question.*') as $message)
                                                                @foreach($message as $error)
                                                                    <strong>{{ $error }}</strong><br>
                                                                @endforeach
                                                            @endforeach
                                                            </span>
                                                    @endif
                                                </div>

                                                <div class="col-12 mt-4">
                                                    <div class="form-group">
                                                        <label for="summernote1">Answer</label>
                                                        <textarea id="summernote1" class="form-control" style="height: auto !important;" name="answers[]" placeholder="Enter Answers To The Question Above Here"></textarea>
                                                        @if($errors->has('answers.*'))
                                                            <span class="invalid-feedback" role="alert">
                                                                @foreach($errors->get('answers.*') as $message)
                                                                    @foreach($message as $error)
                                                                        <strong>{{ $error }}</strong><br>
                                                                    @endforeach
                                                                @endforeach
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div  class="col-sm-12 faqs_field_adder" style="margin-bottom: 20px;">
                                            <button onclick="addNewFaqsField()" type="button" class="btn guoBtn" title="Add new fields for reward">Add Fields</button>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-info btn-block">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                </div>

                            </div>
                            <div class="col-lg-2"></div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

     @include('user.styling')
     <script>
            function addNewFaqsField(){

                let faqs_fields_holder = $('.faqs_fields_holder');
                let TotalLength = faqs_fields_holder.length;
                let newCount = 0;
                for(let i = 0; i < TotalLength; i++){
                    let lastValue = parseFloat(TotalLength)-parseFloat(1);
                    if(parseFloat(i) == lastValue){
                        let lastCount = $(faqs_fields_holder[i]).attr('data-count-holder');
                        newCount = parseFloat(lastCount) + parseFloat(1);
                    }
                }


                let field = `
                    <div class="col-12 faqs_fields_holder" data-count-holder="${newCount}">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 >${newCount})</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="title_">Question</label>
                                                            <input type="text" id="question" name="question[]" class="form-control" placeholder="Question"  />
                                                        </div>
                                                        @error('question.1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="summernote1">Answer</label>
                            <textarea id="summernote1" class="form-control" style="height: auto !important;" name="answers[]" placeholder="Enter Answers To The Question Above Here"></textarea>
                        </div>
                    </div>

                    <div  class="col-sm-12" style="margin-bottom: 20px;">
                        <button onclick="removeRewardField(this, '.faqs_fields_holder')" type="button" class="btn guoBtn" title="Add new fields for reward"><i class="fa fa-trash"></i></button>
                </div>

                </div>
            </div>

        `
                $(field).insertBefore('.faqs_field_adder');

            }

            function removeRewardField(a, selected) {
                $(a).closest(selected).remove();
            }
     </script>
 @endsection