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
    </style>
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <a href="/home/userlist">User list</a>
        <a href="/logout">Logout</a>
    </nav>
    <h1>Welcome {{ session('username') }}!</h1>
</body>
</html>
