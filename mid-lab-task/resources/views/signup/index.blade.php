<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <style>
        body {
            box-sizing: border-box;
        }
        a {
            font-size: 15px;
            font-weight: bold;
            text-decoration: none;
            margin: 10px 0px;
        }
        .container {
            width: 600px;
            display: flex;
            flex-float: row nowrap;
        }
        form > label {
            display: block;
            margin-top: 8px;
        }
        label > input, select {
            position: absolute;
            left: 170px;
        }
        form > input[type="submit"] {
            margin-top: 10px;
        }
        .error-msg {
            margin-top: 10px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <a href="{{ route('login.index') }}">Back</a>
    <h1>Register</h1>
    <div class="container">
        <form action="" method="POST">
            @csrf
            <label for="fullname">Fullname:
                <input type="text" name="fullname" value="{{ old('fullname') }}">
            </label>
            <label for="username">Username:
                <input type="text" name="username" value="{{ old('username') }}">
            </label>
            <label for="email">Email:
                <input type="text" name="email" value="{{ old('email') }}">
            </label>
            <label for="password">Password:
                <input type="password" name="password" value="{{ old('password') }}">
            </label>
            <label for="password_confirmation">Confirm Password:
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
            </label>
            <label for="city">City:
                <input type="text" name="city" value="{{ old('city') }}">
            </label>
            <label for="country">Country:
                <input type="text" name="country" value="{{ old('country') }}">
            </label>
            <label for="phone">Phone:
                <input type="text" name="phone" value="{{ old('phone') }}">
            </label>
            <label for="company">Company Name:
                <input type="text" name="company" value="{{ old('company') }}">
            </label>
            <label for="usertype">User Type:
                <select name="usertype" id="usertype">
                    <option value="active">Active</option>
                </select>
            </label>
            <input type="submit" name="submit" value="sign up">
        </form>
    </div>
    <div class="error-msg">
        @foreach($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
        {{ session('error-msg') }}
    </div>
</body>
</html>
