<?php 
    var_dump($_POST['username']);
    if(isset($_POST['username'])&&$_POST['password']==$_POST['password2']){
        $acc = $_POST['username'];
        $mail = $_POST['email'];
        $pw = $_POST['password'];
        $name = $_POST['name'];
        if(!($acc == "" || $mail == "" || $pw == ""||$name=="")){
            //thực hiện câu insert
            require_once '../../dao/connect.php';
            $query = "INSERT INTO admins (ad_name, ad_mail, account,ad_password) VALUES ('$name', '$mail', '$acc','$pw')";
            if (!(pg_query($dbconn,$query) === FALSE)) {
                echo "<script type='text/javascript'>alert('Tạo thành công');</script>";
                pg_close($dbconn);
                header("Location: ../../login.php");
            } else {
                echo "<script type='text/javascript'>alert('Tạo thất bại');</script>";
                header("Location: ../../register.php");
            }
//            $conn->close();
        }
    }
?>