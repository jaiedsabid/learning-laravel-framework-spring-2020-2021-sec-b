<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <label for="email">Email:
            <input type="email" name="email">
        </label> <br>
        <label for="password">Password:
            <input type="password" name="password">
        </label> <br>
        <input type="submit" value="submit">
    </form>
    <div class="warning">
        <div>{{ $errors->first('email') }}</div>
        <div>{{ $errors->first('password') }}</div>
        <div>{{ session('error-msg') }}</div>
    </div>
</body>
</html>
