<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm</title>
    <style>
            html {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            span {
                color: red;
            }
            h1 {
                text-align: center;
            }
            form {
                text-align: center;
            }
    </style>
</head>
<body>
    <div id="container" class="container">
        <h1>Confirmation message</h1>
        <p>If you want to apply this changes please type <span>'Yes'</span> in the box below: </p>
        <form action="" method="post">
            @csrf
            <input type="text" name="confirm" id="confirm">
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>
