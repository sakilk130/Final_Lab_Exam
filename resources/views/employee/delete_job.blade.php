<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
</head>
<body>
    <h3>Delete</h3>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>Company Name:</td>
                <td>{{ $job->company_name }}</td>
            </tr>
            <tr>
                <td>Job Title:</td>
                <td>{{ $job->job }}</td>
            </tr>
            <tr>
                <td>Job Location:</td>
                <td>{{ $job->location }}</td>
            </tr>
            <tr>
                <td>Salary:</td>
                <td>{{ $job->salary }}</td>
            </tr>
        </table>
        <h4>Are You Sure ?</h4>
        <input style="background: red" type="submit" name="submit" value="Confirm">
    </form>
</body>
</html>
