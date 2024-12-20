@include('backend.header');

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-2">
                                <a href="#" class="logo-login d-flex align-items-center w-auto">
                                    <img src="{{ asset('images/') }}" alt="">
                                </a>
                                <span class="d-none d-lg-block fs-2 fw-bold text-info">Soft Query</span>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your Email & password to login</p>
                                    </div>
                                    <form method="POST" action="{{ route('admin.login') }}" class="row g-3">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12 pb-4">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <footer class="footer">
        <div class="copyright text-center">
            &copy; Copyright <strong><span>Educational Consultancy</span></strong>. All Rights Reserved <strong><a
                    href="" target="_blank"><span>Development by SOFTxONE Limited</span></a></strong>
        </div>
    </footer>

    @include('backend.footer');
</body>

</html>
