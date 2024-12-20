@extends('backend.layouts')
@section('content')
    <main id="main" class="main">

        <div class="d-flex justify-content-between align-items-top">
            <div class="pagetitle mb-0">
                <h1>Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>


        <section class="section profile">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $users->name }}</h4>
                                    <p class="text-secondary mb-1">{{ $users->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>

                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title"></h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $users->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Job Title</div>
                                        <div class="col-lg-9 col-md-8">{{ $users->roles }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $users->email }}</div>
                                    </div>



                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $users->number }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8">Dhaka Bangladesh</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status</div>
                                        <div class="col-lg-9 col-md-8">
                                            @if ($users->status == 1)
                                                Active
                                            @elseif($users->status == 2)
                                                Inactive
                                            @endif
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Current
                                                Password<span class="text-danger">*</span></label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="password" class="form-control" id="old_password"
                                                    name="old_password" value="">
                                                @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="new_password" class="col-md-4 col-lg-3 col-form-label">New
                                                Password<span class="text-danger">*</span></label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password" value="">
                                                @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="new_password_confirmation"
                                                class="col-md-4 col-lg-3 col-form-label">Confirm Password<span
                                                    class="text-danger">*</span></label>
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
            </div>
        </section>
    </main>
@endsection
