<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Edit</title>
</head>
<body>
    <h1>Student Edit {{$student->name}}</h1>

    <form action="{{route('students.update',$student->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$student->name}}">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" value="{{$student->age}}">
        <br>
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" value="{{$student->dob}}">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" value="{{$student->address}}">
        <br>
        <label for="is_final_year">Final Year</label>
        <input type="text" name="is_final_year" value="{{$student->is_final_year}}">
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
