   
@extends('backend.layouts.admin-master')
@section('title','General Settings')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">General Settings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">General Settings</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">General Settings</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row">
                                    <!-- Site Settings Form -->
                                    <div class="col-md-6">
                                        <form action="{{route('admin.site-setting.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <h4>Site Settings</h4>
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">Site Name</label>
                                                        <input type="text" class="form-control" name="site_name" placeholder="Enter Site Name" value="{{ $siteName ?? old('site_name') }}">
                                                        @error('site_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">Site Email</label>
                                                        <input type="text" class="form-control" name="site_email" placeholder="Enter Site Email" value="{{ $siteEmail ?? old('site_email') }}">
                                                        @error('site_email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">App Enviroment</label>
                                                        <input type="text" class="form-control" name="app_enviroment" placeholder="Enter App Enviroment" value="{{ $appEnviroment ?? old('app_enviroment') }}">
                                                        @error('app_enviroment')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">App Debug</label>
                                                        <input type="text" class="form-control" name="app_debug" placeholder="Enter App Debug" value="{{ $appDebug ?? old('app_debug') }}">
                                                        @error('app_debug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="image" class="form-label">Site Logo</label>
                                                        <input type="file" class="form-control" name="site_logo">
                                                        <img src="{{asset('assets/backend/uploads/site_logo/'.$siteLogo)}}" alt="Site logo" width="70">
                                                        @error('site_logo')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="favicon" class="form-label">Site Favicon</label>
                                                        <input type="file" class="form-control" name="site_favicon">
                                                        <img src="{{asset('assets/backend/uploads/site_logo/'.$siteFavicon)}}" alt="Site Favicon" width="70">

                                                        @error('site_favicon')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <button class="btn btn-primary mt-3" type="submit">Save Site Settings</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                
                                    <!-- SMTP Settings Form -->
                                    <div class="col-md-6">
                                        <form action="{{ route('admin.smtp-setting.store') }}" method="POST">
                                            @csrf
                                            <h4>SMTP Settings</h4>
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_host" class="form-label">SMTP Host</label>
                                                        <input type="text" class="form-control" name="smtp_host" placeholder="Enter SMTP Host" value="{{$smtpHost ?? old('smtp_host') }}">
                                                        @error('smtp_host')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_port" class="form-label">SMTP Port</label>
                                                        <input type="text" class="form-control" name="smtp_port" placeholder="Enter SMTP Port" value="{{$smtpPort ?? old('smtp_port') }}">
                                                        @error('smtp_port')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_email" class="form-label">SMTP Email</label>
                                                        <input type="text" class="form-control" name="smtp_email" placeholder="Enter SMTP Email" value="{{$smtpEmail ?? old('smtp_email') }}">
                                                        @error('smtp_email')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_password" class="form-label">SMTP Password</label>
                                                        <input type="text" class="form-control" name="smtp_password" placeholder="Enter SMTP Password" value="{{ $smtpPassword ?? old('smtp_password') }}">
                                                        @error('smtp_password')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <button class="btn btn-primary mt-3" type="submit">Save SMTP Settings</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
   
</div>

@endsection
 
@push('scripts')

@endpush
