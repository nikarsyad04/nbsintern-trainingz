<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>Students of SMK KING GEORGE V</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Final Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{$student -> name}}</td>
                    <td>{{$student -> age}}</td>
                    <td>{{$student -> dob}}</td>
                    <td>{{$student -> address}}</td>
                    <td>{{$student -> is_final_year}}</td>
                    <td>
                        {{-- <a href="{{route('students.show', $student -> id)}}">Show</a>
                        <a href="{{route('students.edit', $student -> id)}}">Edit</a> --}}

                        <form action="{{route('students.destroy', $student -> id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No students found</td>
                </tr>

            @endforelse
        </tbody>
    </table>
</body>
</html>
