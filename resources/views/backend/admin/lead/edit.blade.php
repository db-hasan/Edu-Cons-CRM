@extends('backend.layouts')
@section('content')
    <style>
        .nav-tabs-bordered .nav-link.active {
            border-bottom: 4px solid #19c745;
        }
    </style>
    <main id="main" class="main pt-0">

        <div class="col-xl-12">

            <div class="card">
                <div class="d-flex justify-content-between  bg-primary-subtle px-4 pt-3">
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

                <div class="card-body pt-3">


                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        {{-- <ul class="nav nav-tabs"> --}}
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
                        <div class="tab-pane fade show active p-3" id="personal">
                            <h5 class="card-title"></h5>
                            <form method="post" action="" enctype="multipart/form-data" class="row g-3">
                                @csrf

                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="number" class="form-label">Phone<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="number">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country<span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State<span class="text-danger">*</span></label>
                                    <select id="state" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City<span class="text-danger">*</span></label>
                                    <select id="city" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address"
                                        placeholder="Apartment, studio, or floor">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="city" class="form-label">Passport<span
                                            class="text-danger">*</span></label>
                                    <select id="city" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Passport Number</label>
                                    <input type="text" class="form-control" id="address">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="address" class="form-label">Passport</label>
                                    <input type="file" class="form-control" id="address"
                                        placeholder="Apartment, studio, or floor">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade pt-3" id="education">
                            <h5 class="card-title"></h5>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#academic" aria-expanded="true" aria-controls="academic">
                                            <h5 class="card-title py-0">Academic Qualification</h5>
                                        </button>
                                    </h2>
                                    <div id="academic" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="" enctype="multipart/form-data"
                                                class="row g-3">
                                                @csrf

                                                <div class="col-md-6">
                                                    <label for="country" class="form-label">Concentration/
                                                        Major/Group<span class="text-danger">*</span></label>
                                                    <select id="country" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>Science</option>
                                                        <option>CSC</option>
                                                        <option>Humanities</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="country" class="form-label">Level of Education<span
                                                            class="text-danger">*</span></label>
                                                    <select id="country" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>HSC</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">CGPA<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Out of Scale<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Course Duration<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Passing Year<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Institute Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Upload Document<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Course Start Date<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="email">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Course End Date<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="email">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">Currently
                                                            Studying</label>
                                                    </div>
                                                </div>




                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary px-4">Close</button>
                                                </div>
                                                <div class="col-12">
                                                    <a href="javascript:void(0)" class="btn text-light fs-5 fw-semibold"
                                                        style="background: #19c745;padding-top: 0px;padding-bottom: 0px;"
                                                        id="addRow">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-node-plus fs-2 me-1"></i>
                                                            <span> Add Education</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#training" aria-expanded="false"
                                            aria-controls="training">
                                            <h5 class="card-title py-0">Training Summary</h5>
                                        </button>
                                    </h2>
                                    <div id="training" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="" enctype="multipart/form-data"
                                                class="row g-3">
                                                @csrf

                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Training Title<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Topics Covered<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Institute Name<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Training Year<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Course Duration<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Upload Document<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>


                                                <div class="col-12 pt-2">
                                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary px-4">Close</button>
                                                </div>
                                                <div class="col-12">
                                                    <a href="javascript:void(0)" class="btn text-light fs-5 fw-semibold"
                                                        style="background: #19c745;padding-top: 0px;padding-bottom: 0px;"
                                                        id="addRow">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-node-plus fs-2 me-1"></i>
                                                            <span> Add Education</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#language" aria-expanded="false"
                                            aria-controls="language">
                                            <h5 class="card-title py-0">Language Proficiency Qualification</h5>
                                        </button>
                                    </h2>
                                    <div id="language" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form method="post" action="" enctype="multipart/form-data"
                                                class="row g-3">
                                                @csrf

                                                <div class="col-md-6">
                                                    <label for="country" class="form-label">Language<span
                                                            class="text-danger">*</span></label>
                                                    <select id="country" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>Science</option>
                                                        <option>CSC</option>
                                                        <option>Humanities</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="country" class="form-label">Proficiency<span
                                                            class="text-danger">*</span></label>
                                                    <select id="country" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>HSC</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Overall Score<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Listening Score<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Reading Score<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Writing Score<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="number" class="form-label">Speaking Score<span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="address" class="form-label">Upload Document<span
                                                            class="text-danger">*</span></label>
                                                    <input type="file" class="form-control" id="address"
                                                        placeholder="">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Examination Date<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="email">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="email" class="form-label">Expiry Date<span
                                                            class="text-danger">*</span></label>
                                                    <input type="date" class="form-control" id="email">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-12 pt-3">
                                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary px-4">Close</button>
                                                </div>
                                                <div class="col-12">
                                                    <a href="javascript:void(0)" class="btn text-light fs-5 fw-semibold"
                                                        style="background: #19c745;padding-top: 0px;padding-bottom: 0px;"
                                                        id="addRow">
                                                        <div class="d-flex align-items-center">
                                                            <i class="bi bi-node-plus fs-2 me-1"></i>
                                                            <span> Add Education</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-3" id="experience">
                            <h5 class="card-title"></h5>
                            <form method="post" action="" enctype="multipart/form-data" class="row g-3">
                                @csrf

                                <div class="col-md-6">
                                    <label for="name" class="form-label">Company Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="number" class="form-label">Designation<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="number">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Job Location<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="email">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6"></div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Joining Date<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="email">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Joining Date<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="email">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">Currently Working</label>
                                    </div>
                                </div>


                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                    <button type="submit" class="btn btn-outline-secondary px-4">Close</button>
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="btn text-light fs-5 fw-semibold"
                                        style="background: #19c745;padding-top: 0px;padding-bottom: 0px;" id="addRow">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-node-plus fs-2 me-1"></i>
                                            <span> Add Education</span>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade pt-3" id="application">
                            <h5 class="card-title"></h5>
                            <form method="post" action="" enctype="multipart/form-data" class="row g-3">
                                @csrf

                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country<span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">State<span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">University <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Campus <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Degree <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Subject <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>UK</option>
                                        <option>USA</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Intake<span
                                            class="text-danger">*</span></label>
                                    <input type="date" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Duration<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Application Fee<span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option>Pending</option>
                                        <option>Paid</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Apply Status <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option>Pending</option>
                                        <option>Applied</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Service Charge <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option>Pending</option>
                                        <option>Paid</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Service Charge Amount<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="country" class="form-label">Tuition Fee <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option>Pending</option>
                                        <option>Paid</option>
                                    </select>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tuition Fee Amount<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tuition Fee Document<span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-primary px-4">Save</button>
                                    <button type="submit" class="btn btn-outline-secondary px-4">Close</button>
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0)" class="btn text-light fs-5 fw-semibold"
                                        style="background: #19c745;padding-top: 0px;padding-bottom: 0px;" id="addRow">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-node-plus fs-2 me-1"></i>
                                            <span> Add Education</span>
                                        </div>
                                    </a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade pt-3" id="security-deposit">
                            <h5 class="card-title"></h5>
                            <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3">
                                @csrf

                                <div class="row mb-3">
                                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Deposit Date<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="date" class="form-control" id="old_password" name="old_password"
                                            value="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Amount</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="number" class="form-control" id="old_password" name="old_password"
                                            value="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Document</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="text" class="form-control" id="old_password" name="old_password"
                                            value="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="old_password" class="col-md-4 col-lg-3 col-form-label">Document
                                        File</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="file" class="form-control" id="old_password" name="old_password"
                                            value="">
                                        @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>




                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade pt-3" id="change-password">
                            <h5 class="card-title"></h5>
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
                                        class="col-md-4 col-lg-3 col-form-label">Confirm
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
                            </form>
                            <!-- End Change Password Form -->

                        </div>
                    </div>

                    <!-- End Bordered Tabs -->
                </div>
            </div>

        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
