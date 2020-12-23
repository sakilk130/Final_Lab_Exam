<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job List</title>
</head>
<body>
    <h3>Job List</h3>
    <a href="/employee">Back</a>

    <table border="1">
        <tr>
            <td>S.N</td>
            <td>Company Name</td>
            <td>Job Title</td>
            <td>Lob Location</td>
            <td>Salary</td>
            <td>Action</td>
        </tr>
        @for($i=0; $i<count($job); $i++)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $job[$i]['company_name'] }}</td>
            <td>{{ $job[$i]['job'] }}</td>
            <td>{{ $job[$i]['location'] }}</td>
            <td>{{ $job[$i]['salary'] }}</td>
            <td>
                <a href="/employee/edit_job/{{ $job[$i]['id'] }}">Edit</a> |
                <a href="/employee/delete_job/{{ $job[$i]['id'] }}">Delete</a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>
