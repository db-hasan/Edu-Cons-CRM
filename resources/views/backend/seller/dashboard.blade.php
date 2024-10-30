@extends('backend/seller/layouts')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Seller Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Today Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1500</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Today Card -->

                        <!-- This Month Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>20000</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End This Month Card -->

                        <!-- This Year Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>100000</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End This Year Card -->
                        <!-- Right side columns -->
                        <div class="col-lg-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Ride Selling <span>| Today</span></h5>
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ride</th>
                                            <th class="text-end">Quantity</th>
                                            <th class="text-end">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td> 1</td>
                                                <td>F17</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">0</td>
                                            </tr>
                                            <tr>
                                                <td> 2</td>
                                                <td>F17</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">0</td>
                                            </tr>
                                            <tr>
                                                <td> 3</td>
                                                <td>F17</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">0</td>
                                            </tr>
                                        <tr>
                                            <th scope="row" colspan="3" class="text-uppercase text-end">Total</th>
                                            <th class="text-end">Tk. 000</th>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Right side columns -->
                        <!-- Right side columns -->
                        <div class="col-lg-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Ticket Selling <span>| Today</span></h5>
                                    <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ride</th>
                                            <th class="text-end">Quantity</th>
                                            <th class="text-end">Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td> 1</td>
                                                <td>Entry</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">0</td>
                                            </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                        <!-- End Right side columns -->
                    </div>
                </div><!-- End Left side columns -->

                

            </div>
        </section>

    </main>
@endsection
