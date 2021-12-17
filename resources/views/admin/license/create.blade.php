@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3> CREATE LICENSE </h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Create New License </h5>
                        
            </div>
            <div class="card-body">
                <form action="{{route('admin.license.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">License Name</label>
                            <input type="text" name="name" class="form-control" placeholder="License Name" >
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">CNIC</label>
                            <input type="text" class="form-control" name="cnic"  placeholder="CNIC" >
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Father Name </label>
                            <input type="text" name="father_name" class="form-control" placeholder="Father Name" >
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">City </label>
                            <input type="text" class="form-control" name="city"  placeholder="City" >
                        </div>
                   </div>
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">License Number</label>
                            <input type="text"  class="form-control" name="license_number"  placeholder="License Number" >
                        </div>
                        <div class="form-group col-6">
                            <label class="form-label">Issue Date</label>
                            <input type="text" class="form-control" name="issue_date"  placeholder="Issue Date" >
                        </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Valid From</label>
                             <input type="text" class="form-control" name="valid_from"  placeholder="Valid From" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Valid To</label>
                             <input type="text"  class="form-control" name="valid_to"  placeholder="Valid To" >
                         </div>
                     </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Allowed Vehicles</label>
                             <input type="text" class="form-control" name="allowed_vehicles"  placeholder="Allowed Vehicles" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Status</label>
                             <input type="text"  class="form-control" name="status"  placeholder="Status" >
                         </div>
                     </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Pin</label>
                             <input type="number" class="form-control" name="pin"  placeholder="Pin" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">License Image</label>
                             <input type="file"  class="form-control" name="image">
                         </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Address</label>
                             <input type="text" class="form-control" name="address"  placeholder="Address" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Height</label>
                             <input type="text"  class="form-control" name="height" placeholder="Height">
                         </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">Blood Group</label>
                             <input type="text" class="form-control" name="blood_group"  placeholder="Blood Group" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Passport</label>
                             <input type="text"  class="form-control" name="passport" placeholder="Passport">
                         </div>
                    </div>
                    <div class="row">
                         <div class="form-group col-6">
                             <label class="form-label">D.O.B</label>
                             <input type="text" class="form-control" name="dob"  placeholder="DOB" >
                         </div>
                         <div class="form-group col-6">
                             <label class="form-label">Mobile</label>
                             <input type="text"  class="form-control" name="mobile" placeholder="Mobile">
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