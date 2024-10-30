@extends('backend/visitor/layouts')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Admin Dashboard</h1>
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
                <div class="col-lg-8">
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

                        <!-- Reports -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bar Chart</h5>
                                    <canvas id="barChart" style="max-height: 400px;"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- End Reports -->
                        <div class="col-lg-12">

                            <!-- Saler Activity -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor Ride Sales<span> | Today</span></h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-uppercase">Name</th>
                                                <th scope="col" class="text-uppercase">Ride</th>
                                                <th scope="col" class="text-uppercase text-end">Quantity</th>
                                                <th scope="col" class="text-uppercase text-end">Amount</th>
                                                <th scope="col" class="text-uppercase text-end">commission</th>
                                                <th scope="col" class="text-uppercase text-end">Profit</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td class="align-middle" rowspan="2">Vendor 1</td>
                                                <td>Ride 2</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">100</td>
                                                <td class="text-end">10%</td>
                                                <td class="text-end">10</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total</th>
                                                <th class="text-end">10</th>
                                            </tr>
                                            <tr>
                                                <td class="align-middle" rowspan="2">Vendor 2</td>
                                                <td>Ride 1</td>
                                                <td class="text-end">10</td>
                                                <td class="text-end">100</td>
                                                <td class="text-end">10%</td>
                                                <td class="text-end">10</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total</th>
                                                <th class="text-end">10</th>
                                            </tr>

                                            <tr>
                                                <th scope="row" colspan="5" class="text-uppercase text-end">Grand
                                                    Total</th>
                                                <th class="text-end">20</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Saler Activity end -->

                            <!-- Saler Activity -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Online Ride Sales<span> | Today</span></h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-uppercase">Name</th>
                                                <th scope="col" class="text-uppercase">Ride</th>
                                                <th scope="col" class="text-uppercase text-end">Quantity</th>
                                                <th scope="col" class="text-uppercase text-end">Amount</th>
                                                <th scope="col" class="text-uppercase text-end">commission</th>
                                                <th scope="col" class="text-uppercase text-end">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <td class="align-middle" rowspan="2">Vendor 1</td>
                                                <td>Ride 2</td>
                                                <td class="text-end">5</td>
                                                <td class="text-end">50</td>
                                                <td class="text-end">10%</td>
                                                <td class="text-end">5</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total</th>
                                                <th class="text-end">5</th>
                                            </tr>

                                            <tr>
                                                <td class="align-middle" rowspan="2">Vendor 1</td>
                                                <td>Ride 2</td>
                                                <td class="text-end">5</td>
                                                <td class="text-end">50</td>
                                                <td class="text-end">10%</td>
                                                <td class="text-end">5</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Total</th>
                                                <th class="text-end">5</th>
                                            </tr>

                                            <tr>
                                                <th scope="row" colspan="5" class="text-uppercase text-end">Grand
                                                    Total</th>
                                                <th class="text-end">10</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Saler Activity end -->

                        </div>

                        <!-- Recent Sales -->

                        <!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->


                <!-- Right side columns -->
                <div class="col-lg-4">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Ticket Selling <span>| Today</span></h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Seller</th>
                                        <th scope="col">Ride</th>
                                        <th class="text-end">Quantity</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 1</td>
                                        <td>Seller 1</td>
                                        <td>Entry</td>
                                        <td class="text-end">10</td>
                                        <td class="text-end">500</td>
                                    </tr>
                                    <tr>
                                        <td> 2</td>
                                        <td>Seller 1</td>
                                        <td>Entry</td>
                                        <td class="text-end">10</td>
                                        <td class="text-end">500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-uppercase text-end">Total</th>
                                        <th class="text-end">Tk. 1000</th>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Online Ticket Selling</td>
                                        <td class="text-end">10</td>
                                        <td class="text-end">500</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-uppercase text-end">Total</th>
                                        <th class="text-end">Tk. 1500</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Saler Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Seller Report<span> | Today</span></h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-uppercase">Name</th>
                                        <th scope="col" class="text-uppercase">Ride</th>
                                        <th scope="col" class="text-uppercase text-end">QTY</th>
                                        <th scope="col" class="text-uppercase text-end">Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <td class="align-middle" rowspan="2">selle 1</td>
                                        <td>Ride 1</td>
                                        <td class="text-end">5</td>
                                        <td class="text-end">50</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="text-end">Total</th>
                                        <th class="text-end">100</th>
                                    </tr>
                                    <tr>
                                        <td class="align-middle" rowspan="2">selle 2</td>
                                        <td>Ride 2</td>
                                        <td class="text-end">5</td>
                                        <td class="text-end">50</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" class="text-end">Total</th>
                                        <th class="text-end">100</th>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="3" class="text-uppercase text-end">Grand Total
                                        </th>
                                        <th class="text-end">200</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Saler Activity end -->
                </div>
                <!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection
