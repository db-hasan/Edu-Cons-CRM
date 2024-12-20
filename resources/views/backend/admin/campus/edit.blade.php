@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Update Campus</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('campus.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Campus</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('campus.update', $campus->id) }}" enctype="multipart/form-data"
                class="row g-3 p-3">
                @csrf
                @method('PUT')

                <div class="col-md-12 pb-3">
                    <label for="university_id" class="form-label">University <span class="text-danger">*</span></label>
                    <select id="university_id" name="university_id" class="form-select" required>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}"
                                {{ $university->id == $campus->state_id ? 'selected' : '' }}>
                                {{ $university->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('university_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-8 pb-3">
                    <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $campus->name }}"
                        required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-4">
                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        <option value="1" {{ $campus->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $campus->status == 2 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
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
