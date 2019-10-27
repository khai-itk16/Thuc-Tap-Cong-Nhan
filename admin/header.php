   <?php 
    session_start();
    if (!isset( $_SESSION['login_ad'] )) {
        header("location:login.php");
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">Quản trị trang web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Quản trị trang chủ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="quantrisanphammoi.php">Quản trị sản phẩm mới</a>
                            <a class="dropdown-item" href="quantrisanphammuanhieu.php">Quản trị sản phẩm mua nhiều</a>
                            <a class="dropdown-item" href="quantrilinhkiencoban.php">Quản trị linh kiện cơ bản</a>
                            <a class="dropdown-item" href="quantriarduino.php">Quản trị arduino</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantridanhmuc.php" >
                        Quản trị sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantriphanhoi.php" >
                        Quản trị phản hồi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quantritaikhoanuser.php" >
                        Quản trị tài khoản người dùng
                        </a>
                    </li>   
                </ul>
                <ul class="navbar-nav ml-auto">
                    Chào:&ensp;<?php  echo $_SESSION['username']; ?>&ensp;
                    <a href="logout.php" style="text-decoration: none;">  Thoát </a>
                </ul>
                </form>
            </div>
        </div>    
    </nav>