   
@extends('backend.layouts.admin-master')
@section('title','Create Duration Hours')
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
                        <h4 class="mb-sm-0">Create Duration Hours</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Create Duration Hours</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Create Duration Hours</h4>
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
                                    <div class="col-md-4">
                                        <form action="{{route('admin.duration-hour.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                    <div class="">
                                                        <label for="title" class="form-label">Duration Hour</label>
                                                        <input type="number" class="form-control" name="duration_hour" id="duration_hour" placeholder="Enter Duration. in minutes only " value="{{ session('lastService') ?? old('service') }}">
                                                        @error('duration_hour')
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
                                    
                                    <!-- Duration hours table -->
                                    <div class="col-md-8">
                                        <h5 class="mb-3">Saved Duration Hours</h5>
                                        <table class="table align-middle table-nowrap mb-0 table-striped category-table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Duration Hour</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>
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
<script>
    $(document).ready(function() {
        $('.category-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.duration-hours.index') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'duration_hr', name: 'duration_hr' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
    </script>
@endpush 
    
