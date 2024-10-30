<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>Bangladesh Air Force Museum</title>

    <style>
        .heading{
            color: #010483;
            font-family: 'Montserrat', sans-serif;
        }
        .sub-heading{
            color: rgb(10, 0, 31);
            font-size: 36px;
            font-family: 'Montserrat', sans-serif;
        }
        .card{
            border: 2px solid #ecb1b191 !important;
        }
        .card-header {
            background: linear-gradient(91.83deg, #4b4c8a 39.5%, #010483 131.83%);
        }
        .price{
            color: rgb(10, 0, 31);
            font-size: 18px;
        }
        .form-check-input{
            border: 2px solid #010483 !important;
        }
        .btn-submit{
            background: linear-gradient(91.83deg, #4b4c8a 39.5%, #010483 131.83%);
        }
    </style>
</head>
<body>
    <section
        style="background-image: url( {{ asset('images/bg-lead.jpg') }}); background-size: cover; background-position: bottom; min-height: 100vh;">
        <div class="container">
            <div class="text-center">
                <h1 class="py-5 heading">Bangladesh Air Force Museum <br>
                    Preserving Glory</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-4 sub-heading">Our Ticket list</h3>
                    <div class="row ">
                        <div class="col-md-12 mb-4">
                            <div class="d-flex align-items-center w-100 card-clickable">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" checked required>
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="mb-0"></h5>
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>Entry Ticket</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>This ticket must be purchese to visit mesuem</small> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center w-100 card-clickable" onclick="toggleCheckbox(this)">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="d-flex justify-content-between mb-0">
                                            <span>F17 Fighter</span>
                                            <span class="price">(Tk.50)</span>
                                        </h5>
                                        <small>only for chaild</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 fs-4">
                        <strong>Total Amount: Tk.300</strong>
                    </div>  
                </div>
                <div class="col-lg-6 px-5 pt-5 mt-3">
                    <div class="card">
                        <div class="card-header text-light">
                            <div class="fs-5 fw-blod text-end"> Payment methods</div>
                        </div>
                        <div class="card-body">
                            <div class="row g-4">
                                <div class="col-12">
                                  <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                                  <input type="name" class="form-control" id="name" placeholder="Type you name">
                                </div>
                                <div class="col-12">
                                  <label for="number" class="form-label">Phone<span class="text-danger">*</span></label>
                                  <input type="number" class="form-control" id="number" placeholder="Type you phone">
                                </div>
                                <div class="col-12">
                                  <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                                  <input type="email" class="form-control" id="email" placeholder="Type you email">
                                </div>



                                <div class="col-12 text-end">
                                  <button type="submit" class="btn btn-submit text-light fs-5">Submit & Payment</button>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleCheckbox(element) {
            const checkbox = element.querySelector('.form-check-input');
            checkbox.checked = !checkbox.checked;
        }
    </script>
</body>