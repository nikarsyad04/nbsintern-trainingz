<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="{{route('students.store')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id='name'>
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id='age'>
        <br>
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id='dob'>
        <br>
        <label for="address">Address</label>
        <input type="text" name="address" id='address'>
        <br>
        <label for="is_final_year">Final Year</label>
        <input type="text" name="is_final_year" id='is_final_year'>
        <br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
