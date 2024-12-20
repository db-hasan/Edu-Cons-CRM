@include('backend.header');

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                {{-- <img src="{{ asset('images/logo.png') }}" alt=""> --}}
                <span class="d-none d-lg-block">Soft Query</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Profile"
                            class="rounded-circle">
                        @if (auth()->check())
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                        @endif

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name }}</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Form Elements</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Form Layouts</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Form Editors</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Form Validation</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#location-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-geo-alt"></i><span>Location</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="location-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Country</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>State</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#academic-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-mortarboard-fill"></i><span>Academic</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="academic-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('degree.index') }}">
                            <i class="bi bi-circle"></i><span>Degree</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('subject.index') }}">
                            <i class="bi bi-circle"></i><span>Subject</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#university-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-bank2"></i><span>University</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="university-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('country.index') }}">
                            <i class="bi bi-circle"></i><span>Country</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('state.index') }}">
                            <i class="bi bi-circle"></i><span>State</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('university.index') }}">
                            <i class="bi bi-circle"></i><span>University</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('campus.index') }}">
                            <i class="bi bi-circle"></i><span>Campus</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('degreemapping.index') }}">
                            <i class="bi bi-circle"></i><span>Degree </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('subjectmapping.index') }}">
                            <i class="bi bi-circle"></i><span>Subject </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('branch.index') }}">
                    <i class="bi bi-buildings"></i>
                    <span>Branch </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('lead.index') }}">
                    <i class="bi bi-gem"></i>
                    <span>Lead</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('upload.index') }}">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <span>Upload</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-trash"></i>
                    <span>Trashed</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-bar-chart"></i>
                    <span> Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-bank"></i>
                    <span> Accounts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-shield-lock"></i>
                    <span>Permission</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('user.index') }}">
                    <i class="bi bi-people"></i>
                    <span>User Manage</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('profle.update') }}">
                    <i class="bi bi-database-lock"></i>
                    <span>Password</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
    <!-- End Sidebar-->

    {{-- ------------content part-------------- --}}
    @yield('content')
    {{-- ------------content part-------------- --}}

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="copyright text-center">
            &copy; Copyright <strong><span>Educational Consultancy</span></strong>. All Rights Reserved <strong><a
                    href="" target="_blank"><span>Development by Soft Query</span></a></strong>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('backend.footer');
</body>

</html>
