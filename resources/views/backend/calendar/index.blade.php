@extends('backend.layouts.admin-master')
@push('styles')

@endpush
@section('title','Calender')
@section('content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Calendar</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card card-h-100">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <select name="" class="form-select" id="">
                                                <option value="">Brand</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select name="" class="form-select" id="">
                                                <option value="">Working</option>
                                                <option value="">All</option>
                                                <option value="">John doe</option>
                                                <option value="">James will</option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <div class="mb-3">
                                                <div class="input-group" style="border-radius: 40px !important">
                                                    <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                    <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                             <p class="waitlist"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasWaitlist" aria-controls="offcanvasRight"><i class="ri-calendar-todo-fill" style="font-size: 17px" ></i> <span style="font-size: 16px" >Waitlist</span> </p>
                                             <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWaitlist" aria-labelledby="offcanvasWaitlistLabel">
                                                <div class="offcanvas-header">
                                                    <h5 id="offcanvasWaitlistLabel">Top</h5>
                                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    ...
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-dark float-end w-100 add-button" style="border-radius: 40px;"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" >Add</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <div class="col-xxl-6">
                                        <div class="card">
                                            <div class="card-body calender-users-images">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs nav-justified mb-3" role="tablist">
                                                    @foreach ($users as $index => $user)
                                                        <li class="nav-item">
                                                            <a class="nav-link @if($index === 0) active @endif" data-bs-toggle="tab" href="#calendar-tab-{{ $user->id }}" role="tab" aria-selected="{{ $index === 0 ? 'true' : 'false' }}" data-user-id="{{ $user->id }}">
                                                                <img src="{{ asset('assets/backend/images/users/avatar-' . rand(1, 8) . '.jpg') }}" width="70" alt="">
                                                                <p>{{ $user->fname }} {{$user->lname}}</p>
                                                                <small>{{ $user->bookings->count() }} booking(s)</small>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                    
                                                <!-- Tab panes -->
                                                <div class="tab-content text-muted">
                                                    @foreach ($users as $index => $user)
                                                        <div class="tab-pane @if($index === 0) active @endif" id="calendar-tab-{{ $user->id }}" role="tabpanel">
                                                            <div id="calendar-{{ $user->id }}"></div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div><!-- end card-body -->
                                        </div><!-- end card -->
                                    </div>
                                    
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-12 d-none">
                            <div class="card card-h-100">
                                <div class="card-body">
                                    <button class="btn btn-primary w-100" id="btn-new-event"><i class="mdi mdi-plus"></i> Create New Event</button>

                                    <div id="external-events">
                                        <br>
                                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                                        <div class="external-event fc-event bg-soft-success text-success" data-class="bg-soft-success">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event Planning
                                        </div>
                                        <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                        </div>
                                        <div class="external-event fc-event bg-soft-warning text-warning" data-class="bg-soft-warning">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                                        </div>
                                        <div class="external-event fc-event bg-soft-danger text-danger" data-class="bg-soft-danger">
                                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create New theme
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <h5 class="mb-1">Upcoming Events</h5>
                                <p class="text-muted">Don't miss scheduled events</p>
                                <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 400px">
                                    <div id="upcoming-event-list"></div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body bg-soft-info">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i data-feather="calendar" class="text-info icon-dual-info"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="fs-15">Welcome to your Calendar!</h6>
                                            <p class="text-muted mb-0">Event that applications book will appear here. Click on an event to see the details and manage applicants event.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->
                    </div>
                    <!--end row-->

                    <div style='clear:both'></div>

                    <!-- Add New Event MODAL -->
                    <div class="modal fade" id="event-modal" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="modal-title">Add Appiontment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                        <div class="text-end">
                                            <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                        </div>
                                        <div class="event-details">
                                            <div class="d-flex mb-2">
                                                <div class="flex-grow-1 d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <i class="ri-calendar-event-line text-muted fs-16"></i>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-time-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"><span id="event-timepicker1-tag"></span> - <span id="event-timepicker2-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-map-pin-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="d-block fw-semibold mb-0"> <span id="event-location-tag"></span></h6>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="ri-discuss-line text-muted fs-16"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row event-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Type</label>
                                                    <select class="form-select d-none" name="category" id="event-category" required>
                                                        <option value="bg-soft-danger">Danger</option>
                                                        <option value="bg-soft-success">Success</option>
                                                        <option value="bg-soft-primary">Primary</option>
                                                        <option value="bg-soft-info">Info</option>
                                                        <option value="bg-soft-dark">Dark</option>
                                                        <option value="bg-soft-warning">Warning</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a valid event category</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Event Name</label>
                                                    <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="" />
                                                    <div class="invalid-feedback">Please provide a valid event name</div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label>Event Date</label>
                                                    <div class="input-group d-none">
                                                        <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required>
                                                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12" id="event-time">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">End Time</label>
                                                            <div class="input-group d-none">
                                                                <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly>
                                                                <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="event-location">Location</label>
                                                    <div>
                                                        <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <input type="hidden" id="eventid" name="eventid" value="" />
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-soft-danger" id="btn-delete-event"><i class="ri-close-line align-bottom"></i> Delete</button>
                                            <button type="submit" class="btn btn-success" id="btn-save-event">Add Appiontment</button>
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- end modal-content-->
                        </div> <!-- end modal dialog-->
                    </div> <!-- end modal-->
                </div>
            </div> <!-- end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

</div>

<!-- Calendar Dropdown Menu -->
<div id="calendar-dropdown" class="dropdown-menu" style="position: absolute;">
    <a href="#" class="dropdown-item" id="add-booking">Add Booking</a>
    <a href="#" class="dropdown-item" id="add-block-time">Add Block Time</a>
</div>


<!-- right offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width:40%">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Select Service</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" style="margin-top:-30px">
        <div class="card-body">
           
            <div>
                <form action="{{route('admin.booking.store')}}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="team_member" class="form-label">Select a team member</label>
                        <select name="booking_team_member" id="" class="form-select" required>
                            <option value="" disabled selected>Select a team memeber</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->fname}} {{$user->lname}}  </option>
                            @endforeach
                        </select>
                    </div>
                    <label for="booking_client" class="form-label mr-3 mt-3">Select a Client</label>
                    <div class="d-flex align-items-center mb-3">
                        
                        <select name="booking_client" id="booking_client" class="form-select" required>
                            <option value="" disabled selected >Select a client</option>
                            @forelse ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->fname }} {{ $client->lname }}</option>
                            @empty
                                <option value="">No client available</option>
                            @endforelse
                        </select>
                    
                        <!-- Add a + button next to the select -->
                        <a href="{{ route('admin.client.create', ['redirect_to' => url()->current()]) }}" class="btn btn-outline-dark ml-2" id="addClientBtn" data-bs-toggle="tooltip" data-bs-placement="top" title="Add a Client">
                            <i class="bi bi-plus"></i> <!-- Bootstrap Icons for the plus sign -->
                        </a>
                    </div>
                    
                    <div class="input-group mt-3">
                        <span class="input-group-text"><i class="ri-search-line"></i></span>
                        <input type="search" class="form-control" name="search" placeholder="Search service name">
                    </div>

                    <div class="table-responsive table-card mt-3 mb-3">
                        <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                            <tbody>
                                @foreach($services as $categoryName => $categoryServices)
                                    <!-- Category Header as a Row -->
                                    <tr>
                                        <td colspan="2">
                                            <h3 class="mx-2 d-flex align-items-center flex-grow-1">
                                                {{ $categoryName }}
                                                <span class="team-members-count">
                                                    {{ $categoryServices->count() }}
                                                </span>
                                            </h3>
                                        </td>
                                    </tr>
                    
                                    <!-- Services for Each Category -->
                                    @foreach($categoryServices as $service)
                                        <tr id="service-row" class="service-row ml-3 mb-3 mt-3" data-service-id="{{ $service->id }}">
                                            <td class="service-name-cell">
                                                <div class="d-flex align-items-center">
                                                    <div class="service-info">
                                                        <h5 class="mt-2 mx-2">{{ $service->service_name }}</h5>
                                                        <h5 class="mx-2 fs-14 my-1 text-muted">{{ $service->duration }} min</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="float-end">${{ $service->price }}</h5>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="col-12" id="event-time">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">Start Time</label>
                                    <div class="input-group">
                                        <input  type="time" name="start_time" class="form-control" placeholder="Select start time" >
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label">End Time</label>
                                    <div class="input-group">
                                        <input id="timepicker2" type="time" name="end_time" class="form-control" placeholder="Select end time">
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hidden input to store selected service IDs -->
                    <input type="hidden" name="services[]" id="selected-services" value="">
        
                    
                    <div class="mb-3 mt-3 float-end" >
                        <button type="button" class="btn btn-light mx-2 mb-3" data-bs-dismiss="offcanvas" aria-label="Close">Checkout</button>
                        <button type="submit" class="btn btn-primary mb-3">Save</button>
                    </div>
                </form>
            </div>
        </div><!-- end card-body -->
        
    </div>
