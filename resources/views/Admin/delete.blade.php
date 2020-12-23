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
                <td>name:</td>
                <td>{{ $employee->name }}</td>
            </tr>
            <tr>
                <td>company name:</td>
                <td>{{ $employee->company_name }}</td>
            </tr>
            <tr>
                <td>username:</td>
                <td>{{ $employee->username }}</td>
            </tr>
            <tr>
                <td>phone:</td>
                <td>{{ $employee->phone }}</td>
            </tr>
            <tr>
                <td>password:</td>
                <td>{{ $employee->password }}</td>
            </tr>

        </table>
        <h4>Are You Sure ?</h4>
        <input style="background: red" type="submit" name="submit" value="Confirm">
    </form>
</body>
</html>
