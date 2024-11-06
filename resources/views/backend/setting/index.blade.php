   
@extends('backend.layouts.admin-master')
@section('title','Admin Settings')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Admin Settings</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Admin Settings</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-success mb-3" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#catalog-1" role="tab">Catalog Settings</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#branches-1" role="tab">Branches</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">Messages</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            {{-- <div class="tab-content text-muted">
                                <div class="tab-pane active" id="catalog-1" role="tabpanel">
                                    <div class="row">
                                        <a href="{{route('admin.service-type.index')}}">
                                        <div class="col-md-4">
                                            <div class="card card-body w-50 bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </a>
                                    <a href="{{route('admin.service-type.index')}}">
                                        <div class="col-md-4">
                                            <div class="card card-body w-50 bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </a>
                                    
                                    </div><!-- end row -->
                                </div>
                                <div class="tab-pane" id="profile-1" role="tabpanel">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            In some designs, you might adjust your tracking to create a certain artistic effect. It can also help you fix fonts that are poorly spaced to begin with.
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages-1" role="tabpanel">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            Each design is a new, unique piece of art birthed into this world, and while you have the opportunity to be creative and make your own style choices.
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings-1" role="tabpanel">
                                    <div class="d-flex mt-2">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live.
                                        </div>
                                    </div>
                                    <div class="d-flex mt-2">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            After gathering lots of different opinions and graphic design basics, I came up with a list of 30 graphic design tips that you can start implementing.
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="tab-content text-muted">
                                <div class="tab-pane active" id="catalog-1" role="tabpanel">
                                    <div class="row">
                                        <a href="{{route('admin.service-type.index')}}">
                                            <div class="col-md-3"> <!-- Change col-md-4 to col-md-3 to fit more cards in one row -->
                                                <div class="card card-body bg-light">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Service Type</h5>
                                                            <p class="text-muted mb-0">Add service type here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </a>
                                        <a href="{{route('admin.service-type.index')}}">
                                            <div class="col-md-3"> <!-- Change col-md-4 to col-md-3 -->
                                                <div class="card card-body bg-light">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Service Type</h5>
                                                            <p class="text-muted mb-0">Add service type here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </a>
                                        <!-- Add more cards as needed -->
                                        <a href="{{route('admin.service-type.index')}}">
                                            <div class="col-md-3"> <!-- Ensure all cards are col-md-3 -->
                                                <div class="card card-body bg-light">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Service Type</h5>
                                                            <p class="text-muted mb-0">Add service type here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </a>
                                        <a href="{{route('admin.service-type.index')}}">
                                            <div class="col-md-3"> <!-- Ensure all cards are col-md-3 -->
                                                <div class="card card-body bg-light">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">Service Type</h5>
                                                            <p class="text-muted mb-0">Add service type here</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        </a>
                                    </div><!-- end row -->
                                </div>
                                <div class="tab-pane" id="profile-1" role="tabpanel">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-2">
                                            In some designs, you might adjust your tracking to create a certain artistic effect...
                                        </div>
                                    </div>
                                    <!-- More content... -->
                                </div>
                                <!-- Other tab panes... -->
                            </div> --}}
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="catalog-1" role="tabpanel">
                                    <div class="row">
                                        <a href="{{route('admin.service-type.index')}}" class="col-md-3 mb-4"> <!-- Add mb-4 for spacing -->
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                            
                                        <a href="{{route('admin.duration-hours.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Duration Hours</h5>
                                                        <p class="text-muted mb-0">Add Duration Hours here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                            
                                        {{-- <a href="{{route('admin.service-type.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                            
                                        <a href="{{route('admin.service-type.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> --}}
                                    </div><!-- end row -->
                                </div>
                            
                                <div class="tab-pane" id="branches-1" role="tabpanel">
                                    <div class="row">
                                        <a href="{{route('admin.branche-address.index')}}" class="col-md-3 mb-4"> <!-- Add mb-4 for spacing -->
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Branch address</h5>
                                                        <p class="text-muted mb-0">Add branch addresses here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                            
                                        {{-- <a href="{{route('admin.duration-hours.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Branch address 2</h5>
                                                        <p class="text-muted mb-0">Add Branch adrres 2 here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> --}}
                            
                                        {{-- <a href="{{route('admin.service-type.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> --}}
                            
                                        {{-- <a href="{{route('admin.service-type.index')}}" class="col-md-3 mb-4">
                                            <div class="card card-body bg-light">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="flex-grow-1 ms-2">
                                                        <h5 class="card-title mb-1">Service Type</h5>
                                                        <p class="text-muted mb-0">Add service type here</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a> --}}
                                    </div><!-- end row -->
                                    <!-- More content... -->
                                </div>
                                <!-- Other tab panes... -->
                            </div>
                            
                            
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <!--end col-->

                <!--end col-->
            </div>
            <!--end row-->
            

        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
   
</div>

@endsection
 
@push('scripts')

@endpush
