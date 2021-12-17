@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3> EDIT LICENSE </h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit License Details</h5>
                <button data-toggle="modal" data-target="#delete_modal" 
                 class="btn btn-danger float-right">Delete License</button>
                        
            </div>
            <div class="card-body">
                <form action="{{route('admin.license.update',$license->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">License Name</label>
                            <input type="text" name="name" class="form-control" placeholder="License Name" value="{{$license->name}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">CNIC</label>
                            <input type="text" class="form-control" name="cnic"  placeholder="CNIC" value="{{$license->cnic}}">
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Father Name </label>
                            <input type="text" name="father_name" class="form-control" placeholder="Father Name" value="{{$license->father_name}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">City </label>
                            <input type="text" class="form-control" name="city"  placeholder="City" value="{{$license->city}}">
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">License Number</label>
                            <input type="text"  class="form-control" name="license_number"  placeholder="License Number" value="{{$license->license_number}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Issue Date</label>
                            <input type="text" class="form-control" name="issue_date"  placeholder="Issue Date" value="{{$license->issue_date}}">
                        </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Valid From</label>
                             <input type="text" class="form-control" name="valid_from"  placeholder="Valid From" value="{{$license->valid_from}}">
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Valid To</label>
                             <input type="text"  class="form-control" name="valid_to"  placeholder="Valid To" value="{{$license->valid_to}}">
                         </div>
                     </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Allowed Vehicles</label>
                             <input type="text" class="form-control" name="allowed_vehicles"  placeholder="Allowed Vehicles" value="{{$license->allowed_vehicles}}">
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Status</label>
                             <input type="text"  class="form-control" name="status"  placeholder="Status" value="{{$license->status}}">
                         </div>
                     </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Pin</label>
                             <input type="number" class="form-control" name="pin"  placeholder="Pin" value="{{$license->pin}}">
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">License Image</label>
                             <input type="file"  class="form-control" name="image">
                         </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address"  placeholder="Address"  value="{{$license->address}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Height</label>
                            <input type="text"  class="form-control" name="height" placeholder="Height" value="{{$license->height}}">
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Blood Group</label>
                            <input type="text" class="form-control" name="blood_group"  placeholder="Blood Group" value="{{$license->blood_group}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Passport</label>
                            <input type="text"  class="form-control" name="passport" placeholder="Passport" value="{{$license->passport}}">
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">D.O.B</label>
                            <input type="text" class="form-control" name="dob"  placeholder="DOB" value="{{$license->dob}}">
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Mobile</label>
                            <input type="text"  class="form-control" name="mobile" placeholder="Mobile" value="{{$license->mobile}}">
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
<div id="delete_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Are You Sure that you want to delete this license?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                <form action="{{route('admin.license.destroy',$license->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection