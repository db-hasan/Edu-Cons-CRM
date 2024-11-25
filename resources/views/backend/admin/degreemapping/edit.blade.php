@extends('backend/admin.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Update Degree Assign</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('degreemapping.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Degree Assign</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('degreemapping.update', $degreemapping->id) }}" enctype="multipart/form-data"
                class="row g-3 p-3">
                @csrf
                @method('PUT')

                <div class="col-md-12 pb-3">
                    <label for="campus_id" class="form-label">University <span class="text-danger">*</span></label>
                    <select id="campus_id" name="campus_id" class="form-select" required>
                        @foreach ($campuses as $campus)
                            <option value="{{ $campus->id }}" {{ $campus->id == $degreemapping->campus_id ? 'selected' : '' }}>
                                {{ $campus->name }}
                            </option>                        
                        @endforeach
                    </select>
                    @error('campus_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-8 pb-3">
                    <label for="degree_id" class="form-label">Degree <span class="text-danger">*</span></label>
                    <select id="degree_id" name="degree_id" class="form-select" required>
                        @foreach ($degrees as $degree)
                            <option value="{{ $degree->id }}" {{ $degree->id == $degreemapping->degree_id ? 'selected' : '' }}>
                                {{ $degree->name }}
                            </option>                        
                        @endforeach
                    </select>
                    @error('campus_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label for="status" class="form-label">Status<span class="text-danger">*</span></label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        <option value="1" {{ $degreemapping->status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="2" {{ $degreemapping->status == 2 ? 'selected' : '' }}>Inactive</option>
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
