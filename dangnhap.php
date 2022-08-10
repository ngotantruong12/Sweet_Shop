<?php
 session_start();
?>
<html>
<head>
    <meta charset="utf-8">
<title>Cửa hàng thời trang </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" type="text/css" href="dangnhap.css">
</head>
<body>
    <div class="loginbox">
        <form action="dangnhap_submit.php" method="POST">
        <img  src="image/logo0.jpg" class="avatar">
        <h1>Login</h1>
        <P style="text-align:center"> 
        <?php
           if(isset($_SESSION["thongbao"])){
               echo $_SESSION["thongbao"];
               session_unset();
               
           }
           ?>
        </p>
        <form>
        <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">

            <input type="submit" name="submit"  value="Sign Up">
            <a   style="text-align:center"  href="http://localhost/baitap/register.php" ><h2>Register</h2></a>

            
            
        </form>
     
    </div>
</body>
</html