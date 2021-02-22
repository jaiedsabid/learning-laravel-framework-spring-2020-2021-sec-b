<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        nav a:nth-child(1) {
            margin-left: 0px;
        }
        nav a {
            margin-left: 10px;
        }
        .error-msg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home.index') }}">Home</a>
        <a href="{{ route('home.userList') }}">User list</a>
        <a href="{{ route('logout.index') }}">Logout</a>
    </nav>
    <h1>Welcome {{ session('username') }}!</h1>
    <div class="error-msg">
        {{ session('error-msg') }}
    </div>
</body>
</html>
