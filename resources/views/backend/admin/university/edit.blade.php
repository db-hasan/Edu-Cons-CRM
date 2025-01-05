@extends('backend.layouts')
@section('content')
    <main id="main" class="main pt-0">
        <div class="card">
            <div class="d-flex justify-content-between  bg-success-subtle px-4 pt-3">
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
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="card-title"></h5>
                    <div>
                        <a href="" class="btn btn-primary edit-btn" id="edit-university">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="" class="btn btn-success view-btn" id="view-university">
                            <i class="bi bi-eye-slash"></i> View
                        </a>
                    </div>
                </div>

                <div class="row show-section" id="show-university">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h2 class="mb-0">Malaysia University</h2>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-crosshair px-2"></i><strong>Country:</strong> Malaysia, Dhaka-Bangladesh
                                </li>
                                <li><i class="bi bi-bar-chart px-2"></i><strong>Ranking:</strong> 10</li>
                                <li><i class="bi bi-coin px-2"></i><strong>Application Fees: </strong> 1000</li>
                            </ul>
                        </div>
                        <div>
                            <img src="{{ asset('images/hasan.jpg') }}" alt="Profile Picture"
                                style="width: 100px; height: auto;">
                        </div>
                    </div>
                    <div class="col-md-12 pagetitle py-4">
                        <h1 class="mb-2">University Campus:</h1>
                        <div class="row g-3 ps-1">
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pagetitle card p-4">
                            <h1 class="mb-3">Language Proficiency Qualification:</h1>
                            <div class="custom-scrollbar-table">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="align-top">Proficiency Test</th>
                                            <th class="align-top text-end">Overall <br> Score</th>
                                            <th class="align-top text-end">Listening <br> Score</th>
                                            <th class="align-top text-end">Reading <br> Score</th>
                                            <th class="align-top text-end">Writing <br> Score</th>
                                            <th class="align-top text-end">Speaking <br> Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IELTS</td>
                                            <td>4.00</td>
                                            <td>2.00</td>
                                            <td>3.00</td>
                                            <td>4.00</td>
                                            <td>4.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card p-4">
                            <label class="form-label"><strong>Scholarship:</strong></label>
                            <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                                Shibganj,
                                Bogura 5810</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card p-4">
                            <label class="form-label"><strong>USP:</strong></label>
                            <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                                Shibganj,
                                Bogura 5810</div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card p-4">
                            <label class="form-label"><strong>Academic Entry Rrequirement:</strong></label>
                            <div class="">Vill- Behar prochim para, P.O- Behar Hat,, Shibganj,
                                Shibganj,
                                Bogura 5810</div>
                        </div>
                    </div>
                </div>

                <div class="d-none" id="update-university">
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
                            <label for="university_id" class="form-label">University <span
                                    class="text-danger">*</span></label>
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
                            <input type="number" class="form-control" id="ranking" name="ranking"
                                value="{{ old('ranking') }}" required>
                            @error('ranking')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 pb-3">
                            <label for="scholarship" class="form-label">Scholarship<span
                                    class="text-danger">*</span></label>
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

                        <div class="col-md-6 pb-3">
                            <label for="address" class="form-label">University Address<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address') }}" required>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 pb-3">
                            <label for="image" class="form-label">University Image<span
                                    class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="image" name="image"
                                value="{{ old('image') }}" required>
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-12 pb-3" id="campusWrapper">
                            <label for="campus" class="form-label">Campus<span class="text-danger">*</span></label>
                            <div class="d-flex mb-3 createCampusRow">
                                <input type="text" class="form-control me-2" name="campus[]"
                                    placeholder="Campus name" value="{{ old('campus') }}" required>
                                @error('campus')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <a href="javascript:void(0)" class="btn btn-primary" id="addCampusRow"><i
                                        class="bi bi-plus-square"></i></a>
                            </div>
                        </div>

                        <div class="col-md-12" id="languageWrapper">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label">Language Proficiency Required <span
                                        class="text-danger">*</span></label>
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
                                    <select class="js-example-basic-single form-select" name="language_id[]"
                                        id="language_id">
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
                                    <input type="number" class="form-control" name="result[]"
                                        placeholder="Type overall result" value="{{ old('result') }}" required>
                                    @error('result')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="reading" class="form-label">Reading<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="reading[]"
                                        placeholder="Type reading result" value="{{ old('reading') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="writing" class="form-label">Writing<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="writing[]"
                                        placeholder="Type writing result" value="{{ old('writing') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="speaking" class="form-label">Speaking<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="speaking[]"
                                        placeholder="Type speaking result" value="{{ old('speaking') }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="listening" class="form-label">Listening<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="listening[]"
                                        placeholder="Type listening result" value="{{ old('listening') }}" required>
                                </div>
                            </div>
                        </div>

                        {{-- when not use this code then multi select not working --}}
                        <div class="d-none"><select class="js-example-basic-single form-select"
                                id="language_id"></select></div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-12 pagetitle py-4">
                    <h1 class="mb-2">University Degree:</h1>
                    <div class="row g-3 ps-1">
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-success-subtle p-2">Malaysia, Dhaka-Bangladesh</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 pagetitle py-4">
                    <h1 class="mb-2">University Subject:</h1>
                    <div class="row g-3 ps-1">
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Bangla</label>
                                <a href="{{ route('university.course.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.course.view') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">English</label>
                                <a href="{{ route('university.course.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.course.view') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">Math</label>
                                <a href="{{ route('university.course.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.course.view') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-2">
                                <label for="">English</label>
                                <a href="{{ route('university.course.edit') }}" class="text-danger px-1"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a href="{{ route('university.course.view') }}" class="text-primary px-1"><i
                                        class="bi bi-eye"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle "Edit" button click
            $('.edit-btn').on('click', function(e) {
                e.preventDefault();
                const section = $(this).attr('id').split('-')[1];
                $(`#show-${section}`).addClass('d-none');
                $(`#update-${section}`).removeClass('d-none');
            });

            // Handle "View" button click
            $('.view-btn').on('click', function(e) {
                e.preventDefault();
                const section = $(this).attr('id').split('-')[1];
                $(`#update-${section}`).addClass('d-none');
                $(`#show-${section}`).removeClass('d-none');
            });
        });
    </script>
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
