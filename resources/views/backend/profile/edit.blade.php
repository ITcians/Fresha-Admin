@extends('backend.layouts.admin-master')
@section('title','Edit Profile')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
                                <li class="breadcrumb-item active">Edit Profile</li>
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
                                            <div class="card-body p-4">
                                                <div class="tab-content">
                                                    <form action="{{route('admin.profile.update',$user->id)}}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="firstnameInput" class="form-label">Username</label>
                                                                    <input type="text" class="form-control" name="username" placeholder="Enter your username" value="{{$user->name}}">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="lastnameInput" class="form-label">Email</label>
                                                                    <input type="text" class="form-control" name="email" placeholder="Enter your email" value="{{$user->email}}">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            
                                                            <hr>
                                                            <p>Choose new password if you want to change the password if not then you can leave these fields as empty</p>
                                                            <hr>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="emailInput" class="form-label">Choose new password</label>
                                                                    <input type="password" class="form-control" name="password" placeholder="Enter new password">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="JoiningdatInput" class="form-label">Confirm new password</label>
                                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Enter confirm password">
                                                                </div>
                                                            </div>
                                                            
                                                            <!--end col-->
                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit" class="btn btn-primary">Updates</button>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--end card-->
                                    </div>
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