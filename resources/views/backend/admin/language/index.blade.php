@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Language List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('language.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Add Language</a>
            </div>
        </div>
        <hr>
        <div class="custom-scrollbar-table">
            <table id="myTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-end">Acction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Malaysia</td>
                        <td>Active</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route('language.edit') }}" class="btn btn-primary mx-1"><i
                                    class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Malaysia</td>
                        <td>Active</td>
                        <td class="d-flex justify-content-end">
                            <a href="{{ route('language.edit') }}" class="btn btn-primary mx-1"><i
                                    class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
