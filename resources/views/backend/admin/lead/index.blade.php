@extends('backend/admin.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Lead List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('lead.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Add lead</a>
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
                        <th>ID</th>
                        <th>Marketing</th>
                        <th>Resource</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Addrss</th>
                        <th>Zip</th>
                        <th>Contact</th>
                        <th>Passport</th>
                        <th>language</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value=""></td>
                            <td>01</td>
                            <td>Rony</td>
                            <td>Linkedin</td>
                            <td>Mim</td>
                            <td>01723629080</td>
                            <td>info@gmail.com</td>
                            <td>shibonj-bogura</td>
                            <td>5810</td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>No response</option>
                                    <option>Connected</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Yes</option>
                                    <option>Applied</option>
                                    <option>No</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>IELTS</option>
                                    <option>TOEFL</option>
                                    <option>PTE</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-end">
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value=""></td>
                            <td>01</td>
                            <td>Rony</td>
                            <td>Linkedin</td>
                            <td>Mim</td>
                            <td>01723629080</td>
                            <td>info@gmail.com</td>
                            <td>shibonj-bogura</td>
                            <td>5810</td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>No response</option>
                                    <option>Connected</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Yes</option>
                                    <option>Applied</option>
                                    <option>No</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>IELTS</option>
                                    <option>TOEFL</option>
                                    <option>PTE</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-end">
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" value=""></td>
                            <td>01</td>
                            <td>Rony</td>
                            <td>Linkedin</td>
                            <td>Mim</td>
                            <td>01723629080</td>
                            <td>info@gmail.com</td>
                            <td>shibonj-bogura</td>
                            <td>5810</td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>No response</option>
                                    <option>Connected</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>Yes</option>
                                    <option>Applied</option>
                                    <option>No</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-select">
                                    <option selected>Choose...</option>
                                    <option>IELTS</option>
                                    <option>TOEFL</option>
                                    <option>PTE</option>
                                </select>
                            </td>
                            <td class="d-flex justify-content-end">
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a href="" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
