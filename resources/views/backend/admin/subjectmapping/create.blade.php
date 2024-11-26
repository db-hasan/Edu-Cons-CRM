@extends('backend/admin.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Subject Assign</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('subjectmapping.index') }}" class="btn btn-primary"><i class="fa-regular fa-eye"></i>
                    View
                    Subject Assign</a>
            </div>
        </div>
        <hr>
        <div class="card">
            <form method="post" action="{{ route('subjectmapping.store') }}" enctype="multipart/form-data" class="row g-3 p-3">
                @csrf

                <div class="col-md-2 pb-3">
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

                <div class="col-md-2 pb-3">
                    <label for="state_id" class="form-label">State <span class="text-danger">*</span></label>
                    <select id="state_id" name="state_id" class="form-select" required>
                        <option value="" selected disabled>Select a State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                        @endforeach
                    </select>
                    @error('state_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="university_id" class="form-label">University <span class="text-danger">*</span></label>
                    <select id="university_id" name="university_id" class="form-select" required>
                        <option value="" selected disabled>Select a University</option>
                        @foreach ($universities as $university)
                            <option value="{{ $university->id }}">{{ $university->name }}</option>
                        @endforeach
                    </select>
                    @error('university_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-3 pb-3">
                    <label for="campus_id" class="form-label">Campus <span class="text-danger">*</span></label>
                    <select id="campus_id" name="campus_id" class="form-select" required>
                        <option selected disabled>Select a Campus</option>
                        @foreach ($campuses as $campus)
                            <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                        @endforeach
                    </select>
                    @error('campus_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-2 pb-3">
                    <label for="degree_mapping_id" class="form-label">Degree <span class="text-danger">*</span></label>
                    <select id="degree_mapping_id" name="degree_mapping_id" class="form-select" required>
                        <option selected disabled>Select a Degree</option>
                        @foreach ($degreemappinges as $degreemapping)
                            <option value="{{ $degreemapping->id }}">{{ $degreemapping->degree->name }}</option>
                        @endforeach
                    </select>
                    @error('degree_mapping_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12 pb-3" id="rowWrapper">
                    <div class="d-flex">
                        <div class="col-md-2 me-2">
                            <label class="form-label">Subject Assign<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-2 me-2">
                            <label class="form-label">Course duration<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-2 me-2">
                            <label class="form-label">Admission Fee<span class="text-danger">*</span></label>
                        </div>
                        <div class="col-md-5 me-2">
                            <label class="form-label">Entry Requirment<span class="text-danger">*</span></label>
                        </div>
                    </div>

                    <div class="d-flex mb-3 align-items-end rowItem">
                        <div class="col-md-2 me-2">
                            <select id="subject_id" name="subject_id[]" class="form-select" required>
                                <option value="" selected disabled>Select a State</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                            @error('subject_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 me-2">
                            <input type="number" class="form-control me-2" name="course_duration[]" placeholder="Course duration" value="" required>
                            @error('course_duration')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2 me-2">
                            <input type="number" class="form-control me-2" name="admission_fee[]" placeholder="Admission Fee" value="" required>
                            @error('admission_fee')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-5 me-2">
                            <input type="text" class="form-control me-2" name="entry_requirement[]" placeholder="Entry Requirment" value="" required>
                            @error('entry_requirement')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary mx-2" id="addRow"><i class="bi bi-plus-square"></i></a>
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
                        newRow.append('<a href="javascript:void(0)" class="btn btn-danger mx-2 deleteRow"><i class="bi bi-trash"></i></a>');
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
