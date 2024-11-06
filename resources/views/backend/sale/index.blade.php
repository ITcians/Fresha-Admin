@extends('backend.layouts.admin-master')
@section('title','Sales')
@push('styles')
<style>


.nav-pills {
    --vz-nav-pills-border-radius: var(--vz-border-radius);
    --vz-nav-pills-link-active-color: #292828;
    --vz-nav-pills-link-active-bg: #cad3f0;
}
</style>
@endpush
@section('content')
    
        {{-- <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sales</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sales</a></li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Daily Sales
                                        <p style="font-size: 12px; margin-top: 5px;">View, filter and export the transactions and cash movement for the day.</p>
                                    </h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <select name="" id="" class="form-select">
                                                <option value=""><strong>Export</strong></option>
                                                <option value="">PDF</option>
                                                <option value="">CSV</option>
                                                <option value="">Excel</option>
                                            </select>
                                        </div>
                                        <a href="{{route('admin.sale.create')}}" class="btn btn-dark">Add</a>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3 mx-1 mb-4">
                                        <div class="input-group" style="border-radius: 40px !important;">
                                            <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <!-- Transaction Summary Card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Transaction Summary</h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Item Type</th>
                                                        <th>Sales Qty</th>
                                                        <th>Refund Qty</th>
                                                        <th>Gross Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Services</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Products</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Memberships</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                    
                                <!-- Cash Movement Summary Card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Cash Movement Summary</h4>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Payment Type</th>
                                                        <th>Payments Collected</th>
                                                        <th>Refunds Paid</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Cash</td>
                                                        <td>PKR 0.00</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card</td>
                                                        <td>PKR 0.00</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Online</td>
                                                        <td>PKR 0.00</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gift card redemptions</td>
                                                        <td>PKR 0.00</td>
                                                        <td>PKR 0.00</td>
                                                    </tr>

                                                    
                                                   
                                                </tbody>
                                            </table>
                                        </div><!-- end card-body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end col -->
                    </div>
                    
                    
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div> --}}
        <!-- end main content-->

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Sales</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sales</a></li>
                                        <li class="breadcrumb-item active">Index</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
        
                    {{-- <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Navigation</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#daily-sales-summary">
                                                Daily Sales Summary
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#appointments">
                                                Appointments
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales">
                                                Sales
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#payments">
                                                Payments
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#gift-cards-sold">
                                                Gift Cards Sold
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#memberships-sold">
                                                Memberships Sold
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Daily Sales
                                        <p style="font-size: 12px; margin-top: 5px;">View, filter, and export the transactions and cash movement for the day.</p>
                                    </h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <select name="" id="" class="form-select">
                                                <option value=""><strong>Export</strong></option>
                                                <option value="">PDF</option>
                                                <option value="">CSV</option>
                                                <option value="">Excel</option>
                                            </select>
                                        </div>
                                        <a href="{{route('admin.sale.create')}}" class="btn btn-dark">Add</a>
                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mt-3 mx-1 mb-4">
                                                <div class="input-group" style="border-radius: 40px !important;">
                                                    <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="row">
                                        <!-- Transaction Summary Card -->
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Transaction Summary</h4>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Item Type</th>
                                                                <th>Sales Qty</th>
                                                                <th>Refund Qty</th>
                                                                <th>Gross Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Services</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Products</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Shipping</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Memberships</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
        
                                        <!-- Cash Movement Summary Card -->
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Cash Movement Summary</h4>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Payment Type</th>
                                                                <th>Payments Collected</th>
                                                                <th>Refunds Paid</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Cash</td>
                                                                <td>PKR 0.00</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Card</td>
                                                                <td>PKR 0.00</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Online</td>
                                                                <td>PKR 0.00</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gift Card Redemptions</td>
                                                                <td>PKR 0.00</td>
                                                                <td>PKR 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row --> --}}


                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2" style="font-size: 12px">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-daily-sales-summary-tab" data-bs-toggle="pill" href="#v-pills-daily-sales-summary" role="tab" aria-controls="v-pills-daily-sales-summary" aria-selected="true">Daily sales summary</a>
                                                <a class="nav-link mb-2" id="v-pills-appointments-tab" data-bs-toggle="pill" href="#v-pills-appointments" role="tab" aria-controls="v-pills-appointments" aria-selected="false">Appointments</a>
                                                <a class="nav-link mb-2" id="v-pills-sales-tab" data-bs-toggle="pill" href="#v-pills-sales" role="tab" aria-controls="v-pills-sales" aria-selected="false">Sales</a>
                                                <a class="nav-link" id="v-pills-payment-transactions-tab" data-bs-toggle="pill" href="#v-pills-payment-transactions" role="tab" aria-controls="v-pills-payment-transactions" aria-selected="false">Payment transactions</a>
                                                <a class="nav-link" id="v-pills-gift-cards-sold-tab" data-bs-toggle="pill" href="#v-pills-gift-cards-sold" role="tab" aria-controls="v-pills-gift-cards-sold" aria-selected="false">Gift cards sold</a>
                                                <a class="nav-link" id="v-pills-memberships-sold-tab" data-bs-toggle="pill" href="#v-pills-memberships-sold" role="tab" aria-controls="v-pills-memberships-sold" aria-selected="false">Memberships sold</a>
                                            </div>
                                        </div><!-- end col -->
                                        <div class="col-md-10">
                                            <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-daily-sales-summary" role="tabpanel" aria-labelledby="v-pills-daily-sales-summary-tab">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">
                                                                    <h4 class="card-title mb-0 flex-grow-1">Daily Sales
                                                                        <p style="font-size: 12px; margin-top: 5px;">View, filter and export the transactions and cash movement for the day.</p>
                                                                    </h4>
                                                                    <div class="flex-shrink-0">
                                                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                                                            <select name="" id="" class="form-select">
                                                                                <option value=""><strong>Export</strong></option>
                                                                                <option value="">PDF</option>
                                                                                <option value="">CSV</option>
                                                                                <option value="">Excel</option>
                                                                            </select>
                                                                        </div>
                                                                        <a href="{{route('admin.sale.create')}}" class="btn btn-dark">Add</a>
                                                                    </div>
                                                                </div><!-- end card header -->
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <div class="mt-1 mx-1 mb-1">
                                                                                <div class="input-group" style="border-radius: 40px !important;">
                                                                                    <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card-body -->
                                                            </div><!-- end card -->
                                                            
                                                    
                                                            <div class="row">
                                                                <!-- Transaction Summary Card -->
                                                                <div class="col-md-6">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4>Transaction Summary</h4>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Item Type</th>
                                                                                        <th>Sales Qty</th>
                                                                                        <th>Refund Qty</th>
                                                                                        <th>Gross Total</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Services</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Products</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Shipping</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Memberships</td>
                                                                                        <td>0</td>
                                                                                        <td>0</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    
                                                                                </tbody>
                                                                            </table>
                                                                        </div><!-- end card-body -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                    
                                                                <!-- Cash Movement Summary Card -->
                                                                <div class="col-md-6">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h4>Cash Movement Summary</h4>
                                                                        </div>
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Payment Type</th>
                                                                                        <th>Payments Collected</th>
                                                                                        <th>Refunds Paid</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Cash</td>
                                                                                        <td>PKR 0.00</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Card</td>
                                                                                        <td>PKR 0.00</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Online</td>
                                                                                        <td>PKR 0.00</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Gift card redemptions</td>
                                                                                        <td>PKR 0.00</td>
                                                                                        <td>PKR 0.00</td>
                                                                                    </tr>
                                
                                                                                    
                                                                                   
                                                                                </tbody>
                                                                            </table>
                                                                        </div><!-- end card-body -->
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                            </div><!-- end row -->
                                                        </div><!-- end col -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-appointments" role="tabpanel" aria-labelledby="v-pills-appointments-tab">
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
                                                <div class="tab-pane fade" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/small/img-6.jpg" alt="" width="150" class="rounded">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0">In this image, you can see that the line height has been reduced significantly, and the size was brought up exponentially. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites.</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard This may be the most commonly encountered tip I received from the designers I spoke with.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-payment-transactions" role="tabpanel" aria-labelledby="v-pills-payment-transactions-tab">
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/small/img-7.jpg" alt="" width="150" class="rounded">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0">When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        If you’re using multiple elements, make sure that your principal object is larger than the others, as the eye of your viewer will automatically be drawn to the larger of the two objects.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-gift-cards-sold" role="tabpanel" aria-labelledby="v-pills-gift-cards-sold-tab">
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/small/img-7.jpg" alt="" width="150" class="rounded">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0">When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        If you’re using multiple elements, make sure that your principal object is larger than the others, as the eye of your viewer will automatically be drawn to the larger of the two objects.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-memberships-sold" role="tabpanel" aria-labelledby="v-pills-memberships-sold-tab">
                                                    <div class="d-flex mb-2">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/small/img-7.jpg" alt="" width="150" class="rounded">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0">When designing, the goal is to draw someone’s attention and portray to them what you’re trying to say. You can make a big statement by using little tricks, like this one. Use contrasting fonts. you can use a bold sanserif font with a cursive.</p>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0">
                                                        If you’re using multiple elements, make sure that your principal object is larger than the others, as the eye of your viewer will automatically be drawn to the larger of the two objects.
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

