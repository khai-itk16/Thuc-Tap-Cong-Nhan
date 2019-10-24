<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <h2>Đăng nhập</h2> <br>
    </div>
    <div class="container1">
        <form class="form" method="POST" action="xulylogin.php">
            <div class="clear">
                <div class="subtitle">Username</div>
                <input type="text" name="username"> <br/>
            </div>
            <div class="clear">
                <div class="subtitle">Password</div>
                <input type="text" name="password"><br/>
            </div>
            <input class="btn-submit" type="submit" value="Đăng nhập">
        </form>
    </div>
</body>
</html>