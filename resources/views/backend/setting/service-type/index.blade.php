@extends('backend.layouts.admin-master')
@section('title','Service Types')
@section('content')
    
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Service Types</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Service Types</a></li>
                                        <li class="breadcrumb-item active">Index</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Service Types</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <a href="{{route('admin.setting.index')}}"  class="btn btn-danger"> Back</a>
                                            <a href="{{route('admin.service-type.create')}}"  class="btn btn-primary"><i class="bi bi-plus"></i> Add Service Type</a>
                                            
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                        {{-- <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0 table-striped category-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Service</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                        </div> --}}

                                        <div class="row">
                                            @forelse ($ServiceTypes as $service)
                                            <div class="col-md-3">
                                                <div class="card card-body bg-light">
                                                    <div class="d-flex mb-4 align-items-center">
                                                        <div class="flex-grow-1 ms-2">
                                                            <h5 class="card-title mb-1">{{ $service->service_type }}</h5> <!-- Access the service type -->
                                                            <p class="text-muted mb-0">
                                                                @forelse ($service->subServiceTypes as $subService) <!-- Access the sub-services -->
                                                                    <ul>
                                                                       <li>{{ $subService->sub_service }}</li> 
                                                                    </ul>
                                                                @empty
                                                                    <span>No Sub Services Available</span> <!-- Message if no sub-services -->
                                                                @endforelse
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        @empty
                                            <div>
                                                No Service Available
                                            </div>
                                        @endforelse
                                        
                                        

                                        </div><!-- end row -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
   
@endsection
    

{{-- @push('scripts')
<script>
    $(document).ready(function() {
        $('.category-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.client.index') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'image', name: 'image' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
    </script>
@endpush  --}}

