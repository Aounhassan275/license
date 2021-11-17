@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>VIEW LICENSE</h3>
    </div>
</div>
<div class="col-12 ">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">View License  Table</h5>
        </div>
        <table id="datatables-buttons" class="table table-striped">
            <thead>
                <tr>
                    <th style="width:auto;">#</th>
                    <th style="width:auto;">Image</th>
                    <th style="width:auto;">Name</th>
                    <th style="width:auto;">CNIC # </th>
                    <th style="width:auto;">License # </th>
                    <th style="width:auto;">Action</th>
                    <th style="width:auto;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Models\License::all() as $key => $license)
                <tr> 
                    <td>{{$key+1}}</td>
                    <td><img src="{{asset($license->image)}}" width="200" height="200"></td>
                    <td>{{$license->name}}</td>
                    <td>{{$license->cnic}}</td>
                    <td>{{$license->license_number}}</td>
                    <td><a href="{{route('admin.license.edit',$license->id)}}" class="button"><button class="btn btn-primary"> Edit</button></a></td>
                    <td class="table-action">
                        <form action="{{route('admin.license.destroy',$license->id)}}" method="POST">
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