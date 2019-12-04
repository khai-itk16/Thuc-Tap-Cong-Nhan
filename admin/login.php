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
        <form class="form" method="POST" action="">
            <div class="clear">
                <div class="subtitle">Username</div>
                <input type="text" name="username"> <br/>
            </div>
            <div class="clear">
                <div class="subtitle">Password</div>
                <input type="password" name="password"><br/>
            </div>
            <input class="btn-submit" type="submit"  name ="submit" value="Đăng nhập">
        </form>
    </div>

        <?php 
        include 'connect.php';
        $user = $_REQUEST['username'];
        $pass = md5($_REQUEST['password']);
        if(isset($_REQUEST['submit'])){
             $sql = "select * from admin where tendangnhap = '$user' and matkhau = '$pass'" ;
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) == 0)
             {
                echo '<script language="javascript">alert("Invalid username and password"); 
                    window.location="login.php";</script>';
              }
            else{
                 header("location: index.php");
                 session_start();
                $_SESSION['login_ad'] = "ok";
                $_SESSION['username'] = $user;
               
            }
        }
       
           
         ?>
</body>
</html>