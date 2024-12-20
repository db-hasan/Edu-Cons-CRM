@extends('backend.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle">
                <h1>University List</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </nav>
            </div>
            <div class="text-end pt-2">
                <a href="{{ route('university.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                    Add University</a>
            </div>
        </div>
        <hr>
        <div class="custom-scrollbar-table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>State</th>
                        <th>Index</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($universities as $universitiesGroup)
                        @foreach ($universitiesGroup as $index => $university)
                            <tr>
                                @if ($loop->first)
                                    <td class="align-middle" rowspan="{{ $universitiesGroup->count() }}">
                                        {{ $university->state->name }}
                                    </td>
                                @endif
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $university->name }}</td>
                                <td>
                                    @if ($university->status == 1)
                                        Active
                                    @elseif($university->status == 2)
                                        Inactive
                                    @endif
                                </td>
                                <td class="d-flex justify-content-end">
                                    <a href="{{ route('university.edit', $university->id) }}" class="btn btn-primary mx-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>

        </div>
    </main>
    <script src="{{ asset('backend/js/jquery-3.7.1.min.js') }} "></script>
@endsection
