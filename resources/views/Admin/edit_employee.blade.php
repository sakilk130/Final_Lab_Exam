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
        <h3>Edit Employee</h3>
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="{{ $employee->name}}">
                    <br>
                    @error('name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td>
                    <input type="text" name="company_name" value="{{ $employee->company_name}}">
                    <br>
                    @error('company_name')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>username</td>
                <td>
                    <input type="text" name="username" value="{{ $employee->username }}">
                    <br>
                    @error('username')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>phone</td>
                <td>
                    <input type="text" name="phone" value="{{ $employee->phone }}">
                    <br>
                    @error('phone')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input type="password" name="password" value="{{ $employee->password }}">
                    <br>
                    @error('password')
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
