@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>VIEW Form</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add New Form</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.form.store')}}" enctype="multipart/form-data">
                   @csrf
                   <div class="row">
                        <div class="form-group col-6">
                            <label class="form-label">Form Title</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Form Title" required>
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
                                <option value="How To Apply">How To Apply</option>
                                <option value="Download">Download</option>
                            </select>                    
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View Form Table</h5>
        </div>
        <table id="datatables-buttons" class="table table-striped">
            <thead>
                <tr>
                    <th style="width:auto;">#</th>
                    <th style="width:auto;">Image</th>
                    <th style="width:auto;">Name</th>
                    <th style="width:auto;">Type </th>
                    <th style="width:auto;">Action</th>
                    <th style="width:auto;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Models\Form::all() as $key => $form)
                <tr> 
                    <td>{{$key+1}}</td>
                    <td><img src="{{asset($form->image)}}" width="200" height="200"></td>
                    <td>{{$form->name}}</td>
                    <td>{{$form->type}}</td>
                    <td><a href="{{route('admin.form.edit',$form->id)}}" class="button"><button class="btn btn-primary"> Edit</button></a></td>
                    <td class="table-action">
                        <form action="{{route('admin.form.destroy',$form->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn"><i class="align-middle" data-feather="trash"></i></button>
                        </form>
                    </td>
                </tr>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function() {
        // Datatables with Buttons
        var datatablesButtons = $("#datatables-buttons").DataTable({
            responsive: true,
            lengthChange: !1,
            buttons: ["copy", "print"]
        });
        datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
    });
</script>
@endsection