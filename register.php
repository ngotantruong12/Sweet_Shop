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
        <form action="register_submit.php" method="POST">
        <img  src="image/logo0jpg" class="avatar">
        <h1>Register</h1>
        <P style="text-align:center"> 
        <?php
           if(isset($_SESSION["thongbao1"])){
               echo $_SESSION["thongbao1"];
               session_unset();
               
           }
           ?>
        </p>
        <form>

        <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Confirm password</p>
            <input type="password" name="confirmpassword" placeholder=" Enter Confirm password">

            <input type="submit" name="submit" value="Register">
            <a   style="text-align:center"  href="http://localhost/SWEET2.php" ><h2>Sign Up</h2></a>           
            
        </form>
     
    </div>
</body>
</html