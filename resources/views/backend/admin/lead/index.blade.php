@extends('backend.layouts')
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
                <a href="{{ route('upload.lead.single.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Add lead</a>
            </div>
        </div>
        <hr>
        <div class="custom-scrollbar-table">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Resource</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Addrss</th>
                        <th>Zip</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Linkedin</td>
                        <td>Mim</td>
                        <td>01723629080</td>
                        <td>info@gmail.com</td>
                        <td>shibonj-bogura</td>
                        <td>5810</td>
                        <td class="d-flex justify-content-end align-items-center">
                            <a href="{{ route('lead.view') }}" class="btn btn-success mx-1">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('lead.edit') }}" class="btn btn-primary mx-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form class="deleteForm" action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btnDelete"><i class="bi bi-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
