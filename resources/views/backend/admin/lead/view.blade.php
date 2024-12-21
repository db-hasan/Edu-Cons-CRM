@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Student Profile</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="">
                <h2 class="mb-0">Ali Hasan</h2>
                <ul class="list-unstyled">
                    <li><i class="bi bi-telephone-plus px-2"></i>+880 1723629080</li>
                    <li><i class="bi bi-envelope-at px-2"></i></i>ahasan.jobs@gmail.com</li>
                    <li><i class="bi bi-geo-alt px-2"></i>5810 Bihar Poschim para</li>
                    <li><i class="bi bi-crosshair px-2"></i>Bogura, Rajshahi, Dhaka-Bangladesh</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('images/hasan.jpg') }}" alt="Profile Picture" style="width: 100px; height: auto;">
            </div>
        </div>
        <hr>

        <div class="pagetitle card p-4">
            <h1 class="mb-3">Academic Qualification:</h1>
            <div class="custom-scrollbar-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Institute</th>
                            <th>Degree</th>
                            <th>Subject/Group</th>
                            <th>Result</th>
                            <th>Passing Year</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Govt. Azizul Haque College, Bogrua</td>
                            <td>SSC</td>
                            <td>Humanities</td>
                            <td>4.00</td>
                            <td>2012</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagetitle card p-4">
            <h1 class="mb-3">Professional Qualification:</h1>
            <div class="custom-scrollbar-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Institute</th>
                            <th>Topic</th>
                            <th>Degree</th>
                            <th>Score</th>
                            <th>Passing Year</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>New Horizons</td>
                            <td>English</td>
                            <td>IELTS</td>
                            <td>4.00</td>
                            <td>2024</td>
                            <td>4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="pagetitle card p-4">
            <h1 class="mb-3">Scholarship Application:</h1>
            <div class="custom-scrollbar-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Institute</th>
                            <th>Subject</th>
                            <th>Degree</th>
                            <th>Intake</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>177 Benedict Rd, Staten Island, NY 10304</td>
                            <td>State University of New York</td>
                            <td>Software</td>
                            <td>CSC</td>
                            <td>Jan-01-2025</td>
                            <td>4</td>
                            <td>Pending</td>
                            <td>Dec-20-2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
