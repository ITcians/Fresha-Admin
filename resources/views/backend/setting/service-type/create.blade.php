   
@extends('backend.layouts.admin-master')
@section('title','Create Service Type')
@push('styles')
    <style>
 
    </style>
@endpush
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Service Type</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Create Service Type</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Create Service Type</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a class="btn btn-danger" href="{{route('admin.service-type.index')}}">Back</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row">
                                    <!-- Site Settings Form -->
                                    <div class="col-md-6">
                                        <form action="{{url('admin/store/service-type')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div class="">
                                                        <label for="title" class="form-label">Service Type Name</label>
                                                        <input type="text" class="form-control" name="service_type" id="service-input" placeholder="Enter Main Service. e.g. Barbering" value="{{ session('lastService') ?? old('service') }}">
                                                        @error('service')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    
                                                </div>
                                                {{-- <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">Sub  Service</label>
                                                        <input type="text" class="form-control" name="sub_service" placeholder="Enter Sub Service. e.g. Haircut, Shaving " value="{{ old('site_email') }}">
                                                        @error('sub_service')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">App Enviroment</label>
                                                        <input type="text" class="form-control" name="app_enviroment" placeholder="Enter App Enviroment" value="{{  old('app_enviroment') }}">
                                                        @error('app_enviroment')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="title" class="form-label">App Debug</label>
                                                        <input type="text" class="form-control" name="app_debug" placeholder="Enter App Debug" value="{{ old('app_debug') }}">
                                                        @error('app_debug')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div> --}}
                                               
                                                
                                                <div class="col-xxl-12 col-md-12">
                                                    <button class="btn btn-primary mt-3" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                
                                    <!-- SMTP Settings Form -->
                                    <div class="col-md-6">
                                        <form action="{{ route('admin.sub-service.store') }}" method="POST">
                                            @csrf
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_host" class="form-label">Service Type</label>
                                                        <select name="service_type" id="" class="form-select">
                                                            <option value="">Select Service Type</option>
                                                            @foreach ($ServiceTypes as $ServiceType)
                                                            <option value="{{$ServiceType->id}}">{{$ServiceType->service_type}}</option>
                                                                
                                                            @endforeach
                                                        </select>
                                                        @error('service_type')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <label for="smtp_port" class="form-label">Sub Service</label>
                                                        <input type="text" class="form-control" name="sub_service" placeholder="Enter Sub Service" value="{{old('sub_service') }}">
                                                        @error('sub_service')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                                <div class="col-xxl-12 col-md-12">
                                                    <button class="btn btn-primary mt-3" type="submit">Save</button>
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
