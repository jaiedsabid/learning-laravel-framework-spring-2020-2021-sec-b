<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
        }
        label > input {
            position: absolute;
            left: 100px;
        }
        label {
            display: block;
        }
        .warning {
            margin-top: 15px;
            font-weight: bold;
            color: red;
        }
        .success {
            margin-top: 15px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
        @csrf
        <label for="email">Email:
            <input type="email" name="email" value="{{ @old('email') }}">
        </label> <br>
        <label for="password">Password:
            <input type="password" name="password">
        </label> <br>
        <input type="submit" value="login"> | <a href="{{ route('signup.index') }}">Register</a>
    </form>
    <div class="warning">
        <div>{{ $errors->first('email') }}</div>
        <div>{{ $errors->first('password') }}</div>
        <div>{{ session('error-msg') }}</div>
    </div>
    <div class="success">
        {{ session('success') }}
    </div>
</body>
</html>
