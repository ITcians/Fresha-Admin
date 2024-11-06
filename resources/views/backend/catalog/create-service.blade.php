@extends('backend.layouts.admin-master')
@section('title','Add Service')
@push('styles')
<style>
 
 .upload-container {
    display: flex;
    flex-direction: column;
    position: relative;
}

input[type="file"] {
    display: none; /* Hide the default file input */
}

.upload-icon {
    width: 150px; /* Adjust the size as needed */
    height: 150px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden; /* Ensure the image fits within the circle */
    background-color: #bad5f1;
    cursor: pointer;
    transition: background-color 0.3s;
}


.upload-icon i {
    font-size: 24px; /* Adjust icon size */
    color: #007bff; /* Change icon color */
    position: absolute; /* Position the icon in the center */
}

.uploaded-img {
    width: 100%; /* Make image fit the container */
    height: 100%;
    object-fit: cover; /* Maintain aspect ratio */
    border-radius: 50%; /* Ensure the image is circular */
    display: none; /* Hide by default */
}

.file-name {
    margin-top: 10px;
    color: #555;
}

.remove-file {
    background: transparent; /* Make the background transparent */
    border: none; /* Remove border */
    color: #dc3545; /* Red color for the cross icon */
    cursor: pointer;
    margin-top: 5px;
    font-size: 18px; /* Adjust size as needed */
    display: inline-flex; /* Align icon properly */
    align-items: center; /* Center icon vertically */
}


.home-address {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background-color: #f9f9f9;
    transition: background-color 0.3s ease;
}

.home-address:hover {
    background-color: #e6e6e6;
}

.home-address span {
    font-size: 24px;
    color: #555;
}

.home-address p {
    margin: 8px 0 0;
    font-weight: bold;
    color: #333;
}
.home-address.selected {
    border-color: #007bff; /* Highlight border */
    background-color: #f0f8ff; /* Light blue background */
}

.home-address {
    border: 2px solid transparent; /* Default border for unselected */
    cursor: pointer;
    transition: border-color 0.3s ease;
}

.home-address.selected {
    border-color: #007bff; /* Highlight the selected option with your preferred color */
    background-color: rgba(0, 123, 255, 0.1); /* Light background color for better visibility */
}

.home-address:hover {
    border-color: #007bff; /* Add a hover effect */
}


.service-item {
    border-radius: 5px; /* Rounded corners for the service item */
}

.service-item:hover {
    background-color: #f8f9fa; /* Light background on hover */
}


.location-icon{
    background: #bad5f1;
    padding: 15px;
    border-radius: 53px;
    margin-right: 10px;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    }

.location-icon i{
    color:#007bff"

}

.filter-button {
    display: inline-flex; /* Make it a flex container */
    align-items: center; /* Center vertically */
    border: 1px solid; /* Border */
    padding: 7px 15px; /* Padding for a better look */
    border-radius: 50px; /* Fully rounded */
    background: #fff; /* Background color */
    text-decoration: none; /* Remove underline from link */
    color: #000; /* Text color */
    transition: background 0.3s; /* Smooth transition for hover */
}

.filter-button:hover {
    background: #f9f9f9; /* Darker background on hover */
}

.add-variant-button {
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
    cursor: pointer; /* Change cursor to pointer */
}

