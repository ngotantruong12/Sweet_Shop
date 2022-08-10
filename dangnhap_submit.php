<?php
  session_start();
  include ('connect.php');
  if (isset($_POST ["submit"]) && $_POST["username"] !='' && $_POST["password"] !='' )
  {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $user = mysqli_query($conn,$sql);
        if (mysqli_num_rows($user) > 0)
        {
            $_SESSION["user"] = $username;
            header("location:ADMIN.php");
        }
        else
        {  
            $_SESSION["thongbao"] = "Sai Tài Khoản hoặc mật khẩu";
            header("location:dangnhap.php");
        }
       

    }
  else
  {
         $_SESSION["thongbao"] = "Mời bạn nhập đày đủ thông tin";
         header("location:dangnhap.php");

  }
 
 
 
      

?>