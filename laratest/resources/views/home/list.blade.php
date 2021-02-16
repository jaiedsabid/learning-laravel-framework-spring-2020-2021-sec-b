<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        td {
            padding: 3px;
            text-align: center;
        }
        nav a:nth-child(1) {
            margin-left: 0px;
        }
        nav a {
            margin-left: 10px;
        }
        .error-message {
            margin-top: 10px;
            font-weight: bold;
            color: red;
        }
        .success-message {
            margin-top: 10px;
            font-weight: bold;
            color: green;
        }

    </style>
</head>
<body>
    <nav>
        <a href="/home">Back</a>
        <a href="/home/create">Create User</a>
        <a href="/logout">Logout</a>
    </nav>

    <div id="container" class="container">
        <h1>User List</h1>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>USER TYPE</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
            <tr>
                <td>{{ $item['user_id'] }}</td>
                <td>{{ $item['username'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['password'] }}</td>
                <td>{{ $item['type'] }}</td>
                <td>
                    <a href="/home/edit/{{ $item['user_id'] }}">Edit</a> |
                    <a href="/home/delete/{{ $item['user_id'] }}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="error-message">
            {{ session('error-msg') }}
        </div>
        <div class="success-message">
            {{ session('success-msg') }}
        </div>
    </div>
</body>
</html>
