<?php
 
 include "connect.php";
 $sql = "delete from sanpham where MaSP = '$_GET[masp]'";
 mysqli_query($conn,$sql);
 header('location:ADMIN.php?action=dssp');
?>