</div>






@endsection

@push('scripts')

<script>
        var btn = document.getElementsByClassName('add-button')[0]; // Access the first element with the class 'add-button'
        btn.addEventListener('click', function() {
            var modalElement = new bootstrap.Modal(document.getElementById('exampleModalgrid'));
            modalElement.show();
        });
        
</script>

<script>
$(document).ready(function() {
    // Handle service selection
    $('.service-item').on('click', function() {
        const serviceName = $(this).data('service');
        const serviceDuration = $(this).data('duration');
        const servicePrice = $(this).data('price');

        // Fill in the details
        $('#serviceName').text(serviceName);
        $('#serviceDuration').text(serviceDuration);
        $('#servicePrice').text('PKR ' + servicePrice);
        $('#totalPrice').text('PKR ' + servicePrice); // Set total price

        // Switch to details view
        $('#serviceSelection').addClass('d-none');
        $('#serviceDetails').removeClass('d-none');
    });

    // Back button functionality
    $('#backToSelection').on('click', function() {
        $('#serviceDetails').addClass('d-none');
        $('#serviceSelection').removeClass('d-none');
    });

    // Confirm selection functionality
    $('#confirmSelection').on('click', function() {
        alert('Service confirmed: ' + $('#serviceName').text() + ' for ' + $('#totalPrice').text());
        // Add further logic here to handle the confirmation.
    });
});



///////////////calendar

document.addEventListener('DOMContentLoaded', function() {
    // Initialize FullCalendar for each user dynamically
    @foreach ($users as $user)
        var calendar{{ $user->id }} = new FullCalendar.Calendar(document.getElementById('calendar-{{ $user->id }}'), {
            initialView: 'timeGridDay',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridWeek,timeGridDay'
            },
            events: [
                @foreach ($user->bookings as $booking)
                    {
                        title: '{{ $booking->title }}',
                        start: '{{ \Carbon\Carbon::parse($booking->start_time)->toIso8601String() }}',  // Format to ISO 8601
                        end: '{{ \Carbon\Carbon::parse($booking->end_time)->toIso8601String() }}',      // Format to ISO 8601
                        id: '{{ $booking->id }}',
                    },
                @endforeach
            ],
           slotDuration: '00:15:00',  
            allDaySlot: false,  
            editable: false,  
            droppable: false, // Disable dragging events (optional)
            dateClick: function(info) {
                // Show the dropdown at the position of the click
                showDropdown(info.jsEvent.pageX, info.jsEvent.pageY, info.dateStr);
            },
            eventClick: function(info) {
                // Redirect to a page to view booking details
                var bookingId = info.event.id;
                window.location.href = '/booking-details/' + bookingId;  // Adjust this URL to match your route
            }
        });
    @endforeach

    // Render the calendars when the tab is shown
    document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(function(tab) {
        tab.addEventListener('shown.bs.tab', function(e) {
            var target = e.target.getAttribute('href').replace('#', '');
            // Render the calendar only for the tab that is shown
            @foreach ($users as $user)
                if (target === 'calendar-tab-{{ $user->id }}') {
                    calendar{{ $user->id }}.render();
                }
            @endforeach
        });
    });

    // Initially render the first calendar
    @foreach ($users as $index => $user)
        @if($index === 0)
            calendar{{ $user->id }}.render();
        @endif
    @endforeach

    // Handle Add Button Logic to auto-select active user
    const addButton = document.querySelector('.add-button');
    if (addButton) {
        addButton.addEventListener('click', function() {
            // Get the ID of the currently active tab (user) inside .calender-users-images
            const activeTab = document.querySelector('.calender-users-images .nav-tabs .nav-link.active');
            
            // Ensure we are targeting the correct user tab within this section
            if (activeTab) {
                const activeUserId = activeTab.getAttribute('data-user-id'); // Get the data-user-id of the active tab
                console.log("Active Tab:", activeTab); // Debugging: Check if the active tab is being selected correctly
                console.log("Active user ID: " + activeUserId); // Debugging: Check if the active user ID is correct

                // Update the select input with the active user's ID
                const userSelect = document.querySelector('select[name="booking_team_member"]');
                if (userSelect) {
                    userSelect.value = activeUserId; // Set the active user's ID as the selected value
                }
            } else {
                console.log("No active user tab found!"); // Debugging if no active user tab is found
            }
        });
    }


    function showDropdown(x, y, dateStr) {
        const dropdown = document.getElementById('calendar-dropdown');
        const offcanvas = document.getElementById('offcanvasRight');
        console.log(dropdown);
        // Position the dropdown at the click location
        dropdown.style.left = `${x}px`;
        dropdown.style.top = `${y}px`;

        // Show the dropdown
        dropdown.classList.add('show');

        // Set the clicked date in the dropdown options (optional)
        dropdown.querySelectorAll('.dropdown-option').forEach(option => {
            option.dataset.date = dateStr;
        });

        

        // Handle the click events on the dropdown items
        dropdown.querySelector('#add-booking').addEventListener('click', function() {
        // Open the offcanvas
        const offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
        offcanvas.show();
        console.log("Opening booking offcanvas for date:", dateStr);
    });

        dropdown.querySelector('#add-block-time').addEventListener('click', function() {
            window.location.href = '/add-block-time?date=' + dateStr;  // Redirect to block time page
        });
    }

    // Hide dropdown when clicking outside
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('calendar-dropdown');
        if (!dropdown.contains(event.target)) {
            dropdown.classList.remove('show');
        }
    });
});


    // working
