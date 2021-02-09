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
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['password'] }}</td>
                <td>
                    <a href="/home/edit/{{ $item['id'] }}">Edit</a> |
                    <a href="/home/delete/{{ $item['id'] }}">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="error-message">
            {{ session('error-msg') }}
        </div>
    </div>
</body>
</html>
