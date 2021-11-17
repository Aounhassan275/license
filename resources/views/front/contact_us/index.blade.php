@extends('front.layout.index')
@section('meta')
    
<title>Contact Us | Dlims Bhimber Govajk </title>
@endsection

@section('content')
<div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="650"        data-natural-width="1920" data-image-src="{{asset('front/images/bg-10.png')}}">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>Contact Us | <a href="{{url('/')}}">HOME</a></h1> 
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h4>Send a message</h4>
                <hr class="space s" />
                <form action="{{url('message_store')}}"  method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input id="name" name="name" placeholder="Name" type="text" class="form-control form-value" required>
                    </div>
                    <div class="col-md-6">
                        <input id="email" name="email" placeholder="Email" type="email" class="form-control form-value" required>
                    </div>
                </div>
                <hr class="space xs" />
                    <div class="row">
                    <div class="col-md-12">
                            <input id="subject" name="subject" placeholder="Subject" type="text" class="form-control form-value" required>
                        <hr class="space s" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea id="message" name="message" placeholder="Type here your message" class="form-control form-value" required></textarea>
                        <hr class="space s" />
                        <button class="btn btn-primary" type="submit"><i class="im-mail-send"></i>Send Messages</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection