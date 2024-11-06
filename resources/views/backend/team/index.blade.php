@extends('backend.layouts.admin-master')
@section('title','Teams')
@push('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"> --}}

<style>


.nav-pills {
    --vz-nav-pills-border-radius: var(--vz-border-radius);
    --vz-nav-pills-link-active-color: #302d2d;
    --vz-nav-pills-link-active-bg: #cad3f0;
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
                                <h4 class="mb-sm-0">Teams</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Teams</a></li>
                                        <li class="breadcrumb-item active">Index</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
        
                    <div class="row">
                        <div class="col-xxl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-team-members-tab" data-bs-toggle="pill" href="#v-pills-team-members" role="tab" aria-controls="v-pills-team-members" aria-selected="true">Team Members</a>
                                                <a class="nav-link mb-2" id="v-pills-schedule-shifts-tab" data-bs-toggle="pill" href="#v-pills-schedule-shifts" role="tab" aria-controls="v-pills-schedule-shifts" aria-selected="false">Schedule Shifts</a>
                                                
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
                                                                        Team members 
                                                                        @php
                                                                            $userCount = App\Models\User::where('role', '!=', '1')->count();
                                                                        @endphp

                                                                        <span class="team-members-count">
                                                                            {{$userCount}}
                                                                        </span>
                                                                    </h3>
                                                                    
                                                                    <div class="flex-shrink-0">
                                                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                                                            <select name="" id="" class="form-select">
                                                                                <option value=""><strong>Options</strong></option>
                                                                                <option value="">PDF</option>
                                                                                <option value="">CSV</option>
                                                                                <option value="">Excel</option>
                                                                            </select>
                                                                        </div>
                                                                        <a href="{{route('admin.team.create')}}" class="btn btn-dark">Add</a>
                                                                    </div>
                                                                </div><!-- end card header -->
                                                                <div class="card-body" style="background: #f8f8fb">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <form action="">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                                                    <input type="search" class="form-control" name="search" placeholder="Search Team Member">
                                                                                </div>
                                                                                
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="filters">
                                                                                <a href="" class="filter-button">Filters<i class="ri-sound-module-line" style="margin-left: 5px;" ></i></a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div class="filters float-end">
                                                                                <a href="" class="filter-button"> Custome Order  <i class="ri-menu-add-line" style="margin-left: 5px;"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                </div><!-- end card-body -->
                                                            </div><!-- end card -->
                                                            
                                                    
                                                            <div class="row">
                                                                <!-- Transaction Summary Card -->
                                                                <div class="col-md-12">
                                                                    <div class="card bordered">
                                                                        
                                                                        <div class="card-body">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Name</th>
                                                                                        <th>Contact</th>
                                                                                        <th>Rating</th>
                                                                                        <th>Actions</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                {{-- <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <!-- User Image -->
                                                                                                <img src="path/to/image.jpg" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <!-- Placeholder for Initial -->
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    J
                                                                                                </div>
                                                                                            </div>
                                                                                            <span>John Doe</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>Email: johndoe@example.com</div>
                                                                                            <div>Phone: +1234567890</div>
                                                                                        </td>
                                                                                        <td>No Rating</td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-light rounded-pill dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    Actions
                                                                                                </button>
                                                                                                <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <!-- User Image -->
                                                                                                <img src="path/to/image.jpg" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <!-- Placeholder for Initial -->
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    J
                                                                                                </div>
                                                                                            </div>
                                                                                            <span>Will Jack </span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>Email: willjack@example.com</div>
                                                                                            <div>Phone: +1234567890</div>
                                                                                        </td>
                                                                                        <td>No Rating</td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-light rounded-pill  dropdown-toggle" type="button" id="actionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    Actions
                                                                                                </button>
                                                                                                <ul class="dropdown-menu" aria-labelledby="actionsDropdown">
                                                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <!-- More rows can be added here -->
                                                                                </tbody> --}}
                                                                                {{-- <tbody>
                                                                                    @foreach($users as $user)
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                    <!-- User Image -->
                                                                                                    <img src="{{ $user->profile_image ?? 'path/to/default/image.jpg' }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                    <!-- Placeholder for Initial -->
                                                                                                    <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                        {{ strtoupper(substr($user->fname, 0, 1)) }}   <!-- First letter of the name -->
                                                                                                    </div>
                                                                                                </div>
                                                                                                <span>{{ $user->fname }} {{ $user->lname }} </span>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div>Email: {{ $user->email }}</div>
                                                                                                <div>Phone: {{ $user->phone }}</div>
                                                                                            </td>
                                                                                            <td>No Rating</td>
                                                                                            <td>
                                                                                                <div class="dropdown">
                                                                                                    <button class="btn btn-light rounded-pill dropdown-toggle" type="button" id="actionsDropdown{{ $user->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                        Actions
                                                                                                    </button>
                                                                                                    <ul class="dropdown-menu" aria-labelledby="actionsDropdown{{ $user->id }}">
                                                                                                        <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                        <li><a class="dropdown-item text-danger" href="#" onclick="deleteUser({{ $user->id }})">Delete</a></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach
                                                                                </tbody> --}}

                                                                                @forelse($users as $user)
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div class="user-icon" style="display: flex; align-items: center;">
                                                                                                <img src="{{asset( $user->image) ?? 'path/to/default/image.jpg' }}" alt="Member Image" class="rounded-circle" style="width: 40px; height: 40px;" onerror="this.style.display='none'; this.parentNode.querySelector('.placeholder').style.display='flex';">
                                                                                                <div class="placeholder rounded-circle" style="width: 40px; height: 40px; background-color: #007bff; color: white; display: none; align-items: center; justify-content: center; font-weight: bold;">
                                                                                                    {{ strtoupper(substr($user->fname, 0, 1)) }}
                                                                                                </div>
                                                                                            </div>
                                                                                            <span>{{ $user->fname }} {{ $user->lname }}</span>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div>Email: {{ $user->email }}</div>
                                                                                            <div>Phone: {{ $user->phone }}</div>
                                                                                        </td>
                                                                                        <td>No Rating</td>
                                                                                        <td>
                                                                                            <div class="dropdown">
                                                                                                <button class="btn btn-light rounded-pill dropdown-toggle" type="button" id="actionsDropdown{{ $user->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                                    Actions
                                                                                                </button>
                                                                                                <ul class="dropdown-menu" aria-labelledby="actionsDropdown{{ $user->id }}">
                                                                                                    <li><a class="dropdown-item" href="#">View</a></li>
                                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                                    <li><a class="dropdown-item text-danger" href="#" onclick="deleteUser({{ $user->id }}, this.closest('tr'))">Delete</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @empty
                                                                                    <tr>
                                                                                        <td colspan="4" >No Team member available</td>
                                                                                    </tr>
                                                                                @endforelse

                                                                                
                                                                            </table>
                                                                        </div><!-- end card-body -->
                                                                        
                                                                        
                                                                        
                                                                    </div><!-- end card -->
                                                                </div><!-- end col -->
                                                                
                                                            </div><!-- end row -->
                                                        </div><!-- end col -->
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-schedule-shifts" role="tabpanel" aria-labelledby="v-pills-schedule-shifts-tab">
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- <!-- Include SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<!-- Include jQuery (if not already included) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}



<!-- Include SweetAlert JS -->

{{-- 
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
    </script> --}}


<script>
    document.querySelectorAll('.user-icon').forEach(icon => {
    const name = icon.nextElementSibling.textContent; // Get the name from the span
    const firstLetter = name.charAt(0).toUpperCase(); // Get the first letter
    icon.querySelector('.placeholder').textContent = firstLetter; // Set it to the placeholder
});




////////////delete user

// $(document).on('click', '.delete-user', function(e) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     e.preventDefault();
//     var userId = $(this).data('id');
//     var row = $(this).closest('tr'); // Get the closest table row

//     // Show SweetAlert confirmation
//     swal.fire({
//         title: "Are you sure?",
//         text: "You will not be able to recover this user!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     }).then((willDelete) => {
//         if (willDelete) {
//             // Perform the AJAX request to delete the user
//             $.ajax({
//                 url: '/users/' + userId,
//                 type: 'DELETE',
//                 success: function(response) {
//                     swal("Poof! Your user has been deleted!", {
//                         icon: "success",
//                     }).then(() => {
//                         // Remove the row from the table
//                         row.remove();
//                     });
//                 },
//                 error: function(xhr) {
//                     swal("Error!", "There was an issue deleting the user.", "error");
//                 }
//             });
//         } else {
//             swal("Your user is safe!");
//         }
//     });
// });


$(document).ready(function() {
    // Set the CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});


// function deleteUser(userId, row) {
//     Swal.fire({
//         title: 'Are you sure?',
//         text: 'You won\'t be able to revert this!',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#d33',
//         cancelButtonColor: '#3085d6',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             $.ajax({
//                 url: '/users/' + userId, // Make sure this matches your route
//                 type: 'DELETE',
//                 success: function(response) {
//                     // Remove the user row from the table
//                     Swal.fire('Deleted!', 'Your user has been deleted.', 'success');
//                     window.location.reload();
//                 },
//                 error: function(xhr) {
//                     Swal.fire('Error!', 'Error deleting user: ' + xhr.responseText, 'error');
//                 }
//             });
//         }
//     });
// }

function deleteUser(userId, row) {
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
                url: '/users/' + userId, // Make sure this matches your route
                type: 'DELETE',
                success: function(response) {
                    // Remove the user row from the table
                    Swal.fire('Deleted!', 'Your user has been deleted.', 'success').then(() => {
                        // Reload the page after confirmation
                        window.location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Error deleting user: ' + xhr.responseText, 'error');
                }
            });
        }
    });
}



// function confirmDelete(userId) {
//     const title = 'Delete Client!';
//     const text = "Are you sure you want to delete?";

//     Swal.fire({
//         title: title,
//         text: text,
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#d33',
//         cancelButtonColor: '#3085d6',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // Perform the delete action
//             deleteUser(userId);
//         }
//     });
// }

// function deleteUser(userId) {
//     // Make an AJAX request to delete the user
//     $.ajax({
//         url: '/users/' + userId, // Adjust this URL to match your route
//         type: 'DELETE',
//         success: function(response) {
//             Swal.fire(
//                 'Deleted!',
//                 'The user has been deleted.',
//                 'success'
//             );

//             // Optionally, remove the user row from the table
//             // If you have jQuery:
//             $('tr').find(`button[id="actionsDropdown${userId}"]`).closest('tr').remove();
//         },
//         error: function(xhr) {
//             Swal.fire(
//                 'Error!',
//                 'There was a problem deleting the user.',
//                 'error'
//             );
//         }
//     });
// }


</script>
@endpush 

