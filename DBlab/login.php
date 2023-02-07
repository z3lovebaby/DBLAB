<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/myStyle.css"/>
        <title>Đăng nhập trang quản trị</title>
    </head>
    <body>
        <?php 
            session_start();
            if(isset($_SESSION['id']) || isset($_COOKIE['id'])){
                header("Location: index.php");
            }
        ?>
        <?php 
            if(isset($_REQUEST['m'])){
                echo '<div style="color: red;text-align: center;padding-top:90px;">Sai tên đăng nhập hoặc mật khẩu</div>';
            }
        ?>
<!--        <form method="POST" action="backend/login/xuLyDN.php">
            Tên đăng nhập: <input type="text" name="txtUN" required/><br>
            Mật khẩu: <input type="password" name="txtPW" required/><br>
            Ghi nhớ đăng nhập: <input type="checkbox" name="cbRemember"/><br>
            <input type="submit" value="Đăng nhập"/>
        </form>-->
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="backend/login/xuLyDN.php">
                <div class="user-box">
                    <input type="text" name="txtUN" required="">
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="txtPW" required="">
                    <label>Password</label>
                </div>
                <div class="user-box">
                    <input type="checkbox" name="cbRemember"/>
                    <div>
                        <label class="cbmem">Ghi nhớ đăng nhập</label>
                    </div>
                </div>
                    <div style="text-align: center;color:#03e9f4;">
                        <a class="aa" href="register.php">Register</a>
                    </div>
                <!-- HTML !-->
                <button class="button-50" role="button">Đăng nhập</button>

            </form>
        </div>
    </body>
</html>