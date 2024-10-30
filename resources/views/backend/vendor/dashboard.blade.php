@extends('backend/vendor/layouts')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Vendor Dashboard</h1>
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

                        <!-- End Reports -->
                        <div class="col-lg-12">

                             <!-- Saler Activity -->
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Vendor Ride Selling <span>| Today</span></h5>
                                    <table class="table table-bordered">
                                      <thead>
                                          <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Ride</th>
                                              <th class="text-end">Quantity</th>
                                              <th class="text-end">Price</th>
                                              <th class="text-end">Commission</th>
                                              <th class="text-end">Amount</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                              <tr>
                                                  <td> 1</td>
                                                  <td>F17</td>
                                                  <td class="text-end">10</td>
                                                  <td class="text-end">100</td>
                                                  <td class="text-end">10%</td>
                                                  <td class="text-end">10</td>
                                              </tr>
                                              <tr>
                                                  <td> 1</td>
                                                  <td>F17</td>
                                                  <td class="text-end">10</td>
                                                  <td class="text-end">100</td>
                                                  <td class="text-end">10%</td>
                                                  <td class="text-end">10</td>
                                              </tr>
                                              <tr>
                                                  <td> 1</td>
                                                  <td>F17</td>
                                                  <td class="text-end">10</td>
                                                  <td class="text-end">100</td>
                                                  <td class="text-end">10%</td>
                                                  <td class="text-end">10</td>
                                              </tr>
        
                                          <tr>
                                            <th scope="row" colspan="3" class="text-uppercase text-end">Total</th>
                                            <th class="text-end">Tk. 300</th>
                                            <th colspan="2" class="text-end">Tk. 30</th>
                                          </tr>
                                      </tbody>
                                  </table>
                                </div>
                            </div>
                             <!-- Saler Activity -->
        
                        </div>

                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main>
@endsection
