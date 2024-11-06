@extends('backend.layouts.admin-master')
@section('title','Catalog')
@push('styles')
<style>

.nav-pills {
    --vz-nav-pills-border-radius: var(--vz-border-radius);
    --vz-nav-pills-link-active-color: #302d2d;
    --vz-nav-pills-link-active-bg: #cad3f0;
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

.user-icon {
    display: flex;
    align-items: center;
}

.placeholder {
    width: 40px;
    height: 40px;
    background-color: #007bff; /* Adjust as needed */
    color: white;
    display: none; /* Initially hidden */
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border-radius: 50%; /* Ensures it stays round */
}

</style>
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />


<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
    rel="stylesheet">
@endpush
@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Catalog</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Catalog</a></li>
                                    <li class="breadcrumb-item active">Index</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-team-members-tab" data-bs-toggle="pill" href="#v-pills-team-members" role="tab" aria-controls="v-pills-team-members" aria-selected="true">Service Menu</a>
                                            <a class="nav-link mb-2" id="v-pills-memberships-tab" data-bs-toggle="pill" href="#v-pills-memberships" role="tab" aria-controls="v-pills-memberships" aria-selected="false">Memberships</a>
                                            <a class="nav-link mb-2" id="v-pills-products-tab" data-bs-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="false">Products</a>
                                            <h3 class="mt-4 mb-4" >Inventory</h3>
                                            <a class="nav-link mb-2" id="v-pills-stocktakes-tab" data-bs-toggle="pill" href="#v-pills-stocktakes" role="tab" aria-controls="v-pills-stocktakes" aria-selected="false">Stocktakes</a>
                                            <a class="nav-link mb-2" id="v-pills-stock-orders-tab" data-bs-toggle="pill" href="#v-pills-stock-orders" role="tab" aria-controls="v-pills-stock-orders" aria-selected="false">Stock orders</a>
                                            <a class="nav-link mb-2" id="v-pills-suppliers-tab" data-bs-toggle="pill" href="#v-pills-suppliers" role="tab" aria-controls="v-pills-suppliers" aria-selected="false">Suppliers</a>
                                            
                                        </div>
                                    </div><!-- end col -->
                                    <div class="col-md-10">
                                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-team-members" role="tabpanel" aria-labelledby="v-pills-team-members-tab">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-header align-items-center d-flex">
                                                                <h3 class="mb-0 d-flex align-items-center flex-grow-1">
                                                                    Service menu
                                                                </h3>
                                                                {{-- <span class="text-muted" >View and manage the services offered by your business</span> --}}
                                                                
                                                                <div class="flex-shrink-0">
                                                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                                                        <select name="" id="" class="form-select">
                                                                            <option value=""><strong>Options</strong></option>
                                                                            <option value="">PDF</option>
                                                                            <option value="">CSV</option>
                                                                            <option value="">Excel</option>
                                                                        </select>
                                                                    </div>
                                                                    {{-- <a href="{{route('admin.service.create')}}" class="btn btn-dark">

                                                                    </a> --}}
                                                                    <div class="btn-group">
                                                                        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="{{route('admin.service.create')}}">Single serive</a>
                                                                            <a class="dropdown-item" href="{{route('admin.package.create')}}">Package</a>
                                                                            <a class="dropdown-item" href="{{route('admin.category.create')}}">Category</a>
                                                                        </div>
                                                                    </div><!-- /btn-group -->
                                                                </div>
                                                            </div><!-- end card header -->
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <form action="">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                                                <input type="search" class="form-control" name="search" placeholder="Search service name">
                                                                            </div>
                                                                            
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="filters">
                                                                            <a href="" class="filter-button">Filters<i class="ri-sound-module-line" style="margin-left: 2px;" ></i></a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">
                                                                        <div class="filters float-end">
                                                                            <a href="" class="filter-button"> Manage Order  <i class="ri-menu-add-line" style="margin-left: 5px;"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                        
                                                
                                                        <div class="row">
                                                            <!-- Transaction Summary Card -->


                                                            <div class="col-md-12">
                                                                <h5 class="mb-3">Categories</h5>
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                                    <a class="nav-link mb-2 active" id="v-pills-all-categories-tab" data-bs-toggle="pill" href="#v-pills-all-categories" role="tab" aria-controls="v-pills-all-categories" aria-selected="true">All Categories</a>
                                                                                    <a class="nav-link mb-2" id="v-pills-hair-&-styling-tab" data-bs-toggle="pill" href="#v-pills-hair-&-styling" role="tab" aria-controls="v-pills-hair-&-styling" aria-selected="false">Hair & Styling</a>
                                                                                    <a class="nav-link mb-2" id="v-pills-nails-tab" data-bs-toggle="pill" href="#v-pills-nails" role="tab" aria-controls="v-pills-nails" aria-selected="false">Nails</a>
                                                                                    <a class="nav-link" id="v-pills-eyebrows-tab" data-bs-toggle="pill" href="#v-pills-eyebrows" role="tab" aria-controls="v-pills-eyebrows" aria-selected="false">Eyebrows</a>
                                                                                </div>
                                                                            </div><!-- end col -->
                                                                            <div class="col-md-9">
                                                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                                                    <div class="tab-pane fade show active" id="v-pills-all-categories" role="tabpanel" aria-labelledby="v-pills-all-categories-tab">
                                                                                        <div class="col-md-12">
                                                                                            <div class="card">
                                                                                                <div class="card-header">
                                                                                                    <h4>Hair & styling
                                                                                                    </h4>
                                                                                                </div>
                                                                                                <div class="card-body">
                                                                                                    <div class="table-responsive table-card">
                                                                                                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                                                                           
                                                                                                            <tbody>
                                                                                                                @forelse ($services as $service)
                                                                                                                    <tr id="service-row-{{ $service->id }}">
                                                                                                                        <td>
                                                                                                                            <div class="d-flex align-items-center">
                                                                                                                                <div>
                                                                                                                                    <h5 class="mt-2 mx-2">{{ $service->service_name }}</h5>
                                                                                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">{{ formatDuration($service->duration) }}</h5>

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </td>
                                                                                                                        {{-- <td>
                                                                                                                        </td> --}}
                                                                                                                        <td>
                                                                                                                            <div class="dropdown float-end">
                                                                                                                                <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: -5px;">
                                                                                                                                    <i class="ri-more-2-fill"></i> <!-- Use a suitable icon -->
                                                                                                                                </button>
                                                                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                                                    <li><a class="dropdown-item text-danger" href="#" onclick="deleteService({{ $service->id }})">Delete</a></li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                            <h4 class="float-end">${{ $service->price }}</h4>

                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                @empty
                                                                                                                    <tr>
                                                                                                                        <td>No Service available</td>
                                                                                                                    </tr>
                                                                                                                @endforelse
                                                                                                            </tbody>
                                                                                                            
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div><!-- end card-body -->
                                                                                                
                                                                                                
                                                                                                
                                                                                            </div><!-- end card -->
                                                                                        </div><!-- end col -->
                                                                                        
                                                                                    </div>
                                                                                    <div class="tab-pane fade" id="v-pills-hair-&-styling" role="tabpanel" aria-labelledby="v-pills-hair-&-styling-tab">
                                                                                        <h1>Hair & styling</h1>
                                                                                        
                                                                                    </div>
                                                                                    <div class="tab-pane fade" id="v-pills-nails" role="tabpanel" aria-labelledby="v-pills-nails-tab">
                                                                                        <h1>Nails</h1>
                                                                                    </div>
                                                                                    <div class="tab-pane fade" id="v-pills-eyebrows" role="tabpanel" aria-labelledby="v-pills-eyebrows-tab">
                                                                                        <h1>Eyebrows</h1>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!--  end col -->
                                                                        </div>
                                                                        <!--end row-->
                                                                    </div><!-- end card-body -->
                                                                </div><!-- end card -->
                                                            </div>

                                                            {{-- <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">

                                                            <div class="tab-pane fade show active" id="v-pills-all-categories" role="tabpanel" aria-labelledby="v-pills-all-categories-tab">
                                                                                        
                                                                                       
                                                            <div class="col-md-8">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4>Hair & styling
                                                                        </h4>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="table-responsive table-card">
                                                                            <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex align-items-center">
                                                                                                
                                                                                                <div>
                                                                                                    <h5 class="mt-2 mx-2">Haircut</h5>
                                                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">45 min</h5>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        
                                                                                        <td>
                                                                                            <h4 class="float-end">PKR 510</h4>
                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex align-items-center">
                                                                                                
                                                                                                <div>
                                                                                                    <h5 class="mt-2 mx-2">Hair color</h5>
                                                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">1hr 30</h5>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        
                                                                                        <td>
                                                                                            <h4 class="float-end">PKR 510</h4>
                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="d-flex align-items-center">
                                                                                                
                                                                                                <div>
                                                                                                    <h5 class="mt-2 mx-2">Blow Dry</h5>
                                                                                                    <h5 class="mx-2 fs-14 my-1 text-muted">30 min </h5>
                                
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        
                                                                                        <td>
                                                                                            <h4 class="float-end">PKR 510</h4>
                                                                                        </td>
                                                                                        
                                                                                    </tr>
                                                                                    
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div><!-- end card-body -->
                                                                    
                                                                    
                                                                    
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->
                                                            </div>
                                                        </div> --}}
                                                            
                                                        </div><!-- end row -->
                                                    </div><!-- end col -->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-memberships" role="tabpanel" aria-labelledby="v-pills-memberships-tab">
                                                
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                                                <div class="row  product-form">
                                                    
                                                    <h3 class="text-center" >Add new product</h3>
                                                    <div class="col-xl-8">
                                                        <div>
                                                            <div class="row g-3">
                                                            <div class="card">
                                                                    <div class="card-header">
                                                                        <h4>Basic info</h4>
                                                                    </div>
                                                                   
                                                                <div class="card-body">
                                                                <div class="col-cl-12 mb-3">
                                                                    <label for="servicename" class="form-label">Product name</label>
                                                                    <input type="text" name="servicename" class="form-control" placeholder="Product name">
                                                                </div>

                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="servicename" class="form-label">Product barcode <span class="text-mutes" >(Optional)</span> </label>
                                                                    <input type="text" name="servicename" class="form-control" placeholder="UPC, EIN, GTIN">
                                                                </div>

                                                                
                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="servicename" class="form-label">Product brand <span class="text-mutes"></span> </label>
                                                                    <br>
                                                                    <a href=""> <strong class="text-primary" >Select Brand</strong> </a>
                                                                </div>
    
                                                                <div class="col-xl-6">
                                                                    <label for="service_type" class="form-label">Measure</label>
                                                                    <select name="service_type" class="form-select" style="margin-bottom: 20px;">
                                                                        <option value="">Millimeters (ml)</option>
                                                                        <option value="">Liters (l)</option>
                                                                        <option value="">Fluid Ounces (Fl,Oz)</option>
                                                                        <option value="grams">Grams (g)</option>
                                                                        <option value="grams">Kilgrams (kg)</option>
                                                                        <option value="grams">Gallons (gal)</option>
                                                                        <option value="grams">Ounces (oz)</option>
                                                                        <option value="grams">Pounds (lb)</option>
                                                                        <option value="grams">Centimeters (cm)</option>
                                                                        <option value="grams">Feet (ft)</option>
                                                                        <option value="grams">Inches (in)</option>
                                                                        <option value="grams">A whole Product</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                                
                                                                <div class="col-xl-6 mb-3">
                                                                    <label for="lastName" class="form-label">Amount</label>
                                                                    <input type="text" name="amount" class="form-control" placeholder="ml 0.00">
                                                                </div>

                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="lastName" class="form-label">Short description</label>
                                                                    <input type="text" name="amount" class="form-control" placeholder="short description">
                                                                </div>
                                                                
                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="email" class="form-label">Product description <span class="text-muted" >(Optional)</span> </label>
                                                                    <textarea class="form-control" id="description" rows="6" name="description" placeholder="Add a short description"></textarea>
                                                                </div>
                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="servicename" class="form-label">Product Category <span class="text-mutes" >(Optional)</span> </label>
                                                                    <br>
                                                                    <a href=""> <strong class="text-primary" > Select a category </strong> </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                                <div class="card">
                                                                    <div class="card-header">
                                                                     <h3>Pricing</h3>

                                                                    </div>
                                                            <div class="card-body">
                                                                
                                                                <div class="col-xl-12 mt-3">
                                                                    <label for="phone" class="form-label">Supply price</label>
                                                                    <input type="text" name="supply_price" class="form-control" placeholder="USD 0.00">
                                                                </div>
                                                                

                                                                <div class="col-xl-12 mt-3">
                                                                    <label for="phone" class="form-label">Retail sales</label>
                                                                    <br>
                                                                    <span class="text-muted">Allow sales of this product at checkout.</span>
                                                                    <input type="text" name="supply_price" class="form-control">
                                                                
                                                                    <div class="form-check form-switch mt-3" style="font-size: x-large">
                                                                        <input type="checkbox" name="extra_time" class="form-check-input" id="RetailSalesSwitchsizelg">
                                                                        <span style="font-size:13px !important; margin-top:-4px !important">Enable retail sales</span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div id="retailFields" style="display: none;">
                                                                    <div class="col-xl-12">
                                                                        <label for="retail_price" class="form-label">Retail price</label>
                                                                        <input type="text" name="retail_price" class="form-control" placeholder="USD 0.00">
                                                                    </div>
                                                                
                                                                    <div class="col-xl-12">
                                                                        <label for="markup" class="form-label">Markup</label>
                                                                        <input type="text" name="markup" class="form-control" placeholder="% 0.00">
                                                                    </div>
                                                                
                                                                    <div class="col-xl-12">
                                                                        <label for="tax" class="form-label">Tax</label>
                                                                        <select name="tax" id="tax" class="form-select">
                                                                            <option value="">Default: No tax</option>
                                                                            <option value="">No tax</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                

                                                                <div class="col-xl-12 mt-3">
                                                                    <label for="phone" class="form-label">Team member commission</label>
                                                                    <br>
                                                                    <span class="text-muted" >Calculate team member commission when the product is sold.</span>

                                                                    <div class="form-check form-switch mt-3" style="font-size: x-large">
                                                                        <input type="checkbox" name="extra_time" class="form-check-input" id="customSwitchsizelg"> 
                                                                        <span style="font-size:13px !important; margin-top:-4px !important" >enable team member commission</span> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h3>Inventory</h3>
                                                                <span class="text-muted">Manage stock levels of this product through Fresha.</span>

                                                            </div>
                                                            <div class="card-body">

                                                            

                                                                <div class="col-xl-12 mt-3 mb-3">
                                                                    <label for="phone" class="form-label">SKU (Stock Keeping Unit)</label>
                                                                    <input type="text" class="form-control">
                                                                </div>


                                                                <div class="col-xl-12 mb-3">
                                                                    <a href=""> <strong class="text-primary" >Generate SKU automatically</strong> </a>
                                                                </div>

                                                                <div class="col-xl-12 mb-3">
                                                                    <a href=""> <strong class="text-primary" >Add another SKU code</strong> </a>
                                                                </div>

                                                                <div class="col-xl-12 mb-3">
                                                                    <label for="" class="form-label">Supplier</label>
                                                                    <br>
                                                                    <a href=""> <strong class="text-primary" >Select Supplier</strong> </a>
                                                                </div>
                                                                <hr>
                                                                <div class="col-xl-12 mt-3 mb-3">
                                                                    <label for="phone" class="form-label">Stock quantity</label>
                                                                    <br>
                                                                    <span class="text-muted" >Track stock quantity.</span>
                                                                    <div class="form-check form-switch mt-3" style="font-size: x-large">
                                                                        <input type="checkbox" name="extra_time" class="form-check-input" id="StockQuantitySwitchsizelg"> 
                                                                        <span style="font-size:13px !important; margin-top:-4px !important" >enable team member commission</span> 
                                                                    </div>
                                                                </div>

                                                                <div class="StocksInputs" style="display: none;">

                                                                <div class="col-xl-12 mt-3 mb-3">
                                                                    <label for="" class="form-label" >Current stock quantity</label>
                                                                    <input type="text" class="form-control" placeholder="0">
                                                                </div>

                                                                <div class="col-xl-12 mt-3 mb-3">
                                                                    <label for="phone" class="form-label">Low stock and reordering</label>
                                                                    <br>
                                                                    <span class="text-muted" >Fresha will automatically notify you and pre-fill the reorder quantity set for future stock orders..</span>
                                                                </div>
                                                                <div class="col-xl-6 mb-3">
                                                                    <label for="" class="form-label">Low stock level</label>
                                                                    <input type="text" class="form-control" placeholder="0">
                                                                    <span class="text-muted">The level to get notified to reorder</span>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <label for="" class="form-label">Reorder quantity</label>
                                                                    <input type="text" class="form-control" placeholder="0">
                                                                    <span class="text-muted">The default amount to order</span>
                                                                </div>

                                                                <div class="col-xl-12 mb-3">
                                                                    <div class="form-check form-switch mt-3" style="font-size: x-large">
                                                                        <input type="checkbox" name="extra_time" class="form-check-input" id="customSwitchsizelg"> 
                                                                        <span style="font-size:13px !important; margin-top:-4px !important" >Receive low stock notifications</span> 
                                                                    </div>    
                                                                </div>    
                                                            </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        
                                                        <input type="file" class="filepond" />
                                                      
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-stocktakes" role="tabpanel" aria-labelledby="v-pills-stocktakes-tab">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/small/img-5.jpg" alt="" width="150" class="rounded">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="mb-0"> I also decreased the transparency in the text so that the mountains come through the text, bringing the quote truly to life. Make sure that the placement of your text is pleasing to look at, and you try to achieve symmetry for this effect.</p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary. You can always play around with the text that is overlaid on an image.
                                                </p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-stock-orders" role="tabpanel" aria-labelledby="v-pills-stock-orders-tab">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/small/img-5.jpg" alt="" width="150" class="rounded">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="mb-0"> I also decreased the transparency in the text so that the mountains come through the text, bringing the quote truly to life. Make sure that the placement of your text is pleasing to look at, and you try to achieve symmetry for this effect.</p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary. You can always play around with the text that is overlaid on an image.
                                                </p>
                                            </div>

                                            <div class="tab-pane fade" id="v-pills-suppliers" role="tabpanel" aria-labelledby="v-pills-suppliers-tab">
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img src="assets/images/small/img-5.jpg" alt="" width="150" class="rounded">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <p class="mb-0"> I also decreased the transparency in the text so that the mountains come through the text, bringing the quote truly to life. Make sure that the placement of your text is pleasing to look at, and you try to achieve symmetry for this effect.</p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary. You can always play around with the text that is overlaid on an image.
                                                </p>
                                            </div>
                                            
                                        </div>
                                    </div><!--  end col -->
                                </div>
                                <!--end row-->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!--end col-->
                </div>
            </div><!-- container-fluid -->
        </div><!-- End Page-content -->
    </div><!-- end main content -->
        
@endsection
    

@push('scripts')
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script>
     FilePond.parse(document.body);
    // Register the plugin
    FilePond.registerPlugin(FilePondPluginImagePreview);

    // ... FilePond initialisation code here
    // $(document).ready(function() {
    //     $('.category-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: '{{ route('admin.sale.index') }}',
    //         columns: [
    //             { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
    //             { data: 'name', name: 'name' },
    //             { data: 'image', name: 'image' },
    //             { data: 'created_at', name: 'created_at' },
    //             { data: 'action', name: 'action', orderable: false, searchable: false },
    //         ]
    //     });
    // });




    //////////////delete service code
    // $(document).ready(function() {
    // // Set the CSRF token for all AJAX requests
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
    // })
    // function deleteService(serviceId) {
    //     console.log(serviceId);
    // if (confirm('Are you sure you want to delete this service?')) {
    //     $.ajax({
    //         url: '/services/' + serviceId,
            
    //         type: 'DELETE',
    //         success: function(response) {
    //             // Remove the service row from the table
    //             $('#service-row-' + serviceId).remove();
    //             alert('Service deleted successfully.');
    //         },
    //         error: function(xhr) {
    //             alert('Error deleting service: ' + xhr.responseText);
    //             }
    //         });
    //     }
    // }



    $(document).ready(function() {
    // Set the CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});

// Define deleteService in the global scope
// function deleteService(serviceId) {
//     console.log(serviceId);
//     if (confirm('Are you sure you want to delete this service?')) {
//         $.ajax({
//             url: '/services/' + serviceId, // Adjust this URL based on your routing
//             type: 'DELETE',
//             success: function(response) {
//                 // Remove the service row from the table
//                 $('#service-row-' + serviceId).remove();
//                 alert('Service deleted successfully.');
//             },
//             error: function(xhr) {
//                 alert('Error deleting service: ' + xhr.responseText);
//             }
//         });
//     }
// }


function deleteService(serviceId) {
    Swal.fire({
        title: 'Are you sure?',
        text: 'You won\'t be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: '/services/' + serviceId,
                type: 'DELETE',
                success: function(response) {
                    // Remove the service row from the table
                    $('#service-row-' + serviceId).remove();
                    Swal.fire(
                        'Deleted!',
                        'Your service has been deleted.',
                        'success'
                    );
                },
                error: function(xhr) {
                    Swal.fire(
                        'Error!',
                        'Error deleting service: ' + xhr.responseText,
                        'error'
                    );
                }
            });
        }
    });
}





$(document).ready(function() {
    $('#RetailSalesSwitchsizelg').change(function() {
        if ($(this).is(':checked')) {
            $('#retailFields').show(); // Show fields when checked
        } else {
            $('#retailFields').hide(); // Hide fields when unchecked
        }
    });
});

$(document).ready(function() {
    $('#StockQuantitySwitchsizelg').change(function() {
        if ($(this).is(':checked')) {
            $('.StocksInputs').show(); 
            $('.StocksInputs').style = 'display flex'; 
        } else {
            $('.StocksInputs').hide(); // Hide fields when unchecked
        }
    });
});


</script>


@endpush 

