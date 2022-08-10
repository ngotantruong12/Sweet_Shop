<?php
   session_start();
  include ('connect.php');
  if (isset($_POST ['submit']) && $_POST["username"] !='' && $_POST["password"] !=''  && $_POST["confirmpassword"] !='')
  {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $level = 0;
        if($password != $confirmpassword)
        {
            $_SESSION["thongbao1"] = "Mật khẩu nhập lai không chinh xác";
            header("location:register.php");
            die();
            
        }
        $sql = "SELECT * FROM user WHERE username='$username'";
        $old = mysqli_query($conn,$sql);
        $password = md5($password);
        if ( mysqli_num_rows($old) > 0)
        {
            $_SESSION["thongbao1"] = "Tài khoan đã tôn tại ";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO   user (username,password, level)  VALUES ('$username','$password', '$level')";
        mysqli_query($conn,$sql);
        $_SESSION["thongbao1"] = "Đăng kí thành công";
        header("location:register.php");



  }
  else
  {
    $_SESSION["thongbao1"] = "Vui lòng nhập đày đủ thông tin";
      header("location:register.php");

  }
?>