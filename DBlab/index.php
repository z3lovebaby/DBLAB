<?php
            session_start();
            if(isset($_SESSION['id'])){
                echo 'Xin chao '.$_SESSION['name'];
            } else if(isset($_COOKIE['id'])){
                echo 'Xin chao '.$_COOKIE['name'];
            }
            else {
                header("Location: login.php");
            }
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đây là miniproject</title>
        <link rel="stylesheet" href="css/myStyle.css"/>
        <script type="text/javascript" src="js/myJS.js"></script>
    </head>
    <body>
        <?php
            require_once './dao/connect.php';
            include_once './frontend/header.php';
            if(isset($_REQUEST['page'])){
                $page = $_REQUEST['page'];
                switch ($page){
                    case 'dssv':
                        include './front-end/sinhvien/dssv.php';
                        break;
                    case 'dslh':
                        include './front-end/lophoc/dslh.php';
                        break;
                    case 'tmsv':
                        include './front-end/sinhvien/tmsv.php';
                        break;
                    case 'ssv':
                        include './front-end/sinhvien/ssv.php';
                        break;
                }
            }
        ?>
    </body>
</html>
