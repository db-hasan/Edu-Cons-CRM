@extends('backend.admin.layouts')
@section('content')
    <main id="main" class="main">
        <div class="d-flex justify-content-between">
            <div class="pagetitle mb-0">
                <h1>Subject Assign</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">View</li>
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
        <table>
            <tr>
              <td>Campus</td>
              <td class="w-25">:</td>
              <td>{{ $degreemapping->campus->name }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td class="w-25">:</td>
                <td>
                  @if ($degreemapping->status == 1)
                      Active
                  @elseif($degreemapping->status == 2)
                      Inactive
                  @endif
                </td>
            </tr>

          </table>
          <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th class="text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($degreemapping->subjectmapping as $index => $subjectData)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $subjectData->subject->name }}</td>
                        <td>
                            @if ($subjectData->status == 1)
                                Active
                            @elseif($subjectData->status == 2)
                                Inactive
                            @else
                                Unknown
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('subjectmapping.edit', $subjectData->id) }}" class="btn btn-primary">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>


    </main>
@endsection
