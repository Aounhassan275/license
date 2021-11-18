@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3> EDIT SITE SETTING </h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Site Setting Details</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="row">
                        <div class="form-group col-12">
                            <label class="form-label">Pin Option :</label>
                            <br>
                            <label><input type="radio" value="1" class="" name="download_button" @if(@$setting->download_button ) checked @endif >
                                On</label>
                            <label>
                                <input type="radio" value="0" class="" name="download_button" @if(@$setting->download_button != 1) checked @endif>
                                Off</label>
                        </div>
                   </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection