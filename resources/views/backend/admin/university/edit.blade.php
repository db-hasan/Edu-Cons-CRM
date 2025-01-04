@extends('backend.layouts')
@section('content')
    <main id="main" class="main pt-0">
        <div class="card">
            <div class="d-flex justify-content-between  bg-success-subtle px-4 pt-3">
                <div class="pagetitle">
                    <h1>University Details</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="text-end pt-2">
                    <a href="{{ route('university.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                        View
                        University</a>
                </div>
            </div>

            <div class="p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title"></h5>
                    <div>
                        <a href="" class="btn btn-primary edit-btn" id="edit-address">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="" class="btn btn-success view-btn" id="view-address">
                            <i class="bi bi-eye-slash"></i> View
                        </a>
                    </div>
                </div>
                <div class="row show-section" id="show-address">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h2 class="mb-0">Malaysia University</h2>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-crosshair px-2"></i><strong>Country:</strong> Malaysia, Dhaka-Bangladesh
                                </li>
                                <li><i class="bi bi-bar-chart px-2"></i><strong>Ranking:</strong> 10</li>
                                <li><i class="bi bi-coin px-2"></i><strong>Application Fees: </strong> 1000</li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{ asset('images/hasan.jpg') }}" alt="Profile Picture"
                                style="width: 100px; height: auto;">
                        </div>
                    </div>
                    <div class="col-md-12 pagetitle py-4">
                        <h1 class="mb-2">University Campus:</h1>
                        <div class="row g-3 ps-1">
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="pagetitle card p-4">
                        <h1 class="mb-3">Language Proficiency Qualification:</h1>
                        <div class="custom-scrollbar-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="align-top">Proficiency Test</th>
                                        <th class="align-top text-end">Overall <br> Score</th>
                                        <th class="align-top text-end">Listening <br> Score</th>
                                        <th class="align-top text-end">Reading <br> Score</th>
                                        <th class="align-top text-end">Writing <br> Score</th>
                                        <th class="align-top text-end">Speaking <br> Score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IELTS</td>
                                        <td>4.00</td>
                                        <td>2.00</td>
                                        <td>3.00</td>
                                        <td>4.00</td>
                                        <td>4.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card p-4">
                        <label class="form-label"><strong>Scholarship:</strong></label>
                        <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                            Shibganj,
                            Bogura 5810</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card p-4">
                        <label class="form-label"><strong>USP:</strong></label>
                        <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                            Shibganj,
                            Bogura 5810</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card p-4">
                        <label class="form-label"><strong>Academic Entry Rrequirement:</strong></label>
                        <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                            Shibganj,
                            Bogura 5810</div>
                    </div>
                </div>

                <div class="col-md-12 pagetitle py-4">
                    <h1 class="mb-2">University Degree:</h1>
                    <div class="row g-3 ps-1">
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pagetitle py-4">
                    <h1 class="mb-2">University Subject:</h1>
                    <div class="row g-3 ps-1">
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Malaysia, Dhaka-Bangladesh</label>
                                <a href="{{ route('university.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.edit') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Malaysia, Dhaka-Bangladesh</label>
                                <a href="{{ route('university.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.edit') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Malaysia, Dhaka-Bangladesh</label>
                                <a href="{{ route('university.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.edit') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Malaysia, Dhaka-Bangladesh</label>
                                <a href="{{ route('university.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.edit') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
