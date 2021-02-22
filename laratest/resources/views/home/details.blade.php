<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
    <style>
        nav {
            margin: 0;
        }
        nav ul {
            list-style: none;
        }
        td:nth-child(even) {
            padding-left: 20px;
        }
        a {
            text-decoration: none;
        }
        #delete-user {
            margin-top: 10px;
        }
        #delete-user a {
            color: red;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home.userList') }}">Back</a></li>
        </ul>
    </nav>
    <h1>User Details</h1>
    <table>
        <thead>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td><b>Username:</b></td>
                <td>{{ $user['username'] }}</td>
            </tr>
            <tr>
                <td><b>Password:</b></td>
                <td>{{ $user['password'] }}</td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td>{{ $user['email'] }}</td>
            </tr>
            <tr>
                <td><b>Type:</b></td>
                <td>{{ $user['type'] }}</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button id="delete-user">
                        <a href="{{ route('home.deleteUser', $user['user_id']) }}">
                            Delete
                        </a>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
