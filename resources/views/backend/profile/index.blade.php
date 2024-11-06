@extends('backend.layouts.admin-master')
@section('title','Admin Profile')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                <li class="breadcrumb-item active">Profile Info</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                      
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Info
                                                    <a href="{{route('admin.profile.edit')}}" class="btn btn-success float-end" >Edit</a>
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                <td class="text-muted">{{auth()->user()->name}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <th class="ps-0" scope="row">E-mail :</th>
                                                                <td class="text-muted">{{auth()->user()->email}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Role :</th>
                                                                <td class="text-muted">{{auth()->user()->role == '1'?
                                                                    'Admin':'Not Defiened'}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Joining Date</th>
                                                                <td class="text-muted">{{auth()->user()->created_at->format('d-M-Y')}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                        
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                 
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    
</div>

@endsection