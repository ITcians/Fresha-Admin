   
@extends('backend.layouts.admin-master')
@section('title','Branches')
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
                        <h4 class="mb-sm-0">Branches</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Branches</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Branches</h4>
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
                                    <div class="col-md-5">
                                        <form action="{{route('admin.branche-address.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row gy-4">
                                                <div class="col-xxl-12 col-md-12">
                                                        <label for="title" class="form-label">Branches</label>
                                                        <input type="text" class="form-control" name="branch_name" id="branch_name" placeholder="Enter Branch Name" value="{{ old('branch_name') }}">
                                                        @error('branch_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                </div>

                                                <div class="col-xxl-12 col-md-12">
                                                    <label for="title" class="form-label">Address</label>
                                                    <input type="text" class="form-control" name="branch_address" id="branch_address" placeholder="Enter Branch address" value="{{ old('branch_address') }}">
                                                    @error('branch_address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                    
                                                <div class="col-xxl-12 col-md-12">
                                                    <button class="btn btn-primary" type="submit">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <!-- Duration hours table -->
                                    <div class="col-md-7">
                                        <h5 class="mb-2 text-center">Branch Addresses</h5>
                                        {{-- <table class="table align-middle table-nowrap mb-0 table-striped category-table">
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
                                        </table> --}}
                                        {{-- @forelse ($branchesAddresses as $branchesAddress)
                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="card card-body text-center border">
                                                <h4 class="card-title">{{$branchesAddress->branch_name}}</h4>
                                                <p class="card-text text-muted">{{$branchesAddress->branch_address}}</p>
                                            </div>
                                        </div><!-- end col -->
                                        @empty
                                            
                                        @endforelse --}}
                                        <div class="row">
                                            @forelse ($branchesAddresses as $branchesAddress)
                                                <div class="col-xxl-12 col-lg-12 mb-3">
                                                    <div class="card card-body text-center border">
                                                        <h4 class="card-title">{{ $branchesAddress->branch_name }}</h4>
                                                        <p class="card-text">{{ $branchesAddress->branch_address }}</p>
                                                        
                                                        <div class="dropdown">
                                                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton{{ $branchesAddress->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $branchesAddress->id }}">
                                                                {{-- <li><a class="dropdown-item" href="{{ route('branches.edit', $branchesAddress->id) }}">Edit</a></li> --}}
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item text-danger" href="#" onclick="deleteBranch({{ $branchesAddress->id }})">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            @empty
                                                <div class="col-xxl-12 col-lg-12">
                                                    <div class="card card-body text-center border">
                                                        <p class="text-muted">No branches available.</p>
                                                    </div>
                                                </div>
                                            @endforelse
                                        </div>
                                        
                                       
                                        
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
    // $(document).ready(function() {
    //     $('.category-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: '{{ route('admin.duration-hours.index') }}',
    //         columns: [
    //             { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
    //             { data: 'duration_hr', name: 'duration_hr' },
    //             { data: 'created_at', name: 'created_at' },
    //             { data: 'action', name: 'action', orderable: false, searchable: false },
    //         ]
    //     });
    // });



    function deleteBranch(branchId) {
        if (confirm('Are you sure you want to delete this branch?')) {
            // Add your AJAX delete logic here
            $.ajax({
                url: '/branches/' + branchId,
                type: 'DELETE',
                success: function(response) {
                    // Optionally, remove the card from the DOM
                    location.reload(); // Reload the page to refresh the list
                },
                error: function(xhr) {
                    alert('Error deleting branch: ' + xhr.responseText);
                }
            });
        }
    }
    </script>
@endpush 
    
