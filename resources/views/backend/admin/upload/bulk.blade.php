@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Bulk lead Upload</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('upload.lead.assign.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View lead</a>
            </div>
        </div>
        <hr>
        <div class="card p-5 pagetitle">
            <div class="mb-3">
                <h1>Must be required 4 column: source, name, number, email</h1>
                <label for="bulk" class="form-label">
                    <span class="text-danger">
                        Required data source and number field.
                    </span>
                </label>
            </div>
            <div class="row g-4">
                <div class="col pb-3">
                    <label for="bulk" class="form-label">Please Upload Excel file<span
                            class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="bulk" required>

                </div>
            </div>
        </div>

    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
