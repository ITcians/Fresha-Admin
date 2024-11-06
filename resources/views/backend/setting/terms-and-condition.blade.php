   
@extends('backend.layouts.admin-master')
@section('title','Terms and Conditions')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Terms and Conditions</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                                <li class="breadcrumb-item active">Terms and Conditions</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Terms and Conditions</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('admin.terms_and_conditions.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <!-- Terms and Conditions Section -->
                                        <div class="col-xxl-12 col-md-12">
                                            <label for="terms_and_conditions" class="form-label">Terms and Conditions</label>
                                            <textarea class="form-control" name="terms_and_conditions" id="terms_and_conditions" rows="7" placeholder="Enter Terms and Conditions">{{ old('terms_and_conditions', $termsAndConditions) }}</textarea>
                                            @error('terms_and_conditions')
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
    $('#terms_and_conditions').summernote({
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
