@extends('front.layout.index')
@section('meta')
    
<title>How To Apply | Dlims Bhimber Govajk </title>
@endsection

@section('content')
<div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="650"        data-natural-width="1920" data-image-src="{{asset('front/images/bg-10.png')}}">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>How to Apply | <a href="{{url('/')}}">HOME</a></h1> 
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            @foreach (App\Models\Form::apply() as $key => $form)
            <div class="col-md-4">
                <div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
                    <i class="im-cloud-hail icon circle anima"></i>
                    <h3>{{$form->name}}</h3>
                    <a class="btn-text" href="{{url('download_form',$form->id)}}">Download Form</a>
                </div>
            </div>
            @endforeach
        </div>
        <hr class="space" />
    </div>
</div>
@endsection