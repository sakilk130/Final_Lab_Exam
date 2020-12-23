<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee List</title>
</head>
<body>
    <h3>Employee List</h3>
    <a href="/home">Back</a>
    <input type="text" placeholder="search employee" id="search">
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Company Name</th>
                <th>Username</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="employee_table">
        @for($i=0; $i<count($employee); $i++)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $employee[$i]['name'] }}</td>
            <td>{{ $employee[$i]['company_name'] }}</td>
            <td>{{ $employee[$i]['username'] }}</td>
            <td>{{ $employee[$i]['phone'] }}</td>
            <td>{{ $employee[$i]['password'] }}</td>
            <td>
                <a href="/home/edit/{{ $employee[$i]['id'] }}">Edit</a> |
                <a href="/home/delete/{{ $employee[$i]['id'] }}">Delete</a>
            </td>
        </tr>
        @endfor
    </tbody>
    </table>
</body>
</html>
