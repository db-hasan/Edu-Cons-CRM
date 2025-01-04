@extends('backend.layouts')
@section('content')
    <main id="main" class="main pt-0">
        <div class="card">
            <div class="d-flex justify-content-between  bg-primary-subtle px-4 pt-3">
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
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Address Details</h5>
                    <div>
                        <a href="" class="btn btn-primary edit-btn" id="edit-address">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="" class="btn btn-success view-btn" id="view-address">
                            <i class="bi bi-eye-slash"></i> View
                        </a>
                    </div>
                </div>
                <div class="row g-3 show-section" id="show-address">
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
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
