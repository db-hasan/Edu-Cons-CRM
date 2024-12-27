@extends('backend.layouts')
@section('content')
    <style>
        .nav-tabs-bordered .nav-link.active {
            border-bottom: 4px solid #19c745;
        }

        .form-label {
            font-weight: 600 !important;
            color: #595959;
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

                            <div class="">
                                <div class="">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Personal Details</h5>
                                        <div class="">
                                            <a href="" class="btn btn-primary" id="edit">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-success" id="show">
                                                <i class="bi bi-eye-slash"></i> View
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-3 pb-3" id="view">
                                        <div class="col-md-6">
                                            <label class="form-label">First Name</label>
                                            <div class="">Ali</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name</label>
                                            <div class="">Hasan</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Email</label>
                                            <div class="">ahasan.jobs@gmail.com</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone</label>
                                            <div class="">01723629080</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Father's Name</label>
                                            <div class="">Nurul Islam</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Mother's Name</label>
                                            <div class="">Amena Bibi</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Date of Birth</label>
                                            <div class="">10/08/1996</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Gender</label>
                                            <div class="">Male</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Religion</label>
                                            <div class="">Islam</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Marital Status</label>
                                            <div class="">Unmarried</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Blood Group</label>
                                            <div class="">B+(ve)</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Images</label>
                                            <div class="">View</div>
                                        </div>
                                    </div>
                                    <form method="post" action="" id="update" class="row g-3 d-none"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="col-md-6">
                                            <label for="name" class="form-label">First Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Last Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="number" class="form-label">Primary Mobile <span
                                                    class="text-danger">*</span> <small class="text-info">(Provide at
                                                    least one
                                                    Phone Number)</small></label>
                                            <div class="row">
                                                <div class="col-5">
                                                    <select id="country" class="form-select me-2">
                                                        <option selected>Choose...</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Others</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-7">
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="number" class="form-label">Father's Name</label>
                                            <input type="number" class="form-control" id="number">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="number" class="form-label">Mother's Name</label>
                                            <input type="number" class="form-control" id="number">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Date of Birth<span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="email">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Gender<span
                                                    class="text-danger">*</span></label>
                                            <select id="country" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Religion<span
                                                    class="text-danger">*</span></label>
                                            <select id="country" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Marital Status<span
                                                    class="text-danger">*</span></label>
                                            <select id="country" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="country" class="form-label">Blood Group</label>
                                            <select id="country" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Images<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="address" placeholder="">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Emergency Contact</h5>
                                        <div class="">
                                            <a href="" class="btn btn-primary" id="edit">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-success" id="show">
                                                <i class="bi bi-eye-slash"></i> View
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-3 pb-3" id="view">
                                        <div class="col-md-6">
                                            <label class="form-label">Relation</label>
                                            <div class="">Father</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Name</label>
                                            <div class="">Nurul Islam</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Phone</label>
                                            <div class="">01723629080</div>
                                        </div>
                                    </div>
                                    <form method="post" action="" id="update" class="row g-3 d-none"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Relation<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Name<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="number" class="form-label">Phone Number <span
                                                    class="text-danger">*</span> <small class="text-info">(Provide at
                                                    least
                                                    one
                                                    Phone Number)</small></label>
                                            <div class="row">
                                                <div class="col-5">
                                                    <select id="country" class="form-select me-2">
                                                        <option selected>Choose...</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                        <option>Others</option>
                                                    </select>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-7">
                                                    <input type="number" class="form-control" id="number">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                                <div class="">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Address Details</h5>
                                        <div class="">
                                            <a href="" class="btn btn-primary" id="edit">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-success" id="show">
                                                <i class="bi bi-eye-slash"></i> View
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-3 pb-3" id="view">
                                        <div class="col-md-12">
                                            <label class="form-label">Address</label>
                                            <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                                                Shibganj,
                                                Bogura 5810</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Nationality</label>
                                            <div class="">Bangladesh</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">National Id</label>
                                            <div class="">120 251 2728</div>
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label">Document</label>
                                            <div class="">View</div>
                                        </div>
                                    </div>
                                    <form method="post" action="" id="update" class="row g-3 d-none"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

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
                                            <label for="state" class="form-label">State<span
                                                    class="text-danger">*</span></label>
                                            <select id="state" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="city" class="form-label">City<span
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
                                            <label for="address" class="form-label">Address<span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address"
                                                placeholder="Apartment, studio, or floor">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Nationality<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">National Id<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">National Id Document<span
                                                    class="text-danger">*</span></label>
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

                                <div class="">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h5 class="card-title">Passport Details</h5>
                                        <div class="">
                                            <a href="" class="btn btn-primary" id="edit">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                            <a href="" class="btn btn-success" id="show">
                                                <i class="bi bi-eye-slash"></i> View
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row g-3 pb-3" id="view">
                                        <div class="col-md-6">
                                            <label class="form-label">Passport Number</label>
                                            <div class="">120 251 2728</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Document</label>
                                            <div class="">View</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Issue Date</label>
                                            <div class="">10/08/2020</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Expiry Date</label>
                                            <div class="">10/08/2030</div>
                                        </div>
                                    </div>
                                    <form method="post" action="" id="update" class="row g-3 d-none"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Passport Number<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Passport Document<span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Issue Date<span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Expiry Date<span
                                                    class="text-danger">*</span></label>
                                            <input type="date" class="form-control" id="address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

                                <div class="col-md-6">
                                    <label for="country" class="form-label">Admitted University <span
                                            class="text-danger">*</span></label>
                                    <select id="country" class="form-select">
                                        <option>Pending</option>
                                        <option>Admitted</option>
                                    </select>
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

                        </div>
                    </div>

                    <!-- End Bordered Tabs -->
                </div>
            </div>

        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
    <script>
        $(document).ready(function() {
            // When the "Edit" button is clicked
            $('#edit').on('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                $('#view').addClass('d-none'); // Hide the view section
                $('#update').removeClass('d-none'); // Show the update form
            });

            // When the "View" button is clicked
            $('#show').on('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                $('#update').addClass('d-none'); // Hide the update form
                $('#view').removeClass('d-none'); // Show the view section
            });
        });
    </script>
@endsection
