@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3> EDIT FORM </h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Form Details</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.form.update',$form->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Form Title</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Form Title" value="{{$form->name}}" required>
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Form Image</label>
                            <input type="file"  class="form-control" name="image">
                        </div>
                    </div>   
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Form Type</label>
                            <select name="type" class="form-control" id="" required>
                                <option value="">Select</option>
                                <option @if($form->type == 'How To Apply') selected @endif value="How To Apply">How To Apply</option>
                                <option @if($form->type == 'Download') selected @endif value="Download">Download</option>
                            </select>                    
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