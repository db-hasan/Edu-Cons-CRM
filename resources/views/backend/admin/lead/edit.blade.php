@extends('backend.layouts')
@section('content')
    <style>
        .nav-tabs-bordered .nav-link.active {
            background-color: #121010d9 !important;
            color: #fff;
            border-bottom: 4px solid #19c745;
        }
    </style>
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Student Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    {{-- <ul class="nav nav-tabs nav-tabs-bordered"> --}}
                    <ul class="nav nav-tabs">
                        <li class="nav-item ">
                            <button class="nav-link px-4 card-title active" data-bs-toggle="tab"
                                data-bs-target="#personal">Personal
                                <br>
                                Information</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link px-4 card-title" data-bs-toggle="tab"
                                data-bs-target="#education">Education <br>
                                Training</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link px-4 card-title" data-bs-toggle="tab"
                                data-bs-target="#experience">Working <br>
                                Experience</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link px-4 card-title" data-bs-toggle="tab"
                                data-bs-target="#application">Addmission <br>
                                Application</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link px-4 card-title" data-bs-toggle="tab"
                                data-bs-target="#security-deposit">Security
                                <br>
                                Deposit</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link px-4 card-title" data-bs-toggle="tab"
                                data-bs-target="#change-password">Change <br>
                                Password</button>
                        </li>
                    </ul>

                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active" id="personal">
                            <h5 class="card-title">Address personal</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address personal</div>
                                <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="education">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address education</div>
                                <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="experience">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address experience</div>
                                <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="application">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address experience</div>
                                <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="security-deposit">
                            <h5 class="card-title"></h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">security-deposit</div>
                                <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                            </div>
                        </div>


                        <div class="tab-pane fade pt-3" id="change-password">
                            <!-- Change Password Form -->
                            <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3">
                                @csrf

                                <div class="row mb-3">
                                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Current
                                        Password<span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" class="form-control" id="old_password" name="old_password"
                                            value="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New
                                        Password<span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" class="form-control" id="new_password" name="new_password"
                                            value="">
                                        @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="new_password_confirmation" class="col-md-4 col-lg-3 col-form-label">Confirm
                                        Password<span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="password" class="form-control" id="new_password_confirmation"
                                            name="new_password_confirmation" value="">
                                        @error('new_password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
