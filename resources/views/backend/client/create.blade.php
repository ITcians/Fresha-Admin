   
@extends('backend.layouts.admin-master')
@section('title','Create Client')
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/backend/libs/filepond/filepond.min.css')}}" type="text/css" />
    <style>
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


/* /////upload image code//////// */

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


.form-check-input {
    font-size: 20px;
    margin-left: 10px;
    margin-top: -3px;
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
                        <h4 class="mb-sm-0">Create Client</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                                <li class="breadcrumb-item active">Create Client</li>
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
                            <h4 class="card-title mb-0">Manage your client’s personal profile</h4>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step" method="POST" action="{{route('admin.client.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-xl-4">
                                        <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
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
                                            <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Emergency Contacts
                                            </button>
                                            <hr>
                                            <button class="nav-link" id="v-pills-finish-tab" data-bs-toggle="pill" data-bs-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">
                                                <span class="step-title me-2">
                                                    <i class="ri-close-circle-fill step-icon me-2"></i>
                                                </span>
                                                Setting
                                            </button>
                                        </div>
                                        <!-- end nav -->
                                    </div> <!-- end col-->
                                    <div class="col-xl-8">
                                        <div class="px-lg-4">
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                    <div>
                                                        <h4>Profile</h4>
                                                        <p class="text-muted">Manage your client’s personal profile</p>
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
                                                    <div class="upload-container">
                                                        <input type="file" id="file-upload" name="image" accept="image/*" onchange="handleFileUpload(event)" />
                                                        <label for="file-upload" class="upload-icon">
                                                            <img id="uploaded-image" src="" alt="Uploaded Image" class="uploaded-img" />
                                                            <i class="ri-user-line"></i>
                                                        </label>
                                                        <span id="file-name" class="file-name"></span>
                                                        <button type="button" id="remove-file" class="remove-file" style="display: none;" onclick="removeFile()">
                                                            <i class="ri-close-line"></i> <!-- Cross icon -->
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <div class="row g-3">
                                                            <input type="hidden" name="redirect_to" value="{{ request('redirect_to') }}">
                                                            <div class="col-sm-6">
                                                                <label for="fname" class="form-label">First name</label>
                                                                <input type="text" class="form-control" name="fname" placeholder="Enter First Name" value="{{old('fname')}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="lastName" class="form-label">Last name</label>
                                                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" value="{{old('lname')}}">
                                                            </div>

                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Email</label>
                                                                <div class="">
                                                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{old('email')}}">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="country-code" class="form-label"> Code</label>
                                                                <select class="form-select" name="country_code">
                                                                    @foreach($phoneCodes as $code)
                                                                        <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" name="phone" placeholder="1234567890" value="{{old('phone')}}">
                                                            </div>

                                                            <div class="col-12">
                                                                <label for="email" class="form-label">Birth of Birth</label>
                                                                <input type="date" class="form-control" name="dob" >
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="gender" class="form-label">Gender</label>
                                                               <select name="gender" id="" class="form-select">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="non_binary">Non-binary</option>
                                                                <option value="prefer_not_to_say">Prefer not to say</option>
                                                               </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Pronouns</label>
                                                               <select name="pronouns" id="" class="form-select">
                                                                <option value="she_her">She/Her</option>
                                                                <option value="he_him">He/Him</option>
                                                                <option value="they_them">They/Them</option>
                                                                <option value="prefer_not_to_say">Prefer not to say</option>
                                                               </select>
                                                            </div>
                                                            <p></p>
                                                            <hr>
                                                            <h3>Additional info </h3>
                                                            <p>Manage your client’s info.</p>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Preferred language</label>
                                                               <select name="preferred_language" id="" class="form-select">
                                                                <option value="english">English</option>
                                                                <option value="spanish">Spanish</option>
                                                                <option value="italian">Italian</option>
                                                                <option value="french">French</option>
                                                               </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Client Source</label>
                                                               <select name="client_source" id="" class="form-select">
                                                                <option value="walk-in">Walk-in</option>
                                                               </select>
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Occupation</label>
                                                               <input type="text" name="occupation" class="form-control" placeholder="Enter client job information" value="{{old('occupation')}}">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="email" class="form-label">Country</label>
                                                               <select name="country" id="" class="form-select">
                                                                @foreach($countries as $country)
                                                                        <option value="{{ $country->country }}">{{ $country->country }}</option>
                                                                        @endforeach
                                                               </select>
                                                            </div>
                                                            <p></p>
                                                            <hr>
                                                            <div class="col-6">
                                                                <label for="additional_email" class="form-label">Additional email</label>
                                                               <input type="email" name="additional_email" class="form-control" placeholder="Enter additional email" value="{{old('additional_email')}}">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label for="additional_phone_country_code" class="form-label"> Code</label>
                                                                <select class="form-select" name="additional_country_code">
                                                                    @foreach($phoneCodes as $code)
                                                                        <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="additional_phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" name="additional_phone" placeholder="1234567890" value="{{old('additional_phone')}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Addresses</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-bill-address-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade show" id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                    <div>
                                                        <h4>Addresses</h4>
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

                                                            {{-- <div class="mt-4" >
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="selectedAddressType" class="form-label">Selected Address Type</label>
                                                                        <input type="text" class="form-control" id="selectedAddressType" placeholder="Selected Address Type" readonly>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="address2" class="form-label">Apt/Suite<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="district" class="form-label">District<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="district" placeholder="District">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="city" class="form-label">City<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="city" placeholder="City">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="region" class="form-label">Region<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" id="region" placeholder="Region">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="state" class="form-label">Postcode</label>
                                                                        <select class="form-select" id="state">
                                                                            <option value="">Choose...</option>
                                                                            <option>California</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select class="form-select" id="country">
                                                                            <option value="">Choose...</option>
                                                                            <option>United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <div class="mt-4 d-none" id="addressFields">
                                                                <div class="row g-3">
                                                                    <div class="col-12">
                                                                        <label for="selectedAddressType" class="form-label">Selected Address Type</label>
                                                                        <input type="text" class="form-control" name="address_type" id="selectedAddressType" placeholder="Selected Address Type" readonly>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label for="address" class="form-label">Address</label>
                                                                        <input type="text" class="form-control" name="address" placeholder="1234 Main St" value="{{old('address')}}">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="apt_suite" class="form-label">Apt/Suite</label>
                                                                        <input type="text" class="form-control" name="apt_suite" placeholder="Apartment or suite" value="{{old('apt_suite')}}">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="district" class="form-label">District</label>
                                                                        <input type="text" class="form-control" name="district" placeholder="District" value="{{old('district')}}">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="city" class="form-label">City</label>
                                                                        <input type="text" class="form-control" name="city" placeholder="City" value="{{old('city')}}">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="region" class="form-label">Region<span class="text-muted">(Optional)</span></label>
                                                                        <input type="text" class="form-control" name="region" id="region" placeholder="Region">
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="state" class="form-label">Postcode</label>
                                                                        <input type="text" class="form-control" name="postcode" placeholder="Postcode" value="{{old('postcode')}}">

                                                                    </div>
                                                                    <div class="col-6">
                                                                        <label for="country" class="form-label">Country</label>
                                                                        <select class="form-select" name="country">
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
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to profile</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue</button>
                                                         --}}
                                                         <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-payment-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                                                    <div>
                                                        <h4>Emergency contacts</h4>
                                                        <p class="text-muted">Manage your client’s emergency contacts.</p>
                                                    </div>

                                                    <div>
                                                       
                                                        <div class="row gy-3">
                                                            <h5>Primary contact</h5>
                                                            <div class="col-sm-6">
                                                                <label for="emergency_contacts_fname" class="form-label">Full name</label>
                                                                <input type="text" class="form-control" name="emergency_fname" placeholder="Enter Full Name" value="{{old('emergency_fname')}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="relationship" class="form-label">Relationship</label>
                                                                <input type="text" class="form-control" name="relationship" placeholder="Enter Relationship" value="{{old('relationship')}}">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="emergency_email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="emergency_email" placeholder="Enter Emergency Email" value="{{old('emergency_email')}}">
                                                                
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="emergency_country_code" class="form-label"> Code</label>
                                                                <select class="form-select" name="emergency_country_code">
                                                                    @foreach($phoneCodes as $code)
                                                                    <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="8emergency_phone" class="form-label">Phone</label>
                                                                <input type="text" class="form-control" name="emergency_phone" placeholder="1234567890" value="{{old('emergency_phone')}}">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                        <hr class="mt-4 mb-2">
                                                        <div class="row gy-3">
                                                            <h5>Secondary contact</h5>
                                                            <div class="col-sm-6">
                                                                <label for="-secondary_emergency_fname" class="form-label">Full name</label>
                                                                <input type="text" class="form-control" name="secondary_emergency_fname" placeholder="Enter Full Name" value="{{old('secondary_emergency_fname')}}">
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <label for="secondary_emergency_relationship" class="form-label">Relationship</label>
                                                                <input type="text" class="form-control" name="secondary_emergency_relationship" placeholder="Enter Relationship" value="{{old('secondary_emergency_relationship')}}">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label for="secondary_emergency_email" class="form-label">Email</label>
                                                                <input type="email" class="form-control" name="secondary_emergency_email" placeholder="Enter Secondary Email" value="{{old('secondary_emergency_email')}}">
                                                                
                                                            </div>

                                                            <div class="col-md-2">
                                                                <label for="secondary_emergency_country_code" class="form-label"> Code</label>
                                                                <select class="form-select" name="secondary_emergency_country_code" required>
                                                                    @foreach($phoneCodes as $code)
                                                                    <option value="{{ $code->phone_code }}">{{ $code->phone_code }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="phone" class="form-label">Phone</label>
                                                                <input type="number" class="form-control" name="secondary_emergency_phone" placeholder="1234567890" value="{{old('secondary_emergency_phone')}}">
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Shipping Info</button>
                                                        {{-- <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-finish-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i> Order Complete</button> --}}
                                                        <button type="button" class="btn btn-success btn-label right ms-auto" 
                                                            onclick="changeTab('v-pills-finish-tab')">
                                                        <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Continue
                                                    </button>
                                                    </div>
                                                </div>
                                                <!-- end tab pane -->
                                                <div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
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
                                                            <h4>Notifications</h4>
                                                            <p class="text-muted">Choose how you'd like to keep this client up to date..</p>
                                                        </div>
                                                        

                                                        <div class="form-check mb-2 mx-3">
                                                            <input type="checkbox" class="form-check-input" id="same-address">
                                                            <label class="form-check-label" for="same-address">Send Email Notifications</label>
                                                        </div>
                                                        <hr>
                                                        <div>
                                                            <h5>Marketing notifications</h5>
                                                            <p class="text-muted">Choose if this client has agreed to receive marketing notifications.</p>
                                                        </div>
                                                        <div class="form-check mx-3">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Client accepts email marketing notifications</label>
                                                        </div>

                                                        <div class="form-check mx-3">
                                                            <input type="checkbox" class="form-check-input" id="save-info">
                                                            <label class="form-check-label" for="save-info">Client accepts text message marketing notifications</label>
                                                        </div>

                                                    </div>
                                                    <div class="d-flex align-items-start gap-3 mt-4">
                                                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-payment-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Emergency Contact</button>
                                                        <button type="submit" class="btn btn-success right ms-auto"> Finish</button>
                                                    </div> 
                                                </div>
                                                <!-- end tab pane -->
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
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
</div>

@endsection


@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>


<script>

// let selectedAddressType = 'Home'; // Default selection

// // Function to set the selected address type
// function selectAddressType(addressType) {
//     selectedAddressType = addressType;
    
//     // Update the modal input field to reflect the selection
//     document.getElementById('selectedAddressTypeModal').value = addressType; // Use the modal input ID here
// }

// // Function to open the modal
// function openModal() {
//     // Show the modal and set the default value for the selected address type when it opens
//     const modalElement = document.getElementById('exampleModalgrid');
//     const modalInstance = new bootstrap.Modal(modalElement);
    
//     // Set the modal input to the currently selected address type
//     document.getElementById('selectedAddressTypeModal').value = selectedAddressType; // Ensure this updates the modal input

//     modalInstance.show();
// }

// // Handle submission of the selected address type
// document.getElementById('submitAddressType').addEventListener('click', function () {
//     // Update the main form input field with the selected address type
//     document.getElementById('selectedAddressType').value = selectedAddressType; 

//     // Close the modal programmatically
//     const modalElement = document.getElementById('exampleModalgrid');
//     const modalInstance = bootstrap.Modal.getInstance(modalElement);
//     modalInstance.hide();
// });

// Open the modal when the button is clicked
// document.querySelector('[data-bs-toggle="modal"]').addEventListener('click', openModal);



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

// Handle submission of the selected address type
document.getElementById('submitAddressType').addEventListener('click', function () {
    // Update the main form input field with the selected address type
    document.getElementById('selectedAddressType').value = selectedAddressType; 

    // Show the address fields
    document.getElementById('addressFields').classList.remove('d-none');

    // Close the modal programmatically
    const modalElement = document.getElementById('exampleModalgrid');
    const modalInstance = bootstrap.Modal.getInstance(modalElement);
    modalInstance.hide();
});





///////////// upload image code 

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


//////////change nettab code 

function changeTab(tabId) {
    var tabTrigger = new bootstrap.Tab(document.getElementById(tabId));
    tabTrigger.show();
}
</script>

@endpush