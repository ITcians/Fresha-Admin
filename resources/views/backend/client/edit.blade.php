   
@extends('backend.layouts.admin-master')
@section('title','Admin Dashboard | Edit Category')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Esit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                                <li class="breadcrumb-item active">Edit Category</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit Category</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{route('admin.client.index')}}" class="btn btn-danger btn-sm">Back</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{route('admin.client.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="placeholderInput" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Category Name" value="{{$category->name}}">
                                            @error('name')
                                                <span class="text-danger" >{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label for="valueInput" class="form-label">Category Image</label>
                                            <input type="file" class="form-control" name="image" id="valueInput">
                                            <img src="{{asset('assets/backend/uploads/category/'.$category->image)}}" class="mt-3" width="70" alt="">
                                            @error('image')
                                                <span class="text-danger" >{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-12 col-md-12">
                                        <div>
                                            <label for="exampleFormControlTextarea5" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Category Descrition">{{$category->description}}</textarea>
                                        </div>
                                        @error('description')
                                            <span class="text-danger" >{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!--end col-->
                                    <div class="row mb-3 mt-3">
                                        <div class="col-xxl-3 col-md-6">
                                            <div class="form-floating">
                                            <button class="btn btn-primary" type="submit" >Submit</button>
                                            </div>
                                        </div>
                                     </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
   
</div>

@endsection
 

