<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <form method="POST">
        @csrf
        <h2>Login</h2>

        <span style="color: red">
            {{ session('msg') }}
        </span>

        <table>
            <tr>
                <td>username</td>
                <td>
                    <input type="text" name="username" value="{{ old('username') }}">
                    <br>
                    @error('username')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>password</td>
                <td>
                    <input type="password" name="password" value="{{ old('password') }}">
                    <br>
                    @error('password')
                    <span style="color: red">{{ $message }}</span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
