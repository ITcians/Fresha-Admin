@extends('backend.layouts.admin-master')
@section('title','Add Category')
@push('styles')
    

<style>
    /* css for color select */
    .custom-select {
    position: relative;
    width: 100%;
    cursor: pointer;
}

.selected {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
}

.options {
    display: none; /* Hidden by default */
    border: 1px solid #ccc;
    border-radius: 4px;
    position: absolute;
    background-color: #fff;
    width: 100%;
    z-index: 1;
}

.option {
    padding: 10px;
    display: flex;
    align-items: center;
}

.option:hover {
    background-color: #f1f1f1;
}

.color-circle {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    margin-right: 10px;
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
                        <h4 class="mb-sm-0">Category</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Catalog</a></li>
                                <li class="breadcrumb-item active">Add Category</li>
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
                            <h3 class="mb-0">Add Category
                                <a class="btn btn-danger float-end" href="{{route('admin.catelog.index')}}"> Back</a>
                            </h3>
                        </div><!-- end card header -->
                        <div class="card-body form-steps">
                            <form class="vertical-navs-step" method="POST" action="{{route('admin.category.store')}}">
                                @csrf
                                <div class="row gy-5">
                                    <div class="col-lg-6 m-auto mt-5">
                                                    
                                        <div>
                                            <div class="row g-3">
                                                <div class="col-sm-12">
                                                    <label for="firstName" class="form-label">Category name</label>
                                                    <input type="text" class="form-control" id="category" name="category" placeholder="e.g. Hair Services" value="">
                                                </div>


                                                {{-- <div class="col-md-12">
                                                    <label for="phone" class="form-label">Appointment color</label>
                                                    <select name="" class="form-select" id="">
                                                        <option value="" >Blue</option>
                                                        <option value="" >Dark Blue</option>
                                                        <option value="" >Jordy Blue</option>
                                                        <option value="" >Indigo</option>
                                                        <option value="" >Lavender</option>
                                                        <option value="" >Purple</option>
                                                        <option value="" >Wisteria</option>
                                                        <option value="" >Pink</option>
                                                        <option value="" >Coral</option>
                                                        <option value="" >Blood Orange</option>
                                                        <option value="" >Blood</option>
                                                        <option value="" >Amber</option>
                                                        <option value="" >Yellow</option>
                                                        <option value="" >Lime</option>
                                                        <option value="" >Green</option>
                                                        <option value="" >Teal</option>
                                                        <option value="" >Cyan</option>
                                                    </select>
                                                </div> --}}
                                                {{-- <div class="col-md-12">
                                                    <label for="appointmentColor" class="form-label">Appointment color</label>
                                                    <div class="custom-select">
                                                        <div class="selected" id="selectedColor">Select a color</div>
                                                        <div class="options" id="colorOptions">
                                                            <div class="option" data-value="blue">
                                                                <span class="color-circle" style="background-color: blue;"></span> Blue
                                                            </div>
                                                            <div class="option" data-value="darkBlue">
                                                                <span class="color-circle" style="background-color: darkblue;"></span> Dark Blue
                                                            </div>
                                                            <div class="option" data-value="jordyBlue">
                                                                <span class="color-circle" style="background-color: #6cc5f2;"></span> Jordy Blue
                                                            </div>
                                                            <div class="option" data-value="indigo">
                                                                <span class="color-circle" style="background-color: indigo;"></span> Indigo
                                                            </div>
                                                            <div class="option" data-value="lavender">
                                                                <span class="color-circle" style="background-color: lavender;"></span> Lavender
                                                            </div>
                                                            <div class="option" data-value="purple">
                                                                <span class="color-circle" style="background-color: purple;"></span> Purple
                                                            </div>
                                                            <div class="option" data-value="wisteria">
                                                                <span class="color-circle" style="background-color: #a26dc1;"></span> Wisteria
                                                            </div>
                                                            <div class="option" data-value="pink">
                                                                <span class="color-circle" style="background-color: pink;"></span> Pink
                                                            </div>
                                                            <div class="option" data-value="coral">
                                                                <span class="color-circle" style="background-color: coral;"></span> Coral
                                                            </div>
                                                            <div class="option" data-value="bloodOrange">
                                                                <span class="color-circle" style="background-color: #ff4500;"></span> Blood Orange
                                                            </div>
                                                            <div class="option" data-value="blood">
                                                                <span class="color-circle" style="background-color: #b00000;"></span> Blood
                                                            </div>
                                                            <div class="option" data-value="amber">
                                                                <span class="color-circle" style="background-color: #ffbf00;"></span> Amber
                                                            </div>
                                                            <div class="option" data-value="yellow">
                                                                <span class="color-circle" style="background-color: yellow;"></span> Yellow
                                                            </div>
                                                            <div class="option" data-value="lime">
                                                                <span class="color-circle" style="background-color: lime;"></span> Lime
                                                            </div>
                                                            <div class="option" data-value="green">
                                                                <span class="color-circle" style="background-color: green;"></span> Green
                                                            </div>
                                                            <div class="option" data-value="teal">
                                                                <span class="color-circle" style="background-color: teal;"></span> Teal
                                                            </div>
                                                            <div class="option" data-value="cyan">
                                                                <span class="color-circle" style="background-color: cyan;"></span> Cyan
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                {{-- <div class="col-md-12">
                                                    <label for="appointmentColor" class="form-label">Appointment color</label>
                                                    <div class="custom-select">
                                                        <div class="selected" id="selectedColor">Select a color</div>
                                                        <div class="options" id="colorOptions">
                                                            <div class="option" data-value="blue">
                                                                <span class="color-circle" style="background-color: blue;"></span> Blue
                                                            </div>
                                                            <div class="option" data-value="darkBlue">
                                                                <span class="color-circle" style="background-color: darkblue;"></span> Dark Blue
                                                            </div>
                                                            <!-- Add other options here -->
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="col-md-12">
                                                    <label for="appointmentColor" class="form-label">Appointment color</label>
                                                    <div class="custom-select">
                                                        <div class="selected" id="selectedColor">Select a color</div>
                                                        <div class="options" id="colorOptions">
                                                            <div class="option" data-value="blue">
                                                                <span class="color-circle" style="background-color: blue;"></span> Blue
                                                            </div>
                                                            <div class="option" data-value="darkBlue">
                                                                <span class="color-circle" style="background-color: darkblue;"></span> Dark Blue
                                                            </div>
                                                            <div class="option" data-value="jordyBlue">
                                                                <span class="color-circle" style="background-color: #6cc5f2;"></span> Jordy Blue
                                                            </div>
                                                            <div class="option" data-value="indigo">
                                                                <span class="color-circle" style="background-color: indigo;"></span> Indigo
                                                            </div>
                                                            <div class="option" data-value="lavender">
                                                                <span class="color-circle" style="background-color: lavender;"></span> Lavender
                                                            </div>
                                                            <div class="option" data-value="purple">
                                                                <span class="color-circle" style="background-color: purple;"></span> Purple
                                                            </div>
                                                            <div class="option" data-value="wisteria">
                                                                <span class="color-circle" style="background-color: #a26dc1;"></span> Wisteria
                                                            </div>
                                                            <div class="option" data-value="pink">
                                                                <span class="color-circle" style="background-color: pink;"></span> Pink
                                                            </div>
                                                            <div class="option" data-value="coral">
                                                                <span class="color-circle" style="background-color: coral;"></span> Coral
                                                            </div>
                                                            <div class="option" data-value="bloodOrange">
                                                                <span class="color-circle" style="background-color: #ff4500;"></span> Blood Orange
                                                            </div>
                                                            <div class="option" data-value="blood">
                                                                <span class="color-circle" style="background-color: #b00000;"></span> Blood
                                                            </div>
                                                            <div class="option" data-value="amber">
                                                                <span class="color-circle" style="background-color: #ffbf00;"></span> Amber
                                                            </div>
                                                            <div class="option" data-value="yellow">
                                                                <span class="color-circle" style="background-color: yellow;"></span> Yellow
                                                            </div>
                                                            <div class="option" data-value="lime">
                                                                <span class="color-circle" style="background-color: lime;"></span> Lime
                                                            </div>
                                                            <div class="option" data-value="green">
                                                                <span class="color-circle" style="background-color: green;"></span> Green
                                                            </div>
                                                            <div class="option" data-value="teal">
                                                                <span class="color-circle" style="background-color: teal;"></span> Teal
                                                            </div>
                                                            <div class="option" data-value="cyan">
                                                                <span class="color-circle" style="background-color: cyan;"></span> Cyan
                                                            </div>
                                                            <!-- Add other options here -->
                                                        </div>
                                                    </div>
                                                </div> --}}

                                                <div class="col-md-12">
                                                    <label for="appointmentColor" class="form-label">Appointment color</label>
                                                    <div class="custom-select">
                                                        <div class="selected" id="selectedColor">Select a color</div>
                                                        <div class="options" id="colorOptions">
                                                            <div class="option" data-value="blue">
                                                                <span class="color-circle" style="background-color: blue;"></span> Blue
                                                            </div>
                                                            <div class="option" data-value="darkBlue">
                                                                <span class="color-circle" style="background-color: darkblue;"></span> Dark Blue
                                                            </div>
                                                            <div class="option" data-value="jordyBlue">
                                                                <span class="color-circle" style="background-color: #6cc5f2;"></span> Jordy Blue
                                                            </div>
                                                            <div class="option" data-value="indigo">
                                                                <span class="color-circle" style="background-color: indigo;"></span> Indigo
                                                            </div>
                                                            <div class="option" data-value="lavender">
                                                                <span class="color-circle" style="background-color: lavender;"></span> Lavender
                                                            </div>
                                                            <div class="option" data-value="purple">
                                                                <span class="color-circle" style="background-color: purple;"></span> Purple
                                                            </div>
                                                            <div class="option" data-value="wisteria">
                                                                <span class="color-circle" style="background-color: #a26dc1;"></span> Wisteria
                                                            </div>
                                                            <div class="option" data-value="pink">
                                                                <span class="color-circle" style="background-color: pink;"></span> Pink
                                                            </div>
                                                            <div class="option" data-value="coral">
                                                                <span class="color-circle" style="background-color: coral;"></span> Coral
                                                            </div>
                                                            <div class="option" data-value="bloodOrange">
                                                                <span class="color-circle" style="background-color: #ff4500;"></span> Blood Orange
                                                            </div>
                                                            <div class="option" data-value="blood">
                                                                <span class="color-circle" style="background-color: #b00000;"></span> Blood
                                                            </div>
                                                            <div class="option" data-value="amber">
                                                                <span class="color-circle" style="background-color: #ffbf00;"></span> Amber
                                                            </div>
                                                            <div class="option" data-value="yellow">
                                                                <span class="color-circle" style="background-color: yellow;"></span> Yellow
                                                            </div>
                                                            <div class="option" data-value="lime">
                                                                <span class="color-circle" style="background-color: lime;"></span> Lime
                                                            </div>
                                                            <div class="option" data-value="green">
                                                                <span class="color-circle" style="background-color: green;"></span> Green
                                                            </div>
                                                            <div class="option" data-value="teal">
                                                                <span class="color-circle" style="background-color: teal;"></span> Teal
                                                            </div>
                                                            <div class="option" data-value="cyan">
                                                                <span class="color-circle" style="background-color: cyan;"></span> Cyan
                                                            </div>
                                                            <!-- Add other color options here -->
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="color" id="selectedColorValue"> <!-- Hidden input for color -->
                                                </div>
                                                
                                                
                                                
                                                
                                                <div class="col-md-12">
                                                    <label for="phone" class="form-label">Description</label>
                                                    <textarea name="description" class="form-control" id=""  rows="7"></textarea>
                                                </div>
                                        
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start gap-3 mt-4">
                                            <button type="submit" class="btn btn-success btn-label right ms-auto"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Save</button>
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
        </div><!-- container-fluid -->
    </div><!-- End Page-content -->
</div><!-- end main content -->

@endsection

@push('scripts')
<script src="{{asset('assets/backend/js/pages/form-wizard.init.js')}}"></script>
    


<script>







    document.querySelectorAll('.user-icon').forEach(icon => {
    const name = icon.nextElementSibling.textContent; // Get the name from the span
    const firstLetter = name.charAt(0).toUpperCase(); // Get the first letter
    icon.querySelector('.placeholder').textContent = firstLetter; // Set it to the placeholder
});






///////////checkbox for address

document.querySelector('.selected').addEventListener('click', function() {
    const options = document.getElementById('colorOptions');
    options.style.display = options.style.display === 'block' ? 'none' : 'block';
});

document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        document.getElementById('selectedColor').textContent = this.textContent;
        document.getElementById('selectedColorValue').value = value; // Set the hidden input value
        document.getElementById('colorOptions').style.display = 'none';
    });
});

window.addEventListener('click', function(e) {
    if (!document.querySelector('.custom-select').contains(e.target)) {
        document.getElementById('colorOptions').style.display = 'none';
    }
});




</script>
@endpush