.add-variant-button:hover {
    background-color: #f0f0f0; /* Light gray background on hover */
    color: #007bff; /* Change text color on hover */
    border-color: #007bff; /* Change border color on hover */
}

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
                        <h4 class="mb-sm-0">Service</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Catalog</a></li>
                                <li class="breadcrumb-item active">Add Service</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">New Service
                                <a class="btn btn-danger float-end" href="{{route('admin.catelog.index')}}">Back</a>
                            </h2>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step" method="POST" action="{{route('admin.service.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-lg-4">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Basic details
                                            </button>
                                            <button class="nav-link" id="v-pills-team-members-tab" data-bs-toggle="pill" data-bs-target="#v-pills-team-members" type="button" role="tab" aria-controls="v-pills-team-members" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Team members
                                            </button>
                                            <button class="nav-link" id="v-pills-resources-tab" data-bs-toggle="pill" data-bs-target="#v-pills-resources" type="button" role="tab" aria-controls="v-pills-resources" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Resources
                                            </button>
                                            <hr>
                                            <h4>Settings</h4>
                                            
                                            <button class="nav-link" id="v-pills-commision-tab" data-bs-toggle="pill" data-bs-target="#v-pills-commision" type="button" role="tab" aria-controls="v-pills-commision" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Commision
                                            </button>
                                            <button class="nav-link" id="v-pills-setting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-setting" type="button" role="tab" aria-controls="v-pills-setting" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Setting
                                            </button>
                                            
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->
                                    <div class="col-lg-8">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    <div class="mb-4">
                                                        
                                                        <h3>Basic details</h3>
                                                            <p>
                                                                @if ($errors->any())
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                            <li class="text-danger" >{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                @endif
                                                            </p>
                                                            
                                                    </div>
                                                    
                                                    <div>
                                                        <input type="hidden" name="service_id" value="{{$serviceId}}">
                                                       

                                                        <div class="row g-3">
                                                            <div class="col-sm-12">
                                                                <label for="servicename" class="form-label">Service name</label>
                                                                <input type="text" name="servicename" class="form-control" placeholder="Add a service name, e.g. Men's haircut">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="service_type" class="form-label">Service Type</label>
                                                                <select name="service_type" class="form-select" style="margin-bottom: 20px;">
                                                                    <option value="">Select service type</option>
                                                                    @forelse ($serviceTypes as $service)
                                                                        <option value="{{ $service->id }}" disabled style="font-weight: bold; font-size: 17px;">{{ $service->service_type }}</option>
                                                                        @foreach ($service->subServiceTypes as $subService)
                                                                            <option value="{{ $subService->id }}" style="font-size: 15px;" >{{ $subService->sub_service }}</option>
                                                                        @endforeach
                                                                    @empty
                                                                        <option value="">No service types available</option>
                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Menu category</label>
                                                                <select name="menucategory"  class="form-select">
                                                                    <option value="" disabled selected>Select menu category</option>
                                                                    @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}" style="font-size: 15px;">{{ $category->category }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="col-12">
                                                                <label for="email" class="form-label">Description <span class="text-muted" >(Optional)</span> </label>
                                                                <textarea class="form-control" id="description" rows="6" name="description" placeholder="Add a short description"></textarea>
                                                            </div>
                                                            <p></p>
                                                            <hr>
                                                            <div class="col-12 mt-4">
                                                            <h3>Pricing and duration</h3>

                                                            </div>
                                                            
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Duration</label>
                                                                <select name="duration_hr" class="form-select" id="">
                                                                    <option value=""  >Duration hours</option>
                                                                    @forelse ($durationHours as $durationHour)
                                                                        <option value="{{ $durationHour->duration_hr }}" style="font-size: 15px;">
                                                                            {{ formatDuration($durationHour->duration_hr) }}
                                                                        </option>
                                                                    @empty
                                                                        <option value="">No duration hours available</option>
                                                                    @endforelse
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="priceType" class="form-label">Price type</label>
                                                                <select name="price_type" class="form-select" id="priceType">
                                                                    <option value="fixed">Fixed</option>
                                                                    <option value="free">Free</option>
                                                                    <option value="from">From</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4" id="priceContainer">
                                                                <label for="price" class="form-label">Price</label>
                                                                <input type="text" class="form-control" name="price" id="price" placeholder="USD 0.00">
                                                            </div>
            
                                                            <!-- Add Variant Button -->
                                                            {{-- <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex align-items-center rounded-pill bordered">
                                                                        <button type="button" style="border: 1px solid; border-radius: 40px" class="p-2 mt-2 add-variant-button" data-bs-toggle="modal" data-bs-target="#addVariantModal">+ Add Variant</button>
                                                                    </div>
                                                                </div>
                                                                <h5 class="mb-0 me-2 mt-2 p-2" style="color: #007bff">Advanced Options</h5>
                                                            </div> --}}

                                                            <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex align-items-center rounded-pill bordered">
                                                                        <button type="button" style="border: 1px solid; border-radius: 40px" class="p-2 mt-2 add-variant-button" data-bs-toggle="modal" data-bs-target="#addVariantModal">+ Add Variant</button>
                                                                    </div>
                                                                </div>
                                                                <h5 class="mb-0 me-2 mt-2 p-2 advnce_opt" data-bs-toggle="modal" data-bs-target="#AdvancedOptionsModal" >Advanced Options <span id="advancedOptionsCount" style="display: none;">0</span> </h5>
                                                            </div>
                                                            
                                                            <!-- Container to display added variants -->

                                                                <div id="variantList" class="mt-3"></div>
                                                            

                                                            <p></p>
                                                            <hr>
                                                           

                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h3 class="mb-0 me-2">Extra Time</h3>
                                                                    <span class="badge bg-dark" id="extraTimeBadge">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Automatically add blocked time or processing time after each appointment</p>
                                                            </div>
                                                            <div class="form-check form-switch" style="font-size: x-large">
                                                                <input type="checkbox" name="extra_time" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="extra-time-fields" style="display: none;">
                                                            {{-- <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="price" class="form-label">Type</label>
                                                                    <select name="extra_time_type" class="form-select" id="">
                                                                        <option value="" style="font-size: 15px;" >Select Type</option>
                                                                        <option value="Processing time after" style="font-size: 15px;" > Processing time after </option>
                                                                        <option value=""> <span class="text-muted text-wrap " style="font-size: 10px !important:width: 6rem;">The client remains occupied and the team member becomes available. Included in durations shown to clients.</span> </option>
                                                                        <option value="Processing time before" style="font-size: 15px;" >Processing time before</option>
                                                                        <option value=""> <span class="text-muted text-wrap " style="font-size: 10px !important:width: 6rem;">The client is not present and the team member becomes occupied. Excluded from durations shown to clients.</span> </option>

                                                                    </select>
                                                                </div> --}}
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="extraTimeType" class="form-label">Type</label>
                                                                        <select name="extra_time_type" class="form-select" id="extraTimeType">
                                                                            <option value="">Select Type</option>
                                                                            <option value="processing_time_after" title="The client remains occupied and the team member becomes available. Included in durations shown to clients.">
                                                                                Processing time after
                                                                            </option>
                                                                            <option value="processing_time_before" title="The client is not present and the team member becomes occupied. Excluded from durations shown to clients.">
                                                                                Processing time before
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                
                                                                
                                                                <div class="col-md-6">
                                                                    <label for="duration" class="form-label">Duration</label>
                                                                    <select name="extra_time_duration" class="form-select" id="">
                                                                        <option value=""  >Duration hours</option>
                                                                        @forelse ($durationHours as $durationHour)
                                                                            <option value="{{ $durationHour->duration_hr }}" style="font-size: 15px;" >{{ formatDuration( $durationHour->duration_hr) }}</option>
                                                                        @empty
                                                                        <option value="">No duration hours available</option>
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                      
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-team-members-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Team Member</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-team-members-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade show" id="v-pills-team-members" role="tabpanel" aria-labelledby="v-pills-team-members-tab">
                                                    <div>
                                                        <h3>Team members required</h3>
                                                        <p class="text-muted">Choose which team members will perform this service</p>
                                                    </div>

                                                    <div>
    
                                                        {{-- <div class="row gy-3 mt-4">
                                                            <div class="col-12">
                                                                <!-- Select All Checkbox -->
                                                                <div class="form-check d-flex align-items-center p-4 mb-2">
                                                                    <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.5);">
                                                                    <label class="form-check-label" for="selectAll" style="margin-left: 10px"> All team members</label>
                                                                </div>
                                                               
                                                                <h4>Team members</h4>
                                                        
                                                                <div class="col-md-12">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div class="user-list">
                                                                                @forelse($teamMembers as $member)
                                                                                    <div class="user-item" style="display: flex; align-items: center; margin:10px;padding:10px">
                                                                                        <input class="form-check-input me-3" type="checkbox" id="member{{ $member->id }}" style="transform: scale(1.5);" value="{{ $member->id }}">
                                                        
                                                                                        <div class="user-icon" style="display: flex; align-items: center;">
                                                                                            <img src="{{ $member->image ?? '' }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                            <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                {{ strtoupper(substr($member->fname, 0, 1)) }}
                                                                                            </div>
                                                                                        </div>
                                                                                        <span style="margin-left: 10px;">{{ $member->fname }} {{ $member->lname }}</span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    @empty
                                                                                    <div>
                                                                                        <p>No Team memebr is available</p>
                                                                                    </div>
                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        
                                                            <div class="row gy-3 mt-4">
                                                                <div class="col-12">
                                                                    <div class="form-check d-flex align-items-center p-4 mb-2">
                                                                        <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.5);">
                                                                        <label class="form-check-label" for="selectAll" style="margin-left: 10px"> All team members</label>
                                                                    </div>
                                                        
                                                                    <h4>Team members</h4>
                                                        
                                                                    <div class="col-md-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <div class="user-list">
                                                                                    @forelse($teamMembers as $member)
                                                                                        <div class="user-item" style="display: flex; align-items: center; margin:10px;padding:10px">
                                                                                            <input class="form-check-input me-3" type="checkbox" name="member_ids[]" id="member{{ $member->id }}" style="transform: scale(1.5);" value="{{ $member->id }}">
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <img src="{{ $member->image ?? '' }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    {{ strtoupper(substr($member->fname, 0, 1)) }}
                                                                                                </div>
                                                                                            </div>
                                                                                            <span style="margin-left: 10px;">{{ $member->fname }} {{ $member->lname }}</span>
                                                                                        </div>
                                                                                        <hr>
                                                                                    @empty
                                                                                        <div>
                                                                                            <p>No team member is available</p>
                                                                                        </div>
                                                                                    @endforelse
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Basic info</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue</button> --}}

                                                        {{-- <button type="button" class="btn btn-light previestab" onclick="changeTab('v-pills-bill-info-tab')">Back to Basic Info</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" onclick="changeTab('v-pills-resources-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-resources" role="tabpanel" aria-labelledby="v-pills-resources-tab">
                                                    <div>
                                                        {{-- <div class="row gy-3">
                                                            <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex align-items-center">
                                                                        <h3 class="mb-0 me-2">Resources required

                                                                        </h3>
                                                                        <span class="badge bg-dark">Off</span>
                                                                    </div>
                                                                    <p class="text-muted mb-0" style="font-size: 14px;">Require specific resources when performing this service</p>
                                                                </div>
                                                                <div class="form-check form-switch" style="font-size: x-large">
                                                                    <input type="checkbox" class="form-check-input" id="customSwitchsizelg">
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                        <div class="row gy-3">
                                                            <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                                <div class="d-flex flex-column">
                                                                    <div class="d-flex align-items-center">
                                                                        <h3 class="mb-0 me-2">Resources required</h3>
                                                                        <span id="resourceSwitchBadge" class="badge bg-dark">Off</span>
                                                                    </div>
                                                                    <p class="text-muted mb-0" style="font-size: 14px;">Require specific resources when performing this service</p>
                                                                </div>
                                                                <div class="form-check form-switch" style="font-size: x-large">
                                                                    <input type="checkbox" class="form-check-input" id="resourceSwitch">
                                                                </div>
                                                            </div>
                                                            

                                                            <div class="col-12" id="resourcesSection" style="display: none;">
                                                                <h4 class="mt-3">Added Resources</h4>
                                                                <ul id="resourceList" class="list-group">
                                                                    <!-- Resources will be added here dynamically -->
                                                                </ul>
                                                            </div>
                                                            
                                                            

                                                            <!-- Add Resource Button -->
                                                            <div class="col-12 text-center p-5 d-flex justify-content-center">
                                                                <button type="button" id="addResourceButton" class="add-rsc-btn" data-bs-toggle="modal" data-bs-target="#ResourceModal" style="display: none;">+ Add Resource</button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-team-members-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Team members</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Continue</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" onclick="changeTab('v-pills-commision-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                

                                                <div class="tab-pane fade" id="v-pills-commision" role="tabpanel" aria-labelledby="v-pills-commision-tab">
                                                    <div class="row gy-3">
                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h4 class="mb-0 me-2">Team member commission

                                                                    </h4>
                                                                    <span class="badge bg-success" id="ShowTeamMemberBadge">On</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 12px;">Calculate team member commission when the service is sold</p>
                                                            </div>
                                                            <div class="form-check form-switch" style="font-size: x-large">
                                                                <input type="checkbox" class="form-check-input" id="ShowTeamMemberSwitch" checked>
                                                            </div>
                                                        </div>
                                                        <div id="contentSection">
                                                            <div class="col-md-12 bg-light p-3 pill-rounded" style="background: #d3d3d3">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <form action="">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                                                <input type="search" class="form-control" name="search" placeholder="Search">
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="filters">
                                                                            <a href="" class="filter-button"><i class="ri-sound-module-line" ></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 d-flex align-items-center justify-content-center" style="margin-top: 50px;">
                                                                <div class="text-center">
                                                                    <h3>No team member found</h3>
                                                                    <p>Try adjusting your search criteria</p>
                                                                    <div class="col-12 text-center p-5 d-flex justify-content-center">
                                                                        <button type="button" id="showAllTeamMember" class="add-rsc-btn" data-bs-toggle="modal" data-bs-target="#showAllTeamMemberModal">Show All</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-forms-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Resources</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Continue</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                        onclick="changeTab('v-pills-setting-tab')">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                </button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-setting-tab">
                                                    

                                                    <div class="row gy-3">
                                                        <h3>Settings</h3>
                                                       
                                                        <div class="col-md-12">
                                                            <div class="form-check d-flex align-items-center p-4">
                                                                <input class="form-check-input" type="checkbox" style="transform: scale(1.8);" name="patch_test">
                                                                <label class="form-check-label" style="margin-left: 10px; margin-top:11px"> Require patch test <br>
                                                                <span class="text-muted font-size:10px" >Show a patch test requirement when creating appointments with this service. </span>
                                                                    
                                                                </label> 
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <h3>Notifications</h3>
                                                        <div class="col-md-12" style="margin-left: 13px">
                                                            <div class="form-check d-flex align-items-center p-2">
                                                                <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.8);" onchange="toggleTextarea(this)">
                                                                <label class="form-check-label" style="margin-left: 10px; margin-top:11px">
                                                                    Aftercare instructions <br>
                                                                    <span class="text-muted font-size:10px">Provide aftercare instructions to clients in thank you notifications</span>
                                                                </label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-md-12">

                                                        <textarea id="aftercareTextarea" name="after_care_description" class="form-control" style="display: none;" rows="4" placeholder="Enter your aftercare instructions..."></textarea>
                                                        </div>


                                                            {{-- <div class="col-md-12" style="margin-left: 13px">
                                                                <div class="form-check d-flex align-items-center p-2">
                                                                    <input class="form-check-input" type="checkbox" style="transform: scale(1.8);" onchange="ToggleRebookNotifications(this)">
                                                                    <label class="form-check-label" style="margin-left: 10px; margin-top:11px"> Reminder to rebook notifications <br>
                                                                    <span class="text-muted font-size:10px" >Provide aftercare instructions to clients in thank you notifications</span>
                                                                    </label> 
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="col-sm-12">
                                                                    <input type="number" class="form-control" name="days" placeholder="4" value="4">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <select name="days_after" class="form-select" id="">
                                                                    <option value="" >Weeks after</option>
                                                                    <option value="" >Days after</option>
                                                                </select>
                                                            </div> --}}

                                                            <div class="col-md-12" style="margin-left: 13px">
                                                                <div class="form-check d-flex align-items-center p-2">
                                                                    <input class="form-check-input" type="checkbox" style="transform: scale(1.8);" onchange="toggleRebookNotifications(this)">
                                                                    <label class="form-check-label" style="margin-left: 10px; margin-top:11px">
                                                                        Reminder to rebook notifications <br>
                                                                        <span class="text-muted font-size:10px">Provide aftercare instructions to clients in thank you notifications</span>
                                                                    </label> 
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row" id="rebookFields" style="display: none;">
                                                                <div class="col-md-6">
                                                                    <div class="col-sm-12">
                                                                        <input type="number" class="form-control" name="notification_reminder_days" placeholder="4" value="4">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <select name="notification_reminder_after" class="form-select">
                                                                        <option value="week_after">Weeks after</option>
                                                                        <option value="days_after">Days after</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <hr>
                                                        <h3 class="mt-3">Advance settings</h3>

                                                        <div class="col-md-12 mb-3 mt-3">
                                                            <label for="sales_tax" class="form-label">Sales tax <span class="text-muted"> (Included in price)</span></label>
                                                            <select name="sales_tax" id="" class="form-select">
                                                                <option value="no_tax">No tax</option>
                                                            </select>
                                                            <span class="text-muted" style="font-size: 10px" >Configure sales tax settings for each of your locations</span>
                                                        </div>

                                                        {{-- <div class="col-md-12 mb-3">
                                                            <label for="cost_of_service" class="form-label">Cost of service</label>
                                                            <input type="number" class="form-control" name="cost_of_service" placeholder="Use location defaults">
                                                            <span class="text-muted" style="font-size: 10px" >Set the cost to your business for delivering this service</span>
                                                        </div> --}}

                                                        {{-- <div class="col-md-12 mb-3">
                                                            <label for="cost_of_service" class="form-label">Cost of service</label>
                                                            <div class="input-group">
                                                                <input type="number" id="cost_of_service" class="form-control" name="cost_of_service" placeholder="Use location defaults">
                                                                <div class="input-group-text radio-option" onclick="setServiceCostType('fixed')">
                                                                    <input type="radio" name="service_cost" value="fixed" checked style="display: none;">
                                                                    <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                                </div>
                                                                <div class="input-group-text radio-option" onclick="setServiceCostType('percentage')">
                                                                    <input type="radio" name="service_cost" value="percentage" style="display: none;">
                                                                    <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted" style="font-size: 10px">Set the cost to your business for delivering this service</span>
                                                        </div> --}}

                                                        {{-- <div class="col-md-12 mb-3">
                                                            <label for="cost_of_service" class="form-label">Cost of service</label>
                                                            <div class="input-group">
                                                                <input type="number" id="cost_of_service" class="form-control" name="cost_of_service" placeholder="Use location defaults">
                                                                <div class="input-group-text radio-option" onclick="setServiceCostType('fixed')">
                                                                    <input type="radio" name="service_cost" value="fixed" checked style="display: none;">
                                                                    <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                                </div>
                                                                <div class="input-group-text radio-option" onclick="setServiceCostType('percentage')">
                                                                    <input type="radio" name="service_cost" value="percentage" style="display: none;">
                                                                    <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                                </div>
                                                            </div>
                                                            <span class="text-muted" style="font-size: 10px">Set the cost to your business for delivering this service</span>
                                                        </div> --}}
                                                        
                                                        
                                                        
                                                        {{-- <script>
                                                        function setServiceCostType(type) {
                                                            const costInput = document.getElementById('cost_of_service');
                                                            
                                                            if (type === 'percentage') {
                                                                costInput.placeholder = "percentage %";
                                                                costInput.value = ""; // Optionally clear the input
                                                            } else {
                                                                costInput.placeholder = "USD 0.00";
                                                                costInput.value = ""; // Optionally clear the input
                                                            }
                                                        }
                                                        </script> --}}

                                                        {{-- <style>
                                                            .input-group-text {
                                                                transition: background-color 0.3s ease;
                                                                cursor: pointer; /* Change cursor to pointer */
                                                            }
                                                            
                                                            .input-group-text.radio-option.active {
                                                                background-color: white; /* Background color when checked */
                                                            }
                                                            
                                                            .input-group-text.radio-option:hover {
                                                                background-color: #f8f9fa; /* Background color on hover */
                                                            }
                                                            </style>
                                                            
                                                            <div class="col-md-12 mb-3">
                                                                <label for="cost_of_service" class="form-label">Cost of service</label>
                                                                <div class="input-group">
                                                                    <input type="number" id="cost_of_service" class="form-control" name="cost_of_service" placeholder="Use location defaults">
                                                                    <div class="input-group-text radio-option" onclick="setServiceCostType('fixed', this)">
                                                                        <input type="radio" name="service_cost" value="fixed" checked style="display: none;">
                                                                        <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                                    </div>
                                                                    <div class="input-group-text radio-option" onclick="setServiceCostType('percentage', this)">
                                                                        <input type="radio" name="service_cost" value="percentage" style="display: none;">
                                                                        <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                                    </div>
                                                                </div>
                                                                <span class="text-muted" style="font-size: 10px">Set the cost to your business for delivering this service</span>
                                                            </div>
                                                            
                                                            <script>
                                                            function setServiceCostType(type, element) {
                                                                const radioButtons = document.querySelectorAll('input[name="service_cost"]');
                                                                const inputGroupText = document.querySelectorAll('.radio-option');
                                                            
                                                                // Uncheck all radio buttons and remove active class
                                                                radioButtons.forEach((radio) => {
                                                                    radio.checked = false;
                                                                });
                                                                inputGroupText.forEach((group) => {
                                                                    group.classList.remove('active');
                                                                });
                                                            
                                                                // Check the selected radio button and add active class to the clicked element
                                                                const selectedRadio = element.querySelector('input[type="radio"]');
                                                                selectedRadio.checked = true;
                                                                element.classList.add('active');
                                                            
                                                                // Update input placeholder based on selection
                                                                const costInput = document.getElementById('cost_of_service');
                                                                if (type === 'percentage') {
                                                                    costInput.placeholder = "Enter percentage (e.g., 20)";
                                                                } else {
                                                                    costInput.placeholder = "Use location defaults";
                                                                }
                                                            }
                                                        </script> --}}

                                                        
                                                            
                                                            <div class="col-md-12 mb-3">
                                                                <label for="cost_of_service" class="form-label">Cost of service</label>
                                                                <div class="input-group">
                                                                    <input type="number" id="cost_of_service" class="form-control" name="service_cost" placeholder="UDS 0.00">
                                                                    <div class="input-group-text radio-option active" onclick="setServiceCostType('fixed', this)">
                                                                        <input type="radio" name="service_cost_type" value="fixed" checked style="display: none;">
                                                                        <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                                    </div>
                                                                    <div class="input-group-text radio-option" onclick="setServiceCostType('percentage', this)">
                                                                        <input type="radio" name="service_cost_type" value="percentage" style="display: none;">
                                                                        <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                                    </div>
                                                                </div>
                                                                <span class="text-muted" style="font-size: 10px">Set the cost to your business for delivering this service</span>
                                                            </div>
                                                           

                                                        <div class="col-md-12">
                                                            <label for="service_sku" class="form-label">SKU</label>
                                                            <input type="text" class="form-control" name="service_sku" placeholder="ABC-12345-H-SH">
                                                            <span class="text-muted" style="font-size: 10px" >Assign a SKU to help identify this service in reports and exports</span>
                                                        </div>

                                                        <div class="d-flex align-items-start gap-3 mt-4">
                                                            <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-commision-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Commision</button>
                                                            <button type="submit" class="btn btn-success right ms-auto"> Finish</button>
                                                            {{-- <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                                onclick="changeTab('v-pills-finish-tab')">
                                                                <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Finish
                                                        </button> --}}
                                                        </div>


                                                    </div>
                                                    
                                                    
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
                                                    <div class="text-center pt-4 pb-2">

                                                        <div class="mb-4">
                                                            <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>
                                                        </div>
                                                        <h5>Service Added Successfully !</h5>
                                                        {{-- <p class="text-muted">You Will receive an order confirmation email with details of your order.</p> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end tab content -->
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                    <!-- end -->
                </div>
                <!-- end col -->
            </div>
        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content -->



{{-- add varient modal --}}


<div id="addVariantModal" class="modal fade" tabindex="-1" aria-labelledby="addVariantModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVariantModalLabel">Add Variant</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="variantName" class="form-label">Variant Name</label>
                        <input type="text" class="form-control" id="variantName" placeholder="Enter Variant Name">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="variantDescription" class="form-label">Variant Description</label>
                        <input type="text" class="form-control" id="variantDescription" placeholder="Enter Variant Description">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <select id="durationSelect" class="form-select">
                            <option value="">Duration hours</option>
                            @forelse ($durationHours as $durationHour)
                                <option value="{{ $durationHour->duration_hr }}">{{ $durationHour->duration_hr }}</option>
                            @empty
                                <option value="">No duration hours available</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="priceType" class="form-label">Price Type</label>
                        <select name="price_type" class="form-select" id="priceTypes">
                            <option value="variation_fixed">Fixed</option>
                            <option value="variation_free">Free</option>
                            <option value="variation__from">From</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="variation_free" placeholder="USD 0.00">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="sku" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="sku" placeholder="Enter SKU">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveVariantButton">Save</button>
            </div>
        </div>
    </div>
</div>

{{-- /////////////// advanced options modal --}}


<div id="AdvancedOptionsModal" class="modal fade" tabindex="-1" aria-labelledby="AdvancedOptionsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AdvancedOptionsModalLabel">Advanced pricing and duration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <span class="text-muted tm-span mx-3">Set specific pricing by location and team member.</span>
            <div class="modal-body">
                <div class="card card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Team Members</th>
                                <th>Duration</th>
                                <th>Price Type</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teamMembers as $member)
                                @foreach($member->teamLocations as $location)
                                    <tr data-location-id="{{ $location->id }}" data-user-id="{{ $member->id }}">
                                        <td>
                                            {{ $location->branch->branch_name }}
                                            <br>
                                            {{ $location->branch->branch_address }}
                                        </td>
                                        <td>
                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                <img src="{{ $member->image_path }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                    {{ strtoupper(substr($member->fname, 0, 1)) }}
                                                </div>
                                            </div>
                                            <span>{{ $member->fname }} {{ $member->lname }}</span>
                                        </td>
                                        <td>
                                            <select name="duration_hr" class="form-select">
                                                <option value="">Duration hours</option>
                                                @forelse ($durationHours as $durationHour)
                                                    <option value="{{ $durationHour->duration_hr }}">{{ $durationHour->duration_hr }}</option>
                                                @empty
                                                    <option value="">No duration hours available</option>
                                                @endforelse
                                            </select>
                                        </td>
                                        <td>
                                            <select name="price_type" class="form-select" id="AdvOptpriceTypes{{ $loop->parent->index }}{{ $loop->index }}">
                                                <option value="adv_opt_fixed" selected>Fixed (Default)</option>
                                                <option value="adv_opt_free">Free</option>
                                                <option value="adv_opt_from">From</option>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="AdvOptpriceInput{{ $loop->parent->index }}{{ $loop->index }}" name="adv_opt_price_type_free" placeholder="USD 0.00">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveAdvOpt">Save</button>
            </div>
        </div>
    </div>
</div>


{{-- ////////////// resource modal --}}

{{-- <div id="ResourceModal" class="modal fade" tabindex="-1" aria-labelledby="ResourceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ResourceModalLabel">Add resource</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="variantName" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="e.g Message room">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="variantDescription" class="form-label">Description <span class="text-muted" >(Optional)</span> </label>
                        <textarea class="form-control" rows="5" placeholder="Enter Description"></textarea>
                    </div>
                    
                </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark">Save</button>
            </div>
        </div>
    </div>
</div> --}}


<div id="ResourceModal" class="modal fade" tabindex="-1" aria-labelledby="ResourceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ResourceModalLabel">Add Resource</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <input type="hidden" id="serviceId" value="{{ $serviceId }}"> <!-- Hidden field -->
                    <div class="col-md-12 mb-3">
                        <label for="resourceName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="resourceName" placeholder="e.g. Message room">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="resourceDescription" class="form-label">Description <span class="text-muted">(Optional)</span></label>
                        <textarea class="form-control" id="resourceDescription" rows="5" placeholder="Enter Description"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark" id="saveResourceButton">Save</button>
            </div>
        </div>
    </div>
</div>


{{-- ///////////show all team members set commissions --}}



<div id="showAllTeamMemberModal" class="modal fade" tabindex="-1" aria-labelledby="showAllTeamMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showAllTeamMemberModalLabel">Team member commission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Team Members</th>
                                <th>Commission Rate</th>
                                <th>Commission Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teamMembers as $member)
                                <tr data-user-id="{{ $member->id }}" data-service-id="{{ $serviceId }}">
                                    <td>
                                        <div class="user-icon" style="display: flex; align-items: center;">
                                            <img src="{{ $member->image_path }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                            <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                {{ strtoupper(substr($member->fname, 0, 1)) }}
                                            </div>
                                        </div>
                                        <span>{{ $member->fname }} {{ $member->lname }}</span>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <select name="commission_rate" class="form-select" id="CommissionRate{{ $loop->index }}" onchange="toggleCommissionInput(this, {{ $loop->index }})">
                                                <option value="no_commission" selected>No Commission</option>
                                                <option value="fixed">Fixed (custom)</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">

                                            {{-- <div class="input-group" id="commissionInputGroup{{ $loop->index }}" style="display: none;">
                                                <input type="text" class="form-control commission-input" id="CommissionInput{{ $loop->index }}" name="commission_value" placeholder="USD 0.00" style="display: block;">
                                                <div class="input-group-text" id="fixedIcon{{ $loop->index }}" onclick="selectCommissionType('fixed', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="fixed" checked style="display: none;">
                                                    <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                </div>
                                                <div class="input-group-text" id="percentageIcon{{ $loop->index }}" onclick="selectCommissionType('percentage', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="percentage" style="display: none;">
                                                    <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                </div>
                                            </div> --}}

                                            {{-- <div class="input-group" id="commissionInputGroup{{ $loop->index }}" style="display: none;">
                                                <input type="text" class="form-control commission-input" id="CommissionInput{{ $loop->index }}" name="commission_value" placeholder="USD 0.00" style="display: block;">
                                                
                                                <div class="input-group-text" id="fixedIcon{{ $loop->index }}" onclick="selectCommissionType('fixed', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="fixed" checked style="display: none;" onchange="updateInputType(this, {{ $loop->index }})">
                                                    <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                </div>
                                                
                                                <div class="input-group-text" id="percentageIcon{{ $loop->index }}" onclick="selectCommissionType('percentage', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="percentage" style="display: none;" onchange="updateInputType(this, {{ $loop->index }})">
                                                    <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                </div>
                                            </div> --}}


                                            <div class="input-group" id="commissionInputGroup{{ $loop->index }}" style="display: none;">
                                                <input type="text" class="form-control commission-input" id="CommissionInput{{ $loop->index }}" name="commission_value" placeholder="USD 0.00" style="display: block;">
                                            
                                                <div class="input-group-text" id="fixedIcon{{ $loop->index }}" onclick="selectCommissionType('fixed', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="fixed" checked style="display: none;">
                                                    <i class="ri-coin-fill" style="cursor: pointer;"></i>
                                                </div>
                                            
                                                <div class="input-group-text" id="percentageIcon{{ $loop->index }}" onclick="selectCommissionType('percentage', {{ $loop->index }})">
                                                    <input type="radio" name="commission_type{{ $loop->index }}" value="percentage" style="display: none;">
                                                    <i class="ri-percent-line" style="cursor: pointer;"></i>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveCommissionData()">Save</button>
            </div>
        </div>
    </div>
</div>








@endsection
<script>
    const serviceId = {{ $serviceId }};
</script>

@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>

<script>
 ///////// user icon

document.querySelectorAll('.user-icon').forEach(icon => {
    const name = icon.nextElementSibling.textContent; // Get the name from the span
    const firstLetter = name.charAt(0).toUpperCase(); // Get the first letter
    icon.querySelector('.placeholder').textContent = firstLetter; // Set it to the placeholder
});




///////////checkbox for address

document.getElementById('selectAll').addEventListener('change', function() {
    const checked = this.checked;
    document.querySelectorAll('.form-check-input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.checked = checked;
    });
});


///////////////////// nexttab tabs code 

function changeTab(tabId) {
        var tabTrigger = new bootstrap.Tab(document.getElementById(tabId));
        tabTrigger.show();
    }


   /////////////// extra time off filds code in basic info
$(document).ready(function() {
    // Hide fields by default
    $('.extra-time-fields').hide();

    // Toggle visibility when checkbox state changes
    $('#customSwitchsizelg').change(function() {
        if ($(this).is(':checked')) {
                $('.extra-time-fields').slideDown(); // Show the fields with animation
                $('#extraTimeBadge').text('On').removeClass('bg-dark').addClass('bg-success'); // Change badge to On and bg-success
            } else {
                $('.extra-time-fields').slideUp(); // Hide the fields with animation
                $('#extraTimeBadge').text('Off').removeClass('bg-success').addClass('bg-dark'); // Change badge back to Off and bg-dark
            }
    });
});




//////////// disable the price input when free is selected 

document.getElementById('priceType').addEventListener('change', function() {
    const priceInput = document.getElementById('priceContainer');

    if (this.value === 'free') {
        priceInput.style.display = 'none'; // Hide the price input if "Free" is selected
    } else {
        priceInput.style.display = 'block'; // Show the price input for other options
    }
});


//////////// disable the price input when free is selected in advance option modal

document.querySelectorAll('select[name="price_type"]').forEach((dropdown, index) => {
    dropdown.addEventListener('change', function() {
        const priceInput = document.getElementById(`AdvOptpriceInput${dropdown.id.match(/\d+/)[0]}`);

        if (this.value === 'adv_opt_free') {
            priceInput.value = ''; // Clear the input value
            priceInput.disabled = true; // Disable input
        } else {
            priceInput.disabled = false; // Enable input for other options
        }
    });
});



// Handle price type change when free is selected in variant modal
document.getElementById('priceTypes').addEventListener('change', function() {
    const priceInput = document.getElementById('variation_free');
    if (this.value === 'variation_free') {
        priceInput.style.display = 'none'; // Hide the price input
        priceInput.value = ''; // Clear the value when "Free" is selected
    } else {
        priceInput.style.display = 'block'; // Show the price input for other options
    }
});

// Save variant button click event
// document.getElementById('saveVariantButton').addEventListener('click', function() {
//     const variantName = document.getElementById('variantName').value;
//     const duration = document.getElementById('durationSelect').value;
//     const priceType = document.getElementById('priceTypes').value;
//     const priceInput = document.getElementById('variation_free');
//     const price = priceType === 'variation_free' ? 'Free' : parseFloat(priceInput.value).toLocaleString('en-US', { style: 'currency', currency: 'USD' });
//     const sku = document.getElementById('sku').value; // Optional SKU

//     // Create a new card to display the variant
//     const variantCard = document.createElement('div');
//     variantCard.className = 'card col-md-12 mb-3';
//     variantCard.innerHTML = `
//         <div class="card-body">
//             <div class="table-card">
//                 <table class="table table-hover table-centered align-middle table-nowrap mb-0">
//                     <tbody>
//                         <tr>
//                             <td>
//                                 <div class="d-flex align-items-center">
//                                     <div>
//                                         <h5 class="mt-2 mx-2">${variantName}</h5>
//                                         <h5 class="mx-2 fs-14 my-1 text-muted">${duration}</h5>
//                                     </div>
//                                 </div>
//                             </td>
//                             <td>
//                                 <h4 class="float-end">${price}</h4>
//                             </td>
//                             <td>
//                                 <div class="dropdown float-end">
//                                     <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
//                                         <i class="ri-more-2-fill"></i>
//                                     </button>
//                                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
//                                         <li><a class="dropdown-item" href="#">Edit</a></li>
//                                         <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
//                                     </ul>
//                                 </div>
//                             </td>
//                         </tr>
//                     </tbody>
//                 </table>
//             </div>
//         </div><!-- end card-body -->
//     `;

//     // Append the new card to the variant list
//     document.getElementById('variantList').appendChild(variantCard);

//     // Close the modal
//     const modal = bootstrap.Modal.getInstance(document.getElementById('addVariantModal'));
//     modal.hide();

//     // Clear the inputs in the modal
//     document.getElementById('variantName').value = '';
//     document.getElementById('durationSelect').value = '';
//     document.getElementById('priceTypes').value = 'variation_fixed';
//     document.getElementById('priceTypes').value = 'variation_fixed';
//     priceInput.value = '';
//     priceInput.style.display = 'block'; // Reset display style
// });



document.getElementById('saveVariantButton').addEventListener('click', function() {
    const variantName = document.getElementById('variantName').value;
    const variantDescription = document.getElementById('variantDescription').value; // Get variant description
    const duration = document.getElementById('durationSelect').value;
    const priceType = document.getElementById('priceTypes').value;
    const priceInput = document.getElementById('variation_free');
    const price = priceType === 'variation_free' ? 'Free' : parseFloat(priceInput.value).toLocaleString('en-US', { style: 'currency', currency: 'USD' });
    const sku = document.getElementById('sku').value;

    // Prepare data to send
    const data = {
        serviceId: "{{$serviceId}}",
        variantName: variantName,
        variantDescription: variantDescription, // Add variant description
        duration: duration,
        priceType: priceType,
        price: price,
        sku: sku,
    };

    // Send AJAX request
    fetch('/store-variant', { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token for Laravel
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
        // Check if the save was successful
        if (data.success) {
            // Create a new card to display the variant
            const variantCard = document.createElement('div');
            variantCard.className = 'card col-md-12 mb-3';
            variantCard.innerHTML = `
                <div class="card-body">
                    <div class="table-card">
                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <h5 class="mt-2 mx-2">${variantName}</h5>
                                                <h5 class="mx-2 fs-14 my-1 text-muted">${duration} hours</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h4 class="float-end">${price}</h4>
                                    </td>
                                    <td>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                                <i class="ri-more-2-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card-body -->
            `;

            // Append the new card to the variant list
            document.getElementById('variantList').appendChild(variantCard);

            // Close the modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('addVariantModal'));
            modal.hide();

            // Clear the inputs in the modal
            document.getElementById('variantName').value = '';
            document.getElementById('variantDescription').value = ''; // Clear variant description
            document.getElementById('durationSelect').value = '';
            document.getElementById('priceTypes').value = 'variation_fixed';
            priceInput.value = '';
            priceInput.style.display = 'block'; // Reset display style
        } else {
            alert('Error saving variant: ' + data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('There was an error saving the variant.');
    });
});




/////////////////// save advance options data code 


document.getElementById('saveAdvOpt').addEventListener('click', function() {
    const dataToSend = [];

    document.querySelectorAll('tbody tr').forEach((row) => {
        const duration = row.querySelector('select[name="duration_hr"]').value;
        const priceType = row.querySelector('select[name="price_type"]').value;
        const priceInput = row.querySelector(`input[id^="AdvOptpriceInput"]`).value;

        // Get the location_id and user_id from the row or hidden fields
        const locationId = row.getAttribute('data-location-id'); // Assuming you set this attribute
        const userId = row.getAttribute('data-user-id'); // Assuming you set this attribute

        dataToSend.push({
            service_id: '{{ $serviceId }}',
            location_id: locationId, // Capture location ID
            user_id: userId, // Capture user ID
            duration: duration,
            price_type: priceType,
            price: priceType === 'adv_opt_free' ? 'Free' : priceInput
        });

            const durations = row.querySelector('select[name="duration_hr"]').value = '';
            const priceTypes = row.querySelector('select[name="price_type"]').value = '';
            const priceInputs = row.querySelector(`input[id^="AdvOptpriceInput"]`).value = '';
    });

    fetch('/store-advance-options', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(dataToSend)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // alert('Data saved successfully!');
            const countElement = document.getElementById('advancedOptionsCount');
            const currentCount = parseInt(countElement.innerText) || 0;

            // Show the count element if it's the first addition
            if (currentCount === 0) {
                countElement.style.display = 'inline'; // Show the counter
            }

            // Update the counter
            countElement.innerText = currentCount + 1;
            
            $('#AdvancedOptionsModal').modal('hide');
        } else {
            alert('Error saving data: ' + data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});


///////////// add resource code 

document.getElementById('resourceSwitch').addEventListener('change', function() {
    const addResourceButton = document.getElementById('addResourceButton');
    const badge = document.getElementById('resourceSwitchBadge');

    if (this.checked) {
        addResourceButton.style.display = 'block'; // Show the button
        badge.textContent = 'On'; // Change badge text to 'On'
        badge.classList.remove('bg-dark'); // Optionally change the badge color
        badge.classList.add('bg-success'); // Change to green for 'On'
    } else {
        addResourceButton.style.display = 'none'; // Hide the button
        badge.textContent = 'Off'; // Change badge text to 'Off'
        badge.classList.remove('bg-success'); // Optionally change back to dark
        badge.classList.add('bg-dark'); // Change back to original color
    }
});



///////////////// save resouce to database code


document.getElementById('saveResourceButton').addEventListener('click', function() {
    const serviceId = document.getElementById('serviceId').value;
    const name = document.getElementById('resourceName').value;
    const description = document.getElementById('resourceDescription').value;

    fetch('/store-resource', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ serviceId, name, description })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            $('#ResourceModal').modal('hide');
            updateResourceList(data.resource); // Use the returned resource
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));
});



// document.addEventListener('DOMContentLoaded', function() {
//     fetch(`/get-resources/${serviceId}`)
//         .then(response => response.json())
//         .then(resources => {
//             resources.forEach(resource => {
//                 updateResourceList(resource);
//             });
//         });
// });


function updateResourceList(resource) {
    const resourceList = document.getElementById('resourceList');
    
    // Create a list item
    const listItem = document.createElement('li');
    listItem.className = 'list-group-item';

    // Create a div for the resource content
    const resourceContent = document.createElement('div');

    // Create an h5 for the resource name
    const resourceName = document.createElement('h5');
    resourceName.className = 'mb-1'; // Margin bottom
    resourceName.textContent = resource.name;

    // Create a span for the resource description
    const resourceDescription = document.createElement('span');
    resourceDescription.className = 'text-muted'; // Muted text style
    resourceDescription.textContent = resource.description || 'No description';

    // Append the name and description to the content div
    resourceContent.appendChild(resourceName);
    resourceContent.appendChild(resourceDescription);
    
    // Append the content div to the list item
    listItem.appendChild(resourceContent);
    
    // Append the list item to the resource list
    resourceList.appendChild(listItem);
    
    // Show the resources section if it has items
    if (resourceList.children.length > 0) {
        document.getElementById('resourcesSection').style.display = 'block';
    }
}





////////////// show team member switch condition code

document.getElementById('ShowTeamMemberSwitch').addEventListener('change', function() {
    const contentSection = document.getElementById('contentSection');
    const badge = document.getElementById('ShowTeamMemberBadge');

    if (this.checked) {
        contentSection.style.display = 'block'; // Show the button
        badge.textContent = 'On'; // Change badge text to 'On'
        badge.classList.remove('bg-dark'); // Optionally change the badge color
        badge.classList.add('bg-success'); // Change to green for 'On'
    } else {
        contentSection.style.display = 'none'; // Hide the button
        badge.textContent = 'Off'; // Change badge text to 'Off'
        badge.classList.remove('bg-success'); // Optionally change back to dark
        badge.classList.add('bg-dark'); // Change back to original color
    }
});



// function toggleCommissionInput(selectElement, index) {
//     const commissionInputGroup = document.getElementById(`commissionInputGroup${index}`);
    
//     // Show/hide the input group based on the selected option
//     if (selectElement.value === 'fixed') {
//         commissionInputGroup.style.display = 'flex';
//         selectCommissionType('fixed', index); // Set default to fixed
//     } else {
//         commissionInputGroup.style.display = 'none';
//     }
// }

// function selectCommissionType(type, index) {
//     const commissionInput = document.getElementById(`CommissionInput${index}`);
//     const fixedIcon = document.getElementById(`fixedIcon${index}`);
//     const percentageIcon = document.getElementById(`percentageIcon${index}`);

//     // Update the placeholder and input type based on selection
//     if (type === 'fixed') {
//         commissionInput.placeholder = 'USD 0.00';
//         commissionInput.type = 'text'; // Fixed type
//         fixedIcon.classList.add('active');
//         percentageIcon.classList.remove('active');
//     } else if (type === 'percentage') {
//         commissionInput.placeholder = 'Percentage %';
//         commissionInput.type = 'number'; // Percentage type
//         percentageIcon.classList.add('active');
//         fixedIcon.classList.remove('active');
//     }
// }

// function updateInputType(radio, index) {
//     selectCommissionType(radio.value, index); // Call to update the input based on selection
// }


function toggleCommissionInput(selectElement, index) {
    const commissionInputGroup = document.getElementById(`commissionInputGroup${index}`);
    
    // Show/hide the input group based on the selected option
    if (selectElement.value === 'fixed') {
        commissionInputGroup.style.display = 'flex';
        selectCommissionType('fixed', index); // Set default to fixed
    } else {
        commissionInputGroup.style.display = 'none';
    }
}

// function selectCommissionType(type, index) {
//     const commissionInput = document.getElementById(`CommissionInput${index}`);
//     const fixedIcon = document.getElementById(`fixedIcon${index}`);
//     const percentageIcon = document.getElementById(`percentageIcon${index}`);

//     // Update the placeholder and input type based on selection
//     if (type === 'fixed') {
//         commissionInput.placeholder = 'USD 0.00';
//         commissionInput.type = 'text'; // Fixed type
//         fixedIcon.classList.add('active');
//         percentageIcon.classList.remove('active');
//     } else if (type === 'percentage') {
//         commissionInput.placeholder = 'Percentage %';
//         commissionInput.type = 'number'; // Percentage type
//         percentageIcon.classList.add('active');
//         fixedIcon.classList.remove('active');
//     }
// }

function selectCommissionType(type, index) {
    const commissionInput = document.getElementById(`CommissionInput${index}`);
    const fixedIcon = document.getElementById(`fixedIcon${index}`);
    const percentageIcon = document.getElementById(`percentageIcon${index}`);


    // Update the placeholder and input type based on selection
    if (type === 'fixed') {
        commissionInput.placeholder = 'USD 0.00';
        commissionInput.type = 'text'; // Fixed type
        fixedIcon.querySelector('input[type="radio"]').checked = true; // Select the radio button
        fixedIcon.classList.add('active');
        percentageIcon.classList.remove('active');
    } else if (type === 'percentage') {
        commissionInput.placeholder = 'Percentage %';
        commissionInput.type = 'number'; // Percentage type
        percentageIcon.querySelector('input[type="radio"]').checked = true; // Select the radio button
        percentageIcon.classList.add('active');
        fixedIcon.classList.remove('active');
    }
}


// Add this function to handle radio button changes
function updateInputType(radio, index) {
    selectCommissionType(radio.value, index); // Call to update the input based on selection
}







// function saveCommissionData() {
//     const serviceId = {{ $serviceId }};
//     const commissionData = [];

//     console.log(serviceId);

//     // Loop through each team member row
//     document.querySelectorAll('tr[data-user-id]').forEach((row) => {
//         const userId = row.dataset.userId;

//         // Get the commission rate
//         const commissionRateSelect = row.querySelector('select[name="commission_rate"]');
//         const commissionRate = commissionRateSelect ? commissionRateSelect.value : null;

//         let commissionValue = '';
//         let commissionType = '';

//         // Check if the commission rate select was found
//         if (!commissionRateSelect) {
//             console.error(`Commission rate select not found for user ID: ${userId}`);
//             return; // Skip this user if no select
//         }

//         // Get the commission input value
//         const commissionInput = row.querySelector('input[name="commission_value"]');
//         if (commissionRate === 'fixed' && commissionInput) {
//             commissionValue = commissionInput.value;
//         }

//         const index = Array.from(row.parentNode.children).indexOf(row); // Get the index of the current row
//         const commissionTypeInput = row.querySelector(`input[name='commission_type${index}']:checked`);
//         console.log(commissionTypeInput)
//         if (commissionRate === 'fixed') {
//             if (commissionTypeInput) {
//                 commissionType = commissionTypeInput.value;
//             } else {
//                 console.error(`No commission type selected for user ID: ${userId}`);
//                 return; // Skip this user if there's no commission type
//             }
//         } else if (commissionRate === 'no_commission') {
//             commissionType = 'no_commission';
//         }

//          if (commissionRate === 'fixed') {
//             if (commissionTypeInput) {
//                 commissionType = commissionTypeInput.value;
//             } else {
//                 console.error(`No commission type selected for user ID: ${userId}`);
//                 return; // Skip this user if there's no commission type
//             }
//         } else if (commissionRate === 'no_commission') {
//             commissionType = 'no_commission';
//         }

//         // Ensure that we have a valid commission type before pushing to the array
//         if (commissionType) {
//             commissionData.push({
//                 user_id: userId,
//                 service_id: serviceId,
//                 commission_rate: commissionRate,
//                 commission_value: commissionValue,
//                 commission_type: commissionType
//             });
//         }
//     });

//     // Send the data using AJAX if there are commissions to save
//     if (commissionData.length > 0) {
//         fetch('/store-commission', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
//             },
//             body: JSON.stringify(commissionData)
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 alert('Commission data saved successfully!');
//             } else {
//                 alert('Error saving data: ' + data.message);
//             }
//         })
//         .catch(error => console.error('Error:', error));
//     } else {
//         alert('No commission data to save.');
//     }
// }




// function saveCommissionData() {
//     const serviceId = {{ $serviceId }};
//     const commissionData = [];

//     // Loop through each team member row
//     document.querySelectorAll('tr[data-user-id]').forEach((row) => {
//         const userId = row.dataset.userId;

//         // Get the commission rate
//         const commissionRateSelect = row.querySelector('select[name="commission_rate"]');
//         const commissionRate = commissionRateSelect ? commissionRateSelect.value : null;

//         let commissionValue = '';
//         let commissionType = '';

//         // Check if the commission rate select was found
//         if (!commissionRateSelect) {
//             console.error(`Commission rate select not found for user ID: ${userId}`);
//             return; // Skip this user if no select
//         }

//         // Get the commission input value
//         const commissionInput = row.querySelector('input[name="commission_value"]');
//         if (commissionRate === 'fixed' && commissionInput) {
//             commissionValue = commissionInput.value;
//         }

//         // Adjusted selection for the commission type based on the loop index
//         const index = Array.from(row.parentNode.children).indexOf(row); // Get the index of the current row
//         const commissionTypeInput = row.querySelector(`input[name='commission_type${index}']:checked`);

//         if (commissionTypeInput) {
//             commissionType = commissionTypeInput.value;
//             console.log(`User ID: ${userId}, Commission Type: ${commissionType}`); // Debugging log
//         } else if (commissionRate === 'no_commission') {
//             commissionType = 'no_commission';
//         } else {
//             console.error(`No commission type selected for user ID: ${userId}`);
//             return; // Skip this user if there's no commission type
//         }

//         // Ensure that we have a valid commission type before pushing to the array
//         if (commissionType) {
//             commissionData.push({
//                 user_id: userId,
//                 service_id: serviceId,
//                 commission_rate: commissionRate,
//                 commission_value: commissionValue,
//                 commission_type: commissionType
//             });
//         }
//     });

//     // Send the data using AJAX if there are commissions to save
//     if (commissionData.length > 0) {
//         fetch('/store-commission', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
//             },
//             body: JSON.stringify(commissionData)
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 alert('Commission data saved successfully!');
//                 $('#showAllTeamMemberModal').modal('hide');
//             } else {
//                 alert('Error saving data: ' + data.message);
//             }
//         })
//         .catch(error => console.error('Error:', error));
//     } else {
//         alert('No commission data to save.');
//     }
// }


function saveCommissionData() {
    const serviceId = {{ $serviceId }};
    const commissionData = [];

    // Loop through each team member row
    document.querySelectorAll('tr[data-user-id]').forEach((row) => {
        const userId = row.dataset.userId;

        // Get the commission rate
        const commissionRateSelect = row.querySelector('select[name="commission_rate"]');
        const commissionRate = commissionRateSelect ? commissionRateSelect.value : null;

        let commissionValue = '';
        let commissionType = null; // Initialize commissionType to null

        // Check if the commission rate select was found
        if (!commissionRateSelect) {
            console.error(`Commission rate select not found for user ID: ${userId}`);
            return; // Skip this user if no select
        }

        // Get the commission input value
        const commissionInput = row.querySelector('input[name="commission_value"]');
        if (commissionRate === 'fixed' && commissionInput) {
            commissionValue = commissionInput.value;
        }

        // Adjusted selection for the commission type based on the loop index
        const index = Array.from(row.parentNode.children).indexOf(row); // Get the index of the current row
        const commissionTypeInput = row.querySelector(`input[name='commission_type${index}']:checked`);

        if (commissionRate === 'no_commission') {
            commissionType = null; // Set to null for no commission
        } else if (commissionTypeInput) {
            commissionType = commissionTypeInput.value;
            console.log(`User ID: ${userId}, Commission Type: ${commissionType}`); // Debugging log
        } else {
            console.error(`No commission type selected for user ID: ${userId}`);
            return; // Skip this user if there's no commission type
        }

        // Ensure that we have a valid commission type before pushing to the array
        commissionData.push({
            user_id: userId,
            service_id: serviceId,
            commission_rate: commissionRate,
            commission_value: commissionValue,
            commission_type: commissionType // This will now be null if no commission is selected
        });
    });

    // Send the data using AJAX if there are commissions to save
    if (commissionData.length > 0) {
        fetch('/store-commission', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
            },
            body: JSON.stringify(commissionData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Commission data saved successfully!');
                $('#showAllTeamMemberModal').modal('hide');
            } else {
                alert('Error saving data: ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
    } else {
        alert('No commission data to save.');
    }
}



/////////// after care open description
function toggleTextarea(checkbox) {
    const textarea = document.getElementById('aftercareTextarea');
    if (checkbox.checked) {
        textarea.style.display = 'block'; // Show textarea
    } else {
        textarea.style.display = 'none'; // Hide textarea
    }
}



function toggleRebookNotifications(checkbox) {
    const rebookFields = document.getElementById('rebookFields');
    if (checkbox.checked) {
        rebookFields.style.display = 'flex'; // Show fields
    } else {
        rebookFields.style.display = 'none'; // Hide fields
    }
}



//////////cost of service code 

function setServiceCostType(type, element) {
    const radioButtons = document.querySelectorAll('input[name="service_cost"]');
    const inputGroupText = document.querySelectorAll('.radio-option');

    // Uncheck all radio buttons and remove active class
    radioButtons.forEach((radio) => {
        radio.checked = false;
    });
    inputGroupText.forEach((group) => {
        group.classList.remove('active');
    });

    // Check the selected radio button and add active class to the clicked element
    const selectedRadio = element.querySelector('input[type="radio"]');
    selectedRadio.checked = true;
    element.classList.add('active');

    // Update input placeholder based on selection
    const costInput = document.getElementById('cost_of_service');
    if (type === 'percentage') {
        costInput.placeholder = "percentage %";
    } else {
        costInput.placeholder = "USD 0.00";
    }
}


</script>
    
@endpush