// document.addEventListener('DOMContentLoaded', function() {
//     // Initialize FullCalendar for each user dynamically
//     @foreach ($users as $user)
//         var calendar{{ $user->id }} = new FullCalendar.Calendar(document.getElementById('calendar-{{ $user->id }}'), {
//             initialView: 'timeGridDay',
//             headerToolbar: {
//                 left: 'prev,next today',
//                 center: 'title',
//                 right: 'timeGridWeek,timeGridDay'
//             },
//             events: [
//                 @foreach ($user->bookings as $booking)
//                     {
//                         title: '{{ $booking->title }}',
//                         start: '{{ \Carbon\Carbon::parse($booking->start_time)->toIso8601String() }}',  // Format to ISO 8601
//                         end: '{{ \Carbon\Carbon::parse($booking->end_time)->toIso8601String() }}',      // Format to ISO 8601
//                         id: '{{ $booking->id }}',
//                     },
//                 @endforeach
//             ],
//            slotDuration: '00:15:00',  
//             allDaySlot: false,  
//             editable: false,  
//             droppable: false, // Disable dragging events (optional)
//             dateClick: function(info) {
//                 alert("You clicked on date: " + info.dateStr);  // Simple message showing the clicked date
//             },
//             eventClick: function(info) {
//                 // Redirect to a page to view booking details
//                 var bookingId = info.event.id;
//                 window.location.href = '/booking-details/' + bookingId;  // Adjust this URL to match your route
//             }
//         });
//     @endforeach

//     // Render the calendars when the tab is shown
//     document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(function(tab) {
//         tab.addEventListener('shown.bs.tab', function(e) {
//             var target = e.target.getAttribute('href').replace('#', '');
//             // Render the calendar only for the tab that is shown
//             @foreach ($users as $user)
//                 if (target === 'calendar-tab-{{ $user->id }}') {
//                     calendar{{ $user->id }}.render();
//                 }
//             @endforeach
//         });
//     });

//     // Initially render the first calendar
//     @foreach ($users as $index => $user)
//         @if($index === 0)
//             calendar{{ $user->id }}.render();
//         @endif
//     @endforeach

//     // Handle Add Button Logic to auto-select active user
//     const addButton = document.querySelector('.add-button');
//     if (addButton) {
//         addButton.addEventListener('click', function() {
//             // Get the ID of the currently active tab (user) inside .calender-users-images
//             const activeTab = document.querySelector('.calender-users-images .nav-tabs .nav-link.active');
            
//             // Ensure we are targeting the correct user tab within this section
//             if (activeTab) {
//                 const activeUserId = activeTab.getAttribute('data-user-id'); // Get the data-user-id of the active tab
//                 console.log("Active Tab:", activeTab); // Debugging: Check if the active tab is being selected correctly
//                 console.log("Active user ID: " + activeUserId); // Debugging: Check if the active user ID is correct

