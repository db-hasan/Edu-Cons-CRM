@extends('backend/admin.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>New State</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('state.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    State</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('state.store') }}" enctype="multipart/form-data" class="row g-3 p-3">
                @csrf

                <div class="col-md-12 pb-3">
                    <label for="country_id" class="form-label">Country <span class="text-danger">*</span></label>
                    <select id="country_id" name="country_id" class="form-select" required>
                        <option value="" selected disabled>Select a Country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                    <div class="d-flex pb-3">
                        <input type="text" class="form-control me-1" id="name" name="name[]" value="{{ old('name') }}" required>
                         <a href="" class="btn btn-primary mx-1"><i class="fas fa-plus-circle"></i></a>
                         <a href="" class="btn btn-danger mx-1"><i class="bi bi-trash"></i></a>
                    </div>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
@endsection
