@extends('backend.layouts.admin-master')
@section('title','Clients')
@section('content')
    
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Clients list</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
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
                                    <h3 class="mb-0 d-flex align-items-center flex-grow-1">Clients list
                                        <span class="team-members-count">
                                            2
                                        </span>
                                    </h3>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            {{-- <a href="{{route('admin.client.create')}}"  class="btn btn-primary"><i class="bi bi-plus"></i> Add Client</a> --}}
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div><!-- /btn-group -->
                                        </div>
                                        <a href="{{route('admin.client.create')}}"  class="btn btn-dark">Add</a>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body" style="background: #f8f8fb">
                                    {{-- <div class="live-preview">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0 table-striped category-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="">
                                                <div class="input-group rounded-pill">
                                                    <span class="input-group-text"><i class="ri-search-line"></i></span>
                                                    <input type="search" class="form-control" name="search" placeholder="Search by name or email">
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
                                                <a href="" class="filter-button"> Created at  <i class="ri-menu-add-line" style="margin-left: 5px;"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div><!-- end card-body -->
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Mobile No</th>
                                                <th>Reviews</th>
                                                <th>Sales</th>
                                                <th>Created at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <br>
                                                    <span>johndoe@example.com</span>
                                                </td>
                                                {{-- <td>
                                                    <div>Email: johndoe@example.com</div>
                                                    <div>Phone: +1234567890</div>
                                                </td> --}}
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>19 Oct 2014</td>
                                                {{-- <td>
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
                                                </td> --}}
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
                                                    <br>
                                                    <span>willjack@example.com </span>
                                                </td>
                                                {{-- <td>
                                                    <div>Email: </div>
                                                    <div>Phone: +1234567890</div>
                                                </td> --}}
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>19 Oct 2014</td>
                                                {{-- <td>
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
                                                </td> --}}
                                            </tr>
                                            <!-- More rows can be added here -->
                                        </tbody>
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

                                        {{-- @forelse($users as $user)
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
                                        @endforelse --}}

                                        
                                    </table>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
   
@endsection
    

@push('scripts')
<script>
    // $(document).ready(function() {
    //     $('.category-table').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: '{{ route('admin.client.index') }}',
    //         columns: [
    //             { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
    //             { data: 'fname', name: 'fname' },
    //             { data: 'image', name: 'image' },
    //             { data: 'created_at', name: 'created_at' },
    //             { data: 'action', name: 'action', orderable: false, searchable: false },
    //         ]
    //     });
    // });
</script>
@endpush 

