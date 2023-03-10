<x-layout :heading="$heading">
    <div class="row mb-3">
        <div class="text-end">
            <a href="{{ route('students.create') }}">
                <button class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    Add Student
                </button>
            </a>
        </div>

        <table class="table table-bordered text-center mt-3">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </tr>

                @foreach ($students as $student)
                    <tr>
                        <td class="text-start">{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            <button class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>

</x-layout>
