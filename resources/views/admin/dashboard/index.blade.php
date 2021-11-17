@extends('admin.layout.index')
@section('contents')

<div class="row mb-2 mb-xl-4">
    <div class="col-auto d-none d-sm-block">
    <h3>DASHBOARD</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('admin.license.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-primary float-right">All</span>
                                <h5 class="card-title mb-0">Total License</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\License::count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('admin.license.create')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-info float-right">All</span>
                                <h5 class="card-title mb-0">Create License</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\License::count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('admin.message.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-success float-right">All</span>
                                <h5 class="card-title mb-0">Total Messages </h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Message::count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('admin.email.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-warning float-right">All</span>
                                <h5 class="card-title mb-0">Total Emails</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Email::count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
              
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('admin.form.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-success float-right">All</span>
                                <h5 class="card-title mb-0">Total How To Apply Form </h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Form::apply()->count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('admin.form.index')}}">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <span class="badge badge-warning float-right">All</span>
                                <h5 class="card-title mb-0">Total Download Forms</h5>
                            </div>
                            <div class="card-body my-2">
                                <div class="row d-flex align-items-center mb-4">
                                    <div class="col-8">
                                        <h2 class="d-flex align-items-center mb-0 font-weight-light">
                                            {{App\Models\Form::download()->count()}}
                                        </h2>
                                    </div>
                                </div>
                                <div class="progress progress-sm shadow-sm mb-1">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
              
            </div>
            
            
        </div>
    </div>
</div>

@endsection