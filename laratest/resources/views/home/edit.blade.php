<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <style>
        html {
            box-sizing: border-box;
        }
        ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home.userList') }}">Back</a></li>
        </ul>
    </nav>
    <h1>Edit User, {{ $user['user_id'] }}</h1>

    <form method="post">
        @csrf
		<fieldset>
			<legend>Edit</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{ $user['username'] }}"></td>
                    <td>{{ $errors->first('username') }}</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ $user['password'] }}"></td>
                    <td>{{ $errors->first('password') }}</td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ $user['email'] }}"></td>
                    <td>{{ $errors->first('email') }}</td>
				</tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="type" id="type">
                            <option value="member" @if($user['type'] == 'member') selected @endif>Member</option>
                            <option value="admin" @if($user['type'] == 'admin') selected @endif>Admin</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
