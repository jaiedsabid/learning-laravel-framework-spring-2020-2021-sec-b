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
            display: flex;
            justify-content: center;
            align-items: center;
        }
        fieldset {
            width: 600px;
            min-width: 300px;
        }
        .container {
            display: flex;
        }
        .form-group {
            flex: 1 0 300px;
            text-align: center;
        }
        label {
            display: block;
        }
        label[for="password"] {
            margin-top: 5px;
        }
        .warning {
            flex: 1 0 300px;
            color: red;
            font-weight: bold;
        }
        input[type="submit"] {
            margin-top: 5px;
        }
        .warning>div:nth-child(2) {
            margin-top: 10px;
        }
        @media screen and (max-width: 559px) {
            .container {
                flex-wrap: wrap;
                text-align: center;
            }
            .warning {
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <fieldset>
            <legend>Login</legend>
            <div class="container">
                <div class="form-group">
                    <label for="username">Username:
                        <input id="username" name="username" type="text">
                    </label>
                    <label for="password">Password:
                        <input id="password" name="password" type="password">
                    </label>
                    <input type="submit" value="login">
                </div>
                <div class="warning">
                    <div>{{ $errors->first('username') }}</div>
                    <div>{{ $errors->first('password') }}</div>
                    <div>{{ session('error-msg') }}</div>
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>
