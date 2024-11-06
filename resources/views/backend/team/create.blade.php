@extends('backend.layouts.admin-master')
@section('title','Add Team Member')
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


.form-check-input {
    font-size: 25px;
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
                        <h4 class="mb-sm-0">Teams</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Teams</a></li>
                                <li class="breadcrumb-item active">Add Team Member</li>
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
                            <h2 class="mb-0">Add team member
                                <a class="btn btn-danger float-end" href="{{route('admin.team.index')}}">Back</a>
                            </h2>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step" method="POST" action="{{route('admin.team.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-xl-4">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Profile
                                            </button>
                                            <button class="nav-link" id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Addresses
                                            </button>
                                            <button class="nav-link" id="v-pills-emergency-contacts-tab" data-bs-toggle="pill" data-bs-target="#v-pills-emergency-contacts" type="button" role="tab" aria-controls="v-pills-emergency-contacts" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Emergency Contacts
                                            </button>
                                            <hr>
                                            <h4>Workspace</h4>
                                            <button class="nav-link" id="v-pills-services-tab" data-bs-toggle="pill" data-bs-target="#v-pills-services" type="button" role="tab" aria-controls="v-pills-services" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Services
                                            </button>
                                            <button class="nav-link" id="v-pills-location-tab" data-bs-toggle="pill" data-bs-target="#v-pills-location" type="button" role="tab" aria-controls="v-pills-location" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Location
                                            </button>
                                            <button class="nav-link" id="v-pills-setting-tab" data-bs-toggle="pill" data-bs-target="#v-pills-setting" type="button" role="tab" aria-controls="v-pills-setting" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Setting
                                            </button>
                                            <hr>
                                            <h4>Pay</h4>
                                            <button class="nav-link" id="v-pills-commissions-tab" data-bs-toggle="pill" data-bs-target="#v-pills-commissions" type="button" role="tab" aria-controls="v-pills-commissions" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Commissions
                                            </button>
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->
                                    <div class="col-xl-8">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div>
                                                        <h5>Profile</h5>
                                                        <p>Manage your team members personal profile</p>
                                                        <p>
                                                            @if ($errors->any())
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                        <li class="text-danger" >{{ $error }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </p>
                                                        <div class="upload-container">
                                                            <input type="file" id="file-upload" name="image" accept="image/*" onchange="handleFileUpload(event)" />
                                                            <label for="file-upload" class="upload-icon">
                                                                <img id="uploaded-image" src="" alt="Uploaded Image" class="uploaded-img" />
                                                                <i class="ri-camera-fill"></i>
                                                            </label>
                                                            <span id="file-name" class="file-name"></span>
                                                            <button type="button" id="remove-file" class="remove-file" style="display: none;" onclick="removeFile()">
                                                                <i class="ri-close-line"></i> <!-- Cross icon -->
                                                            </button>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <label for="fname" class="form-label">First name</label>
                                                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" value="{{old('fname')}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lname" class="form-label">Last name</label>
                                                                <input type="text" class="form-control" name="lname" id="lastName" placeholder="Enter Last Name" value="{{old('lname')}}">
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="basicemail" class="form-label">Email</label>
                                                                <div class="">
                                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" name="phone_code">
                                                                    {{-- <option value="" disabled selected>+1</option> --}}
                                                                    @foreach($phoneCodes as $code)
                                                                        <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" name="phone" placeholder="1234567890" value="{{old('phone')}}">
                                                            </div>

                                                            {{-- <div class="col-6">
                                                                <label for="email" class="form-label">Birth <span class="text-muted">(Optional)</span></label>
                                                                <input type="date" class="form-control" id="email" placeholder="Enter Email">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Year <span class="text-muted">(Optional)</span></label>
                                                                <input type="date" class="form-control" id="email" placeholder="Enter Email">
                                                            </div> --}}
                                                            {{-- <div class="col-6">
                                                                <label for="email" class="form-label">Date of birth</label>
                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                    <input type="text" name="dob" id="event-start-date"  class="form-control flatpickr flatpickr-input" placeholder="Select date"  required>
                                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Date of birth</label>
                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                    <input type="date" name="dob" class="form-control" >
                                                                    {{-- <span class="input-group-text"><i class="ri-calendar-event-line"></i></span> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Country</label>
                                                                   <select name="country" id="" class="form-select" >
                                                                    <option value="" disabled >Select Country</option>
                                                                    @foreach($countries as $country)
                                                                     <option value="{{ $country->country }}">{{ $country->country }}</option>
                                                                     @endforeach
                                                                   </select>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="email" class="form-label">Job Title</label>
                                                                <input type="text" name="job_title" class="form-control" placeholder="Visible to client online" value="{{old('job_title')}}">
                                                            </div>
                                                            <p></p>
                                                            <hr>
                                                            <div class="col-12 mt-4">
                                                            <h3>Employment details</h3>

                                                              <p>Manage your team members start date, and employment details</p>
                                                            </div>
                                                            {{-- <div class="col-6">
                                                                <label for="email" class="form-label">Start Date</label>
                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                    <input type="text"  id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date"  required>
                                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Start Date</label>
                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                    <input type="date"  name="start_date" class="form-control"  >
                                                                    {{-- <span class="input-group-text"><i class="ri-calendar-event-line"></i></span> --}}
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">End Date</label>
                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                    <input type="date" name="end_date" class="form-control" >
                                                                    {{-- <span class="input-group-text"><i class="ri-calendar-event-line"></i></span> --}}
                                                                </div>   
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="phone" class="form-label">Employment type</label>
                                                                <select name="employment_type" class="form-select" id="">
                                                                    <option value="" @readonly(true) >Select an option</option>
                                                                    <option value="Employee" >Employee</option>
                                                                    <option value="Self-employed" >Self-employed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="phone" class="form-label">Team Member ID</label>
                                                                <input type="text" class="form-control" name="team_member_id" placeholder="Team Member ID" value="{{old('team_member_id')}}">
                                                                <span class="text-muted" style="font-size:11px; ">An identifier used for external systems like payroll</span>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="phone" class="form-label">Notes</label>
                                                                <textarea class="form-control" id="note" name="note" rows="6" placeholder="Add a private note only viewable in the team member list">{{old('note')}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-bill-address-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade show" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                    <div>
                                                        <h5>Addresses</h5>
                                                        <p class="text-muted">Manage your client’s addresses</p>
                                                    </div>

                                                    <div>
                                                        <h5 type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#exampleModalgrid">
                                                        + Add New Address
                                                        </h5>

                                                        <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalgridLabel">New Address</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="d-flex justify-content-between gap-3 align-items-center">
                                                                            <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Home')">
                                                                                <span><i class="ri-home-line"></i></span>
                                                                                <p>Home</p>
                                                                            </div>
                                                                            <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Work')">
                                                                                <span><i class="ri-briefcase-4-fill"></i></span>
                                                                                <p>Work</p>
                                                                            </div>
                                                                            <div class="home-address text-center border rounded py-3 flex-fill" onclick="selectAddressType('Other')">
                                                                                <span><i class="ri-more-fill"></i></span>
                                                                                <p>Other</p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mt-3">
                                                                            <label for="selectedAddressTypeModal" class="form-label">Selected Address Type</label>
                                                                            <input type="text" class="form-control" id="selectedAddressTypeModal" value="Home" readonly>
                                                                        </div>

                                                                        <div class="d-flex justify-content-end mt-3">
                                                                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Close</button>
                                                                            <button type="button" class="btn btn-primary" id="submitAddressType">Submit</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-4 d-none" id="addressFields">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label for="selectedAddressType" class="form-label">Selected Address Type</label>
                                                                    <input type="text" class="form-control" id="selectedAddressType" placeholder="Selected Address Type" readonly>
                                                                </div>
                                                                
                                                                <div class="col-12">
                                                                    <label for="address" class="form-label">Address</label>
                                                                    <input type="text" name="address" class="form-control"  placeholder="1234 Main St">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="address2" class="form-label">Apt/Suite<span class="text-muted">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="apt_suit"  placeholder="Apartment or suite">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="district" class="form-label">District<span class="text-muted">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="district" placeholder="District">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="city" class="form-label">City<span class="text-muted">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="city"  placeholder="City">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="region" class="form-label">Region<span class="text-muted">(Optional)</span></label>
                                                                    <input type="text" class="form-control" name="region"  placeholder="Region">
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="state" class="form-label">Postcode</label>
                                                                    <input type="text" class="form-control" name="postcode"  placeholder="Postcode">
                                                                    
                                                                </div>
                                                                <div class="col-6">
                                                                    <label for="country" class="form-label">Country</label>
                                                                    <select class="form-select" >
                                                                        <option value="">Choose...</option>
                                                                        @foreach($countries as $country)
                                                                        <option value="{{ $country->country }}">{{ $country->country }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-profile-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to profile</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-emergency-contacts-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                        onclick="changeTab('v-pills-emergency-contacts-tab')">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-emergency-contacts" role="tabpanel" aria-labelledby="v-pills-emergency-contacts-tab">
                                                    <div>
                                                        <h5>Emergency contacts</h5>
                                                        <p class="text-muted">Manage your client’s emergency contacts.</p>
                                                    </div>

                                                    <div>
                                                        <div class="row gy-3">
                                                            <div class="col-sm-6">
                                                                <label for="firstName" class="form-label">Full name</label>
                                                                <input type="text" class="form-control" name="emergency_fullname" placeholder="Enter Full Name" value="">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Relationship</label>
                                                                <input type="text" class="form-control" name="emergency_relationship"  placeholder="Enter Relationship" value="">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="emergency_email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="emergency_email" placeholder="Enter Emergency Email">
                                                                
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" name="emergency_phone_code">
                                                                    @foreach($phoneCodes as $code)
                                                                    <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" name="emergency_phone" placeholder="1234567890">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Address</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Settings</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-services-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                

                                                <div class="tab-pane fade" id="v-pills-services" role="tabpanel" aria-labelledby="v-pills-services-tab">
                                                    <div>
                                                        <h5>Services</h5>
                                                        <p class="text-muted">Choose the services this team member provides.</p>
                                                    </div>

                                                    <div>
                                                        <div class="row gy-3">
                                                            <!-- Search Bar -->
                                                            <div class="col-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                                    <input type="search" class="form-control" name="search" placeholder="Search Service">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        {{-- <div class="row gy-3 mt-4">
                                                            <div class="col-12">
                                                                <!-- Select All Checkbox -->
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="selectAll" style="transform: scale(1.5);">
                                                                    <label class="form-check-label" for="selectAll">Select All</label>
                                                                </div>
                                                                
                                                                <!-- Service Items with Checkboxes -->
                                                                <div class="service-item d-flex justify-content-between align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input" type="checkbox" id="service1" style="transform: scale(1.5);">
                                                                    <label class="form-check-label me-auto" for="service1">Hair and Styling</label>
                                                                    <span>PKR 12</span>
                                                                </div>
                                                                <div class="service-item d-flex justify-content-between align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input" type="checkbox" id="service2" style="transform: scale(1.5);">
                                                                    <label class="form-check-label me-auto" for="service2">Facial</label>
                                                                    <span>PKR 12</span>
                                                                </div>
                                                                <div class="service-item d-flex justify-content-between align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input" type="checkbox" id="service3" style="transform: scale(1.5);">
                                                                    <label class="form-check-label me-auto" for="service3">Haircut</label>
                                                                    <span>PKR 12</span>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        {{-- <div class="row gy-3 mt-4">
                                                            <div class="col-12">
                                                                <!-- Select All Checkbox -->
                                                                <div class="form-check mb-4 ml-2" style="margin-left: 21px;">
                                                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                                                    <label class="form-check-label" for="selectAll" style="font-size: 16px;margin-top: 6px;" >Select All</label>
                                                                </div>
                                                                
                                                                <!-- Service Items with Checkboxes -->
                                                                <div class="service-item d-flex align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input me-3" type="checkbox" id="service1">
                                                                    <label class="form-check-label" for="service1">Hair and Styling</label>
                                                                    <span class="ms-auto">PKR 12</span>
                                                                </div>
                                                                <div class="service-item d-flex align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input me-3" type="checkbox" id="service2">
                                                                    <label class="form-check-label" for="service2">Facial</label>
                                                                    <span class="ms-auto">PKR 12</span>
                                                                </div>
                                                                <div class="service-item d-flex align-items-center border p-4 mb-2">
                                                                    <input class="form-check-input me-3" type="checkbox" id="service3">
                                                                    <label class="form-check-label" for="service3">Haircut</label>
                                                                    <span class="ms-auto">PKR 12</span>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        <div class="row gy-3 mt-4">
                                                            <div class="col-12">
                                                                <!-- Select All Checkbox -->
                                                                <div class="form-check mb-4 ml-2" style="margin-left: 21px;">
                                                                    <input class="form-check-input" type="checkbox" id="selectAll">
                                                                    <label class="form-check-label" for="selectAll" style="font-size: 16px; margin-top: 6px;">Select All</label>
                                                                </div>
                                                                
                                                                <!-- Service Items with Checkboxes -->
                                                                {{-- @forelse($servicesses as $service)
                                                                    <div class="service-item d-flex align-items-center border p-4 mb-2">
                                                                        <input class="form-check-input me-3" type="checkbox"  id="service{{ $service->id }}">
                                                                        <label class="form-check-label" for="service{{ $service->id }}">{{ $service->service_name }}</label>
                                                                        <span class="ms-auto">$ {{ $service->price }}</span>
                                                                    </div>
                                                                    @empty
                                                                    <div>
                                                                        <p>No Services available</p>
                                                                    </div>
                                                                @endforelse --}}

                                                                @forelse($servicesses as $service)
                                                                    <div class="service-item d-flex align-items-center border p-4 mb-2">
                                                                        <input class="form-check-input me-3" type="checkbox" name="service_ids[]" value="{{ $service->id }}" id="service{{ $service->id }}">
                                                                        <label class="form-check-label" for="service{{ $service->id }}">{{ $service->service_name }}</label>
                                                                        <span class="ms-auto">$ {{ $service->price }}</span>
                                                                    </div>
                                                                @empty
                                                                    <div>
                                                                        <p>No Services available</p>
                                                                    </div>
                                                                @endforelse
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-emergency-contacts-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Emergency Contact</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-location-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Location</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-location-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-location" role="tabpanel" aria-labelledby="v-pills-location-tab">
                                                    <div>
                                                        <h5>Works at</h5>
                                                        <p class="text-muted">Choose the locations where this team member works.</p>
                                                    </div>

                                                    <div>
                                                        <div class="row gy-3">
                                                            @foreach($branchAddresses as $address)
                                                                <div class="col-12">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" name="branch_location_id" value="{{ $address->id }}" id="address{{ $address->id }}">
                                                                        <label class="form-check-label" for="address{{ $address->id }}">
                                                                            {{ $address->branch_name }}
                                                                        </label>
                                                                        
                                                                        <p>{{ $address->branch_address }}</p>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-services-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Services</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-location-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Settings</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                        onclick="changeTab('v-pills-setting-tab')">
                                                    <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->

                                                <div class="tab-pane fade" id="v-pills-setting" role="tabpanel" aria-labelledby="v-pills-setting-tab">
                                                    {{-- <div class="text-center pt-4 pb-2">
                                                        <div>
                                                            <h5>Notifications</h5>
                                                            <p class="text-muted">Choose how you'd like to keep this client up to date..</p>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input" id="same-address">
                                                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                                                        </div>
                                                    </div> --}}

                                                    <div class="row gy-3">
                                                        <div>
                                                            <h3>Appointment settings</h3>
                                                            <p class="text-muted" style="font-size: 16px">Choose if this team member is bookable on the calendar.</p>
                                                        </div>
                                                        

                                                        <div class="form-check mb-2">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label" for="same-address" style="font-size: 18px">Allow calendar bookings</label> <br>
                                                            <span class="text-muted" style="font-size: 15px" >Allow this team member to receive bookings on the calendar</span>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <h3>Permission level</h3>
                                                            <span class="text-muted" style="font-size: 15px" >Choose the access level this team member has to the workspace</span>
                                                            
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select class="form-select">
                                                                <option value="low">Low</option>
                                                                <option value="basic">Basic</option>
                                                                <option value="medium">Medium</option>
                                                                <option value="high">High</option>
                                                                <!-- Add more country options as needed -->
                                                            </select>
                                                        </div>

                                                        

                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-location-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Location</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-commissions-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Commision</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-commissions-tab')">
                                                            <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="v-pills-commissions" role="tabpanel" aria-labelledby="v-pills-commissions-tab">
                                                    

                                                    <div class="row gy-3">
                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h4 class="mb-0 me-2">Services Commission</h4>
                                                                    <span class="badge bg-secondary">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Commission earned on services provided. Learn more</p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h4 class="mb-0 me-2">Products commission

                                                                    </h4>
                                                                    <span class="badge bg-secondary">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Commission earned on products sold. Learn more</p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h4 class="mb-0 me-2">Memberships commission

                                                                    </h4>
                                                                    <span class="badge bg-secondary">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Commission earned on memberships sold. Learn more</p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex justify-content-between align-items-start mt-3 mb-3">
                                                            <div class="d-flex flex-column">
                                                                <div class="d-flex align-items-center">
                                                                    <h4 class="mb-0 me-2">Gift cards commission

                                                                    </h4>
                                                                    <span class="badge bg-secondary">Off</span>
                                                                </div>
                                                                <p class="text-muted mb-0" style="font-size: 14px;">Commission earned on gift cards sold. Learn more</p>
                                                            </div>
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="customSwitchsizelg">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-setting-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Services</button>
                                                        <button type="submit" class="btn btn-success right ms-auto"> Finish</button>
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

@endsection

@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>
    


<script>
 function handleFileUpload(event) {
    const fileInput = event.target;
    const fileName = document.getElementById('file-name');
    const removeButton = document.getElementById('remove-file');
    const uploadedImage = document.getElementById('uploaded-image');

    if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        fileName.textContent = file.name;

        const reader = new FileReader();
        reader.onload = function(e) {
            uploadedImage.src = e.target.result;
            uploadedImage.style.display = 'block'; // Show the image
        };
        reader.readAsDataURL(file);

        removeButton.style.display = 'inline-flex'; // Show remove button
    }
}

function removeFile() {
    const fileInput = document.getElementById('file-upload');
    const fileName = document.getElementById('file-name');
    const removeButton = document.getElementById('remove-file');
    const uploadedImage = document.getElementById('uploaded-image');

    fileInput.value = ''; // Clear the input
    fileName.textContent = ''; // Clear the file name display
    uploadedImage.src = ''; // Clear the image display
    uploadedImage.style.display = 'none'; // Hide the image
    removeButton.style.display = 'none'; // Hide the remove button
}



///////// address modal

let selectedAddressType = 'Home'; // Default selection

// Function to set the selected address type
function selectAddressType(addressType) {
    selectedAddressType = addressType;
    document.getElementById('selectedAddressTypeModal').value = addressType; // Update modal input
}

// Function to open the modal
function openModal() {
    // Show the modal and set the default value for the selected address type when it opens
    const modalElement = document.getElementById('exampleModalgrid');
    const modalInstance = new bootstrap.Modal(modalElement);
    document.getElementById('selectedAddressTypeModal').value = selectedAddressType; // Ensure this updates the modal input
    modalInstance.show();
}


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('submitAddressType').addEventListener('click', function () {
        // Ensure the input field exists before setting its value
        const selectedAddressInput = document.getElementById('selectedAddressType');
        if (selectedAddressInput) {
            selectedAddressInput.value = selectedAddressType; // Set the selected address type
        }
        
        // Show the address fields
        document.getElementById('addressFields').classList.remove('d-none');

        // Close the modal programmatically
        const modalElement = document.getElementById('exampleModalgrid');
        const modalInstance = bootstrap.Modal.getInstance(modalElement);
        modalInstance.hide();
    });
});


// document.addEventListener('DOMContentLoaded', function () {
//     document.getElementById('submitAddressType').addEventListener('click', function () {
//         // Ensure the input field exists before setting its value
//         const selectedAddressInput = document.getElementById('selectedAddressType');
//         if (selectedAddressInput) {
//             selectedAddressInput.value = selectedAddressType;
//         }
//         // Show the address fields
//         document.getElementById('addressFields').classList.remove('d-none');

//         // Close the modal programmatically
//         const modalElement = document.getElementById('exampleModalgrid');
//         const modalInstance = bootstrap.Modal.getInstance(modalElement);
//         modalInstance.hide();
//     });
// });

// Handle submission of the selected address type
// document.getElementById('submitAddressType').addEventListener('click', function () {
//     // Update the main form input field with the selected address type
//     document.getElementById('selectedAddressType').value = selectedAddressType; 

//     // Show the address fields
//     document.getElementById('addressFields').classList.remove('d-none');

//     // Close the modal programmatically
//     const modalElement = document.getElementById('exampleModalgrid');
//     const modalInstance = bootstrap.Modal.getInstance(modalElement);
//     modalInstance.hide();
// });









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


</script>
@endpush