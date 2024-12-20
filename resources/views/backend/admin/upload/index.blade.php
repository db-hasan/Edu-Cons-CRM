@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Lead Assign</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end">
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="" type="button" class="btn btn-success">Query</a>
                    <button type="button" class="btn btn-warning">Excel</button>
                    <button type="button" class="btn btn-danger">Print</button>
                </div>
            </div>
        </div>
        <div class="card p-3">
            <div class="row  g-3">
                <div class="col-md-6 pb-3">
                    <label for="country_id" class="form-label">Branch <span class="text-danger">*</span></label>
                    <select class="form-select">
                        <option selected>Choose...</option>
                        <option>Branch 1</option>
                        <option>Branch 2</option>
                    </select>
                    @error('country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 pb-3">
                    <label for="country_id" class="form-label">Consultant <span class="text-danger">*</span></label>
                    <select class="form-select">
                        <option selected>Choose...</option>
                        <option>Consultant 1</option>
                        <option>Consultant 2</option>
                    </select>
                    @error('country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12 tex-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <hr>
        <div class="custom-scrollbar-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <input class="form-check-input" type="checkbox" value="" id="all">
                            <label class="form-check-label" for="all">
                                All
                            </label>
                        </th>
                        <th>Source</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th class="text-end">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value=""></td>
                        <td>Linkedin</td>
                        <td>Mim</td>
                        <td>01723629080</td>
                        <td>info@gmail.com</td>
                        <td class="text-end">New Lead</td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value=""></td>
                        <td>Linkedin</td>
                        <td>Mim</td>
                        <td>01723629080</td>
                        <td>info@gmail.com</td>
                        <td class="text-end">Duplicate</td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value=""></td>
                        <td>Linkedin</td>
                        <td>Mim</td>
                        <td>01723629080</td>
                        <td>info@gmail.com</td>
                        <td class="text-end">New Lead</td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox" value=""></td>
                        <td>Linkedin</td>
                        <td>Mim</td>
                        <td>01723629080</td>
                        <td>info@gmail.com</td>
                        <td class="text-end">Duplicate</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
