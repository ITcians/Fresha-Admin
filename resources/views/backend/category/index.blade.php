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
                    <div class="col-xxl-6 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-team-members-tab" data-bs-toggle="pill" href="#v-pills-team-members" role="tab" aria-controls="v-pills-team-members" aria-selected="true">Service Menu</a>
                                            <a class="nav-link mb-2" id="v-pills-memberships-tab" data-bs-toggle="pill" href="#v-pills-memberships" role="tab" aria-controls="v-pills-memberships" aria-selected="false">Memberships</a>
                                            <a class="nav-link mb-2" id="v-pills-products-tab" data-bs-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="false">Products</a>
                                            <h4 class="mt-4 mb-4" >Inventory</h4>
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
                                                                            <a class="dropdown-item" href="#">Category</a>
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

                                            <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
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
                    
                    <!--end col-->
                </div>



            </div><!-- container-fluid -->
        </div><!-- End Page-content -->
    </div><!-- end main content -->
        
@endsection
    

@push('scripts')
<script>
    $(document).ready(function() {
        $('.category-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.sale.index') }}',
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


@endpush 

