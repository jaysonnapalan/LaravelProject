@extends('layouts.app') <!-- Extend your main layout -->

@section('content')
<div class="container mt-2">
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h3 class="mb-4">Registered Athletes</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Department</th>
                <th>Sport</th>
                <th>Year Level</th>
                <th>Registered At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($athletes as $athlete)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $athlete->name }}</td>
                <td>{{ $athlete->email }}</td>
                <td>{{ $athlete->phone }}</td>
                <td>{{ $athlete->department }}</td>
                <td>{{ $athlete->sport }}</td>
                <td>{{ $athlete->year_level }}</td>
                <td>{{ $athlete->created_at->format('Y-m-d H:i:s') }}</td>
                <td>
                    <!-- Edit Button (Pen Icon) -->
                    <a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-sm" title="Edit">
                        <i class="bi bi-pencil-square text-primary fs-4"></i> <!-- fs-4 increases the size -->
                    </a>

                    <!-- Delete Button (Trash Icon) -->
                    <form action="{{ route('athletes.destroy', $athlete->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this athlete?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm" title="Delete">
                            <i class="bi bi-trash text-danger fs-4"></i> <!-- fs-4 increases the size -->
                        </button>
                    </form>
                </td>



            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection