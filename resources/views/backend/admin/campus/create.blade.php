@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>New Campus</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
            <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3">
                @csrf

                <div class="col-md-6 pb-3">
                    <label for="country_id" class="form-label">Country <span class="text-danger">*</span></label>
                    <select class="js-example-basic-single form-select" name="country_id" id="country_id">
                        <option selected disabled>Select Country</option>
                        @foreach($countries as $key => $country)
                        <option value="{{ $country->id}}">{{ $country->name}}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 pb-3">
                    <label for="university_id" class="form-label">University <span class="text-danger">*</span></label>
                    <select class="js-example-basic-single form-select" name="university_id" id="university_id">
                        <option selected disabled>Select Country</option>
                        @foreach($countries as $key => $country)
                        <option value="{{ $country->id}}">{{ $country->name}}</option>
                        @endforeach
                    </select>
                    @error('university_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 pb-3" id="rowWrapper">
                    <label for="name" class="form-label">Campus<span class="text-danger">*</span></label>
                    <div class="d-flex mb-3 rowItem">
                        <input type="text" class="form-control me-2" name="name[]" placeholder="campus Name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <a href="javascript:void(0)" class="btn btn-primary mx-2" id="addRow"><i
                                class="bi bi-plus-square"></i></a>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add new row
            $('#addRow').click(function(e) {
                e.preventDefault();
                // Clone the first rowItem div
                let newRow = $('.rowItem').first().clone();
                // Clear the input fields of the cloned row
                newRow.find('input').val('');
                // Remove the addRow button from the cloned row
                newRow.find('#addRow').remove();
                // Add a delete button to the cloned row
                newRow.append(
                    '<a href="javascript:void(0)" class="btn btn-danger mx-2 deleteRow"><i class="bi bi-trash"></i></a>'
                );
                // Append the cloned row to the wrapper
                $('#rowWrapper').append(newRow);
            });

            // Delete a row
            $(document).on('click', '.deleteRow', function(e) {
                e.preventDefault();
                // Only remove the row if there is more than one
                if ($('.rowItem').length > 1) {
                    $(this).closest('.rowItem').remove();
                }
            });
        });
    </script>
@endsection
