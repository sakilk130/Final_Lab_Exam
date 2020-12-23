<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form method="POST">
        @csrf
        <h3>Edit Job</h3>
        <table>
            <tr>
                <td>Company Name</td>
                <td>
                    <input type="text" name="company_name" value="{{ $job->company_name}}">
                    <br>
                    @error('company_name')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Job Title</td>
                <td>
                    <input type="text" name="job" value="{{ $job->job }}">
                    <br>
                    @error('job')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Job Location</td>
                <td>
                    <input type="text" name="location" value="{{ $job->location }}">
                    <br>
                    @error('location')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td>
                    <input type="text" name="salary" value="{{ $job->salary }}">
                    <br>
                    @error('salary')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
