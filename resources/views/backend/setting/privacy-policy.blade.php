   
@extends('backend.layouts.admin-master')
@section('title','Privacy Policy')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Privacy Policy</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Privacy Policy</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Privacy Policy</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('admin.privacy_policy.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <!-- Privacy Policy Section -->
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="privacy_policy" class="form-label">Privacy Policy</label>
                                            <textarea class="form-control" name="privacy_policy" id="privacy_policy" rows="7" placeholder="Enter Privacy Policy">{{ old('privacy_policy', $privacyPolicy) }}</textarea>
                                            @error('privacy_policy')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="row mb-3 mt-3">
                                            <div class="col-xxl-3 col-md-6">
                                                <button class="btn btn-primary" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                                <!-- Include CKEditor Script -->
                               
                                
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
 
@push('scripts')
<script>
    $(document).ready(function() {
      $('#privacy_policy').summernote({
        height: 400,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'italic', 'underline', 'clear']],
          ['insert', ['link', 'picture']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['view', ['fullscreen', 'codeview']]
        ]
      });
    });
  </script>
@endpush
