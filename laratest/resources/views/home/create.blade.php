<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
    <style>
        nav {
            margin: 0;
        }
        nav ul {
            list-style: none;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/home/userlist">Back</a></li>
        </ul>
    </nav>
    <h1>Create New user</h1>

    <form method="post">
        @csrf
		<fieldset>
			<legend>Add</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="type" id="type">
                            <option value="member">Member</option>
                            <option value="admin">Admin</option>
                        </select>
                    </td>
                </tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
