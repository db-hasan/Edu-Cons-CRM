@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>University Details</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('university.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    University</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="" enctype="multipart/form-data" class="row g-3 p-3">
                @csrf

                <div class="col-md-6 pb-3">
                    <label for="country_id" class="form-label">Country <span class="text-danger">*</span></label>
                    <select class="js-example-basic-single form-select" name="country_id" id="country_id"
                        style="height: 45px;">
                        <option selected disabled>Select Country</option>
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
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
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('university_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 pb-3">
                    <label for="application_fees" class="form-label">Application Fees<span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="application_fees" name="application_fees"
                        value="{{ old('application_fees') }}" required>
                    @error('application_fees')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 pb-3">
                    <label for="ranking" class="form-label">Ranking<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="ranking" name="ranking" value="{{ old('ranking') }}"
                        required>
                    @error('ranking')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 pb-3">
                    <label for="scholarship" class="form-label">Scholarship<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="scholarship" rows="3"></textarea>
                    @error('scholarship')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-6 pb-3">
                    <label for="usp" class="form-label">USP<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="usp" rows="3"></textarea>
                    @error('usp')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 pb-3">
                    <label for="uni_entry_requirement" class="form-label">Academic Entry Rrequirement<span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" id="uni_entry_requirement" rows="3"></textarea>
                    @error('uni_entry_requirement')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 pb-3" id="campusWrapper">
                    <label for="campus" class="form-label">Campus<span class="text-danger">*</span></label>
                    <div class="d-flex mb-3 createCampusRow">
                        <input type="text" class="form-control me-2" name="campus[]" placeholder="Campus name"
                            value="{{ old('campus') }}" required>
                        @error('campus')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <a href="javascript:void(0)" class="btn btn-primary" id="addCampusRow"><i
                                class="bi bi-plus-square"></i></a>
                    </div>
                </div>

                <div class="col-md-12" id="languageWrapper">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label">Language Proficiency Required <span class="text-danger">*</span></label>
                        <a href="javascript:void(0)" class="btn btn-primary" id="addLanguageRow"><i
                                class="bi bi-plus-square"></i></a>
                    </div>

                    <!-- Initial Row -->
                    <div class="row g-4 createLanguageRow mb-5">
                        <div class="d-flex justify-content-between align-items-center d-none deleteLanguageRow">
                            <label class="form-label">New Information <span class="text-danger">*</span></label>
                            <a href="javascript:void(0)" class="btn btn-danger  "><i class="bi bi-trash"></i></a>
                        </div>
                        <div class="col-md-6">
                            <label for="language_id" class="form-label">Language<span
                                    class="text-danger">*</span></label>
                            <select class="js-example-basic-single form-select" name="language_id[]" id="language_id">
                                <option selected disabled>Select Language</option>
                                @foreach ($countries as $key => $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('language_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="result" class="form-label">Overall Result<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="result[]" placeholder="Type overall result"
                                value="{{ old('result') }}" required>
                            @error('result')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <label for="reading" class="form-label">Reading<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="reading[]"
                                placeholder="Type reading result" value="{{ old('reading') }}" required>
                        </div>
                        <div class="col-md-3">
                            <label for="writing" class="form-label">Writing<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="writing[]"
                                placeholder="Type writing result" value="{{ old('writing') }}" required>
                        </div>
                        <div class="col-md-3">
                            <label for="speaking" class="form-label">Speaking<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="speaking[]"
                                placeholder="Type speaking result" value="{{ old('speaking') }}" required>
                        </div>
                        <div class="col-md-3">
                            <label for="listening" class="form-label">Listening<span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="listening[]"
                                placeholder="Type listening result" value="{{ old('listening') }}" required>
                        </div>
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
            $('#addCampusRow').click(function(e) {
                e.preventDefault();
                // Clone the first createCampusRow div
                let newRow = $('.createCampusRow').first().clone();
                // Clear the input fields of the cloned row
                newRow.find('input').val('');
                // Remove the addCampusRow button from the cloned row
                newRow.find('#addCampusRow').remove();
                // Add a delete button to the cloned row
                newRow.append(
                    '<a href="javascript:void(0)" class="btn btn-danger deleteCampusRow"><i class="bi bi-trash"></i></a>'
                );
                // Append the cloned row to the wrapper
                $('#campusWrapper').append(newRow);
            });

            // Delete a row
            $(document).on('click', '.deleteCampusRow', function(e) {
                e.preventDefault();
                // Only remove the row if there is more than one
                if ($('.createCampusRow').length > 1) {
                    $(this).closest('.createCampusRow').remove();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add new row
            $('#addLanguageRow').click(function(e) {
                e.preventDefault();

                // Clone the first row
                let newRow = $('.createLanguageRow').first().clone();

                // Clear input values
                newRow.find('input').val('');
                newRow.find('select').val('');

                // Remove the 'd-none' class from the delete button for the new row
                newRow.find('.deleteLanguageRow').removeClass('d-none');

                // Append the new row to the wrapper
                $('#languageWrapper').append(newRow);
            });

            // Delete row
            $(document).on('click', '.deleteLanguageRow', function(e) {
                e.preventDefault();

                // Remove the row only if there are more than one
                if ($('.createLanguageRow').length > 1) {
                    $(this).closest('.createLanguageRow').remove();
                }
            });
        });
    </script>
@endsection