//                 // Update the select input with the active user's ID
//                 const userSelect = document.querySelector('select[name="booking_team_member"]');
//                 if (userSelect) {
//                     userSelect.value = activeUserId; // Set the active user's ID as the selected value
//                 }
//             } else {
//                 console.log("No active user tab found!"); // Debugging if no active user tab is found
//             }
//         });
//     }
// });





// document.addEventListener('DOMContentLoaded', function() {
//     // Initialize FullCalendar for each user dynamically
//     @foreach ($users as $user)
//         var calendar{{ $user->id }} = new FullCalendar.Calendar(document.getElementById('calendar-{{ $user->id }}'), {
//             initialView: 'timeGridDay',
//             headerToolbar: {
//                 left: 'prev,next today',
//                 center: 'title',
//                 right: 'timeGridWeek,timeGridDay'
//             },
//             events: [
//                 @foreach ($user->bookings as $booking)
//                 {
//                     title: '{{ $booking->title }}',
//                     start: '{{ $booking->start_time }}',  // Ensure this is in the format 'YYYY-MM-DD HH:mm:ss'
//                     end: '{{ $booking->end_time }}',      // Ensure this is in the format 'YYYY-MM-DD HH:mm:ss'
//                 },
//             @endforeach
//             ],
//             slotDuration: '00:15:00',
//             allDaySlot: false,
//         });
//     @endforeach

//     // Render the calendars when the tab is shown
//     document.querySelectorAll('a[data-bs-toggle="tab"]').forEach(function(tab) {
//         tab.addEventListener('shown.bs.tab', function(e) {
//             var target = e.target.getAttribute('href').replace('#', '');
//             // Render the calendar only for the tab that is shown
//             @foreach ($users as $user)
//                 if (target === 'calendar-tab-{{ $user->id }}') {
//                     calendar{{ $user->id }}.render();
//                 }
//             @endforeach
//         });
//     });

//     // Initially render the first calendar
//     @foreach ($users as $index => $user)
//         @if($index === 0)
//             calendar{{ $user->id }}.render();
//         @endif
//     @endforeach

//     // Handle Add Button Logic to auto-select active user
//     const addButton = document.querySelector('.add-button');
//     if (addButton) {
//         addButton.addEventListener('click', function() {
//             // Get the ID of the currently active tab (user) inside .calender-users-images
//             const activeTab = document.querySelector('.calender-users-images .nav-tabs .nav-link.active');
            
//             // Ensure we are targeting the correct user tab within this section
//             if (activeTab) {
//                 const activeUserId = activeTab.getAttribute('data-user-id'); // Get the data-user-id of the active tab
//                 console.log("Active Tab:", activeTab); // Debugging: Check if the active tab is being selected correctly
//                 console.log("Active user ID: " + activeUserId); // Debugging: Check if the active user ID is correct

//                 // Update the select input with the active user's ID
//                 const userSelect = document.querySelector('select[name="booking_team_member"]');
//                 if (userSelect) {
//                     userSelect.value = activeUserId; // Set the active user's ID as the selected value
//                 }
//             } else {
//                 console.log("No active user tab found!"); // Debugging if no active user tab is found
//             }
//         });
//     }
// });



// ////////////open offcanvas when admin added client from this page

document.addEventListener('DOMContentLoaded', function () {
        // Check if the client_added session flag exists
    @if(session('client_added'))
        var offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));
        offcanvas.show();  // Show the offcanvas
    @endif
});




////////////selects the service 


document.addEventListener('DOMContentLoaded', function() {
    const rows = document.querySelectorAll('.service-row');

    rows.forEach(row => {
        row.addEventListener('click', function() {
            const serviceId = this.getAttribute('data-service-id');
            const selectedServicesInput = document.getElementById('selected-services');

            // Toggle the selection state
            if (this.classList.contains('table-active')) {
                // Unselect
                this.classList.remove('table-active');
                const services = selectedServicesInput.value.split(',');
                const index = services.indexOf(serviceId);
                if (index > -1) {
                    services.splice(index, 1); // Remove from the list
                }
                selectedServicesInput.value = services.join(',');
            } else {
                // Select
                this.classList.add('table-active');
                const services = selectedServicesInput.value ? selectedServicesInput.value.split(',') : [];
                services.push(serviceId); // Add the service ID
                selectedServicesInput.value = services.join(',');
            }
        });
    });
});



</script>
@endpush