@extends('front.layout.index')
@section('meta')
    
<title>Verify License | Dlims Bhimber Govajk </title>
@endsection

@section('content')
<div class="header-title white" data-parallax="scroll" data-position="top" data-natural-height="650"        data-natural-width="1920" data-image-src="{{asset('front/images/bg-10.png')}}">
    <div class="container">
        <div class="title-base">
            <hr class="anima" />
            <h1>Verify License | <a href="{{url('/')}}">HOME</a></h1> 
        </div>
    </div>
</div>
<div class="section-empty section-item">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <h4>Verify License Now</h4>
                <hr class="space s" />
                <form  method="GET">
                    <div class="row">
                        <div class="col-md-8">
                            <input  name="cnic" placeholder="CNIC Number With Hashes" type="text" class="form-control form-value" required>
                            <hr class="space s" />
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Verify Now</button>
                            <hr class="space s" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@if($license != null)
<div class="section-empty">
    <div class="container content">
        <div class="row vertical-row">
            <div class="col-md-6">
                <h4>User Information </h4>
                <hr class="space xs" />
                <ul class="list-texts">
                    <li><b>Name :</b>   {{$license->name}}</li>
                    <li><b>Cnic :</b>   {{$license->cnic}}</li>
                    <li><b>Father / Husband Name :</b>   {{$license->father_name}} </li>
                    <li><b>City :</b> {{$license->city}}</li>
                </ul>
            </div>
        </div>
        <div class="row vertical-row">
            <div class="col-md-6">
                <h4>License Information </h4>
                <hr class="space xs" />
                <ul class="list-texts">
                    <li><b>Issue Date :</b>   {{$license->issue_date}}</li>
                    <li><b>Valid From :</b>   {{$license->cnic}}</li>
                    <li><b>Valid To :</b>   {{$license->valid_to}} </li>
                    <li><b>Allowed Vehicle :</b> {{$license->allowed_vehicles}}</li>
                    <li><b>Status :</b> {{$license->status}}</li>
                    @if(@$setting->download_button)
                    <li><button type="button" class="btn btn-sm" id="pin_modals"> Download License</button></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- <div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-12">
                <div class="list-group pricing-table">
                    <div class="list-group-item pricing-price">
                        {{$license->name}} 
                    </div>
                    <div class="list-group-item pricing-name">
                        <h3>
                            {{$license->cnic}} 
                        </h3>
                    </div>
                    <div class="list-group-item">
                        Father Name : {{$license->father_name}} 
                    </div>
                    <div class="list-group-item">
                        City : {{$license->city}}
                    </div>
                    <div class="list-group-item">
                        Issue Date : {{$license->issue_date}}
                    </div>
                    <div class="list-group-item">
                        Valid From : {{$license->valid_from}}
                    </div>
                    <div class="list-group-item">
                        Valid To : {{$license->valid_to}}
                    </div>
                    <div class="list-group-item">
                        Allowed Vehicle : {{$license->allowed_vehicles}}
                    </div>
                    <div class="list-group-item">
                        Status : {{$license->status}}
                    </div>
                    <div class="list-group-item">
                        <button type="button" class="btn btn-sm" id="pin_modals"> Download License</button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="space" />
    </div>
</div> --}}
<div id="pin_modal" class="modal fade">
    <div class="modal-dialog">
        <form method="get">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Enter Pin Code</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Pin</label>
                        <input class="form-control" type="text" name="pin"  required>
                        <input class="form-control" type="hidden" name="license_id"  value="{{@$license->id}}" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif

@endsection
@section('scripts')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('#pin_modals').click(function(event){
            event.preventDefault();
            $("#pin_modal").modal('show');
    });
    });
</script>
@endsection