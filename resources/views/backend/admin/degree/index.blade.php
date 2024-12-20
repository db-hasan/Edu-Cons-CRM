@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>Degree List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('degree.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Add Degree</a>
            </div>
        </div>
        <hr>
        <div class="custom-scrollbar-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($degrees as $degree)
                        <tr>
                            <td>{{ $degree->id }}</td>
                            <td>{{ $degree->name }}</td>
                            <td>
                                @if ($degree->status == 1)
                                    Active
                                @elseif($degree->status == 2)
                                    Inactive
                                @endif
                            </td>
                            <td class="d-flex justify-content-end">
                                <a href="{{ route('degree.edit', $degree->id) }}" class="btn btn-primary mx-1"><i
                                        class="bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
