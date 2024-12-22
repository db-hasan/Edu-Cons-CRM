@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        
        <div class="pagetitle card p-4">
            <h1 class="mb-3">Reference:</h1>
            <div class="custom-scrollbar-table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Region</th>
                            <th>Branch</th>
                            <th>Agent</th>
                            <th>Consultant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bangladesh</td>
                            <td>Rajshahi</td>
                            <td>Bogura</td>
                            <td>Null</td>
                            <td>Roni</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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

        <div class="row">
            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Academic Qualification:</h1>
                    <div class="custom-scrollbar-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="align-top">Institute</th>
                                    <th class="align-top">Degree</th>
                                    <th class="align-top">Subject/Group</th>
                                    <th class="align-top text-end">GPA/CGPA</th>
                                    <th class="align-top text-end">Out of <br> Scale</th>
                                    <th class="align-top text-end">Course <br> Duration</th>
                                    <th class="align-top text-end">Passing <br> Year</th>
                                    <th class="align-top text-end">Course <br> Date</th>
                                    <th class="align-top text-end">Course <br> Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Govt. Azizul Haque College, Bogrua</td>
                                    <td>SSC</td>
                                    <td>Humanities</td>
                                    <td>4.00</td>
                                    <td>5.00</td>
                                    <td>4 Years</td>
                                    <td>2012</td>
                                    <td>Jan-01-2007</td>
                                    <td>Dec-30-2011</td> 
                                </tr>
                            </tbody>
                        </table>
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
                                    <th class="align-top">Language</th>
                                    <th class="align-top">Proficiency Test</th>
                                    <th class="align-top text-end">Overall <br> Score</th>
                                    <th class="align-top text-end">Listening <br> Score</th>
                                    <th class="align-top text-end">Reading <br> Score</th>
                                    <th class="align-top text-end">Writing <br> Score</th>
                                    <th class="align-top text-end">Speaking <br> Score</th>
                                    <th class="align-top text-end">Examination <br> Date</th>
                                    <th class="align-top text-end">Expiry <br> Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>English</td>
                                    <td>IELTS</td>
                                    <td>4.00</td>
                                    <td>2.00</td>
                                    <td>3.00</td>
                                    <td>4.00</td>
                                    <td>4.00</td>
                                    <td>Jan-01-2007</td>
                                    <td>Dec-30-2011</td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
           </div>
    
            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Training Summary:</h1>
                    <div class="custom-scrollbar-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Training Title</th>
                                    <th>Topic</th>
                                    <th>Institute</th>
                                    <th>Year</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IT Scholarship Programme - IsDB-BISEW</td>
                                    <td>Web Application Development with PHP and Framework</td>
                                    <td>IsDB-BISEW	</td>
                                    <td>2023</td>
                                    <td>900hours</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Working Experience:</h1>
                    <div class="custom-scrollbar-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="align-top">Company</th>
                                    <th class="align-top">Designation</th>
                                    <th class="align-top">Location</th>
                                    <th class="align-top text-end">Joining <br> Date</th>
                                    <th class="align-top text-end">Expiry <br> Date</th>
                                    <th class="align-top">Duration</th>
                                    <th class="align-top">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Soft Query Software Solution</td>
                                    <td>Software Engineer</td>
                                    <td>Uttara Dhaka 1230, Bangladesh</td>
                                    <td>Jan-01-2007</td>
                                    <td>Dec-30-2011</td>
                                    <td>5</td>
                                    <td>Ongoing</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Addmission Application:</h1>
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
                                    <th>Fee</th>
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
                                    <td>4 Years</td>
                                    <td>Accepted</td>
                                    <td>Pending</td>
                                    <td>Dec-20-2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Service Charge:</h1>
    
                    <div class="custom-scrollbar-table">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="align-top">Location</th>
                                    <th class="align-top">Institute</th>
                                    <th class="align-top text-end">Service Charge<br>Amount</th>
                                    <th class="align-top text-end">Service Charge <br> Status</th>
                                    <th class="align-top text-end">Tuition Fee<br> </th>
                                    <th class="align-top text-end">Tuition Fee <br> Status</th>
                                    <th class="align-top">Document</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>177 Benedict Rd, Staten Island, NY 10304</td>
                                    <td>State University of New York</td>
                                    <td>10000</td>
                                    <td>Pending</td>
                                    <td>20000</td>
                                    <td>Pending</td>
                                    <td class="text-end">
                                        <a href="" class="btn btn-success mx-1">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <div class="col-md-12">
                <div class="pagetitle card p-4">
                    <h1 class="mb-3">Security Deposit:</h1>
                    <label for="bulk" class="form-label">
                        <span class="text-danger">
                            Security Deposit Return Able. Required Document or Amount for Agency Security purpase.
                        </span>
                    </label>
    
                    <table>
                        <tr>
                            <td style="width: 20%">Deposit Date</td>
                            <td class="fw-bold" style="width: 2%">:</td>
                            <td>Dec-30-2011</td>
                          </tr>
                        
                        <tr>
                          <td style="width: 15%">Amount</td>
                          <td class="fw-bold" style="width: 2%">:</td>
                          <td>Tk. 10000</td>
                        </tr>

                        <tr>
                            <td style="width: 15%">Document</td>
                            <td class="fw-bold" style="width: 2%">:</td>
                            <td>Pasport</td>
                        </tr>
                        <tr>
                            <td style="width: 15%">View File</td>
                            <td class="fw-bold" style="width: 2%">:</td>
                            <td>View</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
    
            
        </div>

    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
