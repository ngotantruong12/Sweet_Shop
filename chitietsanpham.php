<?php
include "header.php";
include "connect.php";
$sql = "select * from sanpham where MaSP=" .$_GET['id'];
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// var_dump($row); exit;
?>

<div class="content-chitietsanpham">
    <h3 align="center">Chi Tiết Sản Phẩm</h3>
<ul>
    <li>
        <img class="size-chitietsanpham" src="Img/<?= $row['Img'] ?>" />
    </li>
    <li>
        <div class="gia-sanpham">
            <p><h1>  <?= $row['TenSP'] ?></h1></p>
            <p class="gia"> <?= $row['Gia'] ?></p>
        </div>
        <!-- <div class="nhom-sanpham">
            <p>Mã sản phẩm: ao127  </p>
        </div> -->
        <div class="mua-sanpham">
           <form action="giohang.php?action=add" method="post">
                <p>Số Lượng: 
                    <input type="text"  value="1" name="txtsoluong[<?= $row['MaSP'] ?>]"/> 
                </p>
                <p class="button">
                <input style=" background-color: rgb(165, 165, 22);height: 30px; width: 200px; padding: 1px;" 
                        type="submit" value="Mua Sản Phẩm "name="btnmua"/>
                </p>    
           </form>
        </div>
    </li>
</ul>

</div>
<?php
include "footer.php";
?>