@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="card">
            <div class="d-flex justify-content-between bg-success-subtle px-4 pt-3">
                <div class="pagetitle">
                    <h1>Degree Update</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </nav>
                </div>
                <div class="text-end pt-2">
                    <a href="{{ route('degree.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                        View
                        Degree</a>
                </div>
            </div>
            <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3 needs-validation"
                novalidate>
                @csrf
                <div class="col-md-8 pb-3">
                    <label for="degree" class="form-label">Degree <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="degree" placeholder="Degree Name"
                        value="{{ old('degree') }}" required>
                    @error('degree')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-md-4">
                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
@endsection
