@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="card">
            <div class="d-flex justify-content-between bg-success-subtle px-4 pt-3">
                <div class="pagetitle">
                    <h1>Assign Agent Manager</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </nav>
                </div>
                <div class="text-end pt-2">
                    <a href="{{ route('agent.manager.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                        View List</a>
                </div>
            </div>
            <form method="" action="" enctype="multipart/form-data" class="row g-3 p-3 needs-validation"
                novalidate>
                @csrf

                <div class="col-md-6 pb-3">
                    <label for="country_id" class="form-label">Region <span class="text-danger">*</span></label>
                    <select class="js-example-basic-single form-select" name="country_id" id="country_id">
                        <option selected disabled>Select Country</option>
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6 pb-3">
                    <label for="agent_id" class="form-label">Agent Manager<span class="text-danger">*</span></label>
                    <select class="js-example-basic-single form-select" name="agent_id" id="agent_id">
                        <option selected disabled>Select Country</option>
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('agent_id')
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
