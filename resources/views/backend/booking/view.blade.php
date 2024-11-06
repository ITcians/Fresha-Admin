@extends('backend.layouts.admin-master')
@section('title','Booking Detail')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Booking Detail</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Booking Detail</a></li>
                                    <li class="breadcrumb-item active">Booking Detail</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                {{-- <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <!-- Card Header -->
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Booking Details for {{ $booking->title }}</h5>
                                <!-- Optional Action Buttons -->
                               
                            </div>
                            
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Basic Info -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Title:</strong> {{ $booking->title }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->start)->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($booking->start)->format('H:i') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>End Time:</strong> {{ \Carbon\Carbon::parse($booking->end)->format('H:i') }}</p>
                                    </div>
                                </div>
                
                                <!-- User Information -->
                                <h6 class="fw-semibold mt-4">User Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong> {{ $booking->user->fname }} {{ $booking->user->lname }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Email:</strong> {{ $booking->user->email }}</p>
                                    </div>
                                </div>
                
                                <!-- Service Information -->
                                <h6 class="fw-semibold mt-4">Services Booked</h6>
                                <div class="row">
                                    @foreach ($booking->services as $service)
                                        <div class="col-md-6">
                                            <p><strong>Service:</strong> {{ $service->service_name }}</p>
                                            <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>
                                            <p><strong>Description:</strong> {{ $service->description }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- End of Card Body -->
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <!-- Card Header -->
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Booking Details for {{ $booking->title }}</h5>
                                <!-- Optional Action Buttons -->
                                <div>
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                            
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- Basic Info -->
                                <h6 class="fw-semibold">Booking Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Title:</strong> {{ $booking->title }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($booking->start)->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Start Time:</strong> {{ \Carbon\Carbon::parse($booking->start)->format('H:i') }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>End Time:</strong> {{ \Carbon\Carbon::parse($booking->end)->format('H:i') }}</p>
                                    </div>
                                </div>
                
                                <!-- User Information -->
                                <h6 class="fw-semibold mt-4">User Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><strong>Name:</strong> {{ $booking->user->fname }} {{ $booking->user->lname }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Email:</strong> {{ $booking->user->email }}</p>
                                    </div>
                                </div>
                
                                <!-- Service Information -->
                                <h6 class="fw-semibold mt-4">Services Booked</h6>
                                <div class="row">
                                    @foreach ($booking->services as $service)
                                        <div class="col-md-6">
                                            <p><strong>Service:</strong> {{ $service->service_name }}</p>
                                            <p><strong>Price:</strong> ${{ number_format($service->price, 2) }}</p>
                                            <p><strong>Description:</strong> {{ $service->description }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div> <!-- End of Card Body -->
                        </div>
                    </div>
                </div>
                
                
                
            </div><!-- container-fluid -->
        </div><!-- End Page-content -->
    </div><!-- end main content -->
        
@endsection


