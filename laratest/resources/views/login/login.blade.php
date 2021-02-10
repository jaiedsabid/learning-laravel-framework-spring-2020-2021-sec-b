<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        html {
            box-sizing: border-box;
        }
        body {
            margin: 0;
        }
        form {
            margin: 0 auto;
            padding: 10px;
            width: 600px;
        }
        #error-message {
            margin: 0 auto;
            padding: 10px;
            width: 600px;
            color: #ff0000;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <fieldset>
            <legend>Login</legend>
            <label for="username">Username:
                <input id="username" name="username" type="text">
            </label>
            <label for="password">Password:
                <input id="password" name="password" type="password">
            </label>
            <input type="submit" value="login">
        </fieldset>
    </form>
    <div id="error-message">
        {{ session('error-msg') }}
    </div>
</body>
</html>
