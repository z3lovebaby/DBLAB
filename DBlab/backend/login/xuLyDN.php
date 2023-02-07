<?php
    if(isset($_POST['txtUN']) && isset($_POST['txtPW'])){
        $un = $_POST['txtUN'];
        $pw = $_POST['txtPW'];
        $cb = isset($_POST['cbRemember'])?1:0;
        require_once '../../dao/connect.php';
        $query = "SELECT * FROM admins WHERE account = '$un' AND ad_password = '$pw' ";
        $result = pg_query($dbconn,$query);
        $row = pg_fetch_array($result, 0, PGSQL_NUM);
        if($row){
            if($cb){
                setcookie('id', $row[0], time()+ 60*60*24*7);
                setcookie('un', $row[3], time()+ 60*60*24*7);
                setcookie('pw', $row[4], time()+ 60*60*24*7);
                setcookie('name', $row[1], time()+ 60*60*24*7);
            }
            session_start();
            $_SESSION['id'] = $row[0];
            $_SESSION['name'] = $row[1];
            pg_close($dbconn);
            header("Location: ../../index.php");
        } else {
            header("Location: ../../login.php?m=error");
        }
    }
?>

