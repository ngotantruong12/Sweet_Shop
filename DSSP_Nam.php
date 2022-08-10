<?php 
include "connect.php";
$sql = "select * from sanpham where Gene='Man' " ;
$result = mysqli_query ($conn, $sql);

?>
<div name="" class="">
    <h3 style=" Text-align: center; background-color: antiquewhite; margin: 20px 0px 10px 0px;">DANH SÁCH CÁC SẢN PHẨM NAM</h3>
   
    <table class="tble" border="1px solid #f3f3f3;" align="center" style="margin: 10px auto; text-align: center;">
        <tr>
            <td>STT</td>
            <!-- <td>MaSP</td> -->
            <td>TenSp</td>
            <td>IMG</td>
            <td>Gia</td>
            <td>Loai</td>
            <td>SoLuong</td>
            <td>Create_Time</td>
            <td> <a href="ADMIN.php?action=add">Thêm sản phẩm</a></td>
        </tr>

            <?php
            $stt = 0;
            while ($row = mysqli_fetch_array($result)){ 
                ?>
            <tr>
                <td><?= $stt ?></td>
                <!-- <td><?= $row['MaSP']?></td> -->
                <td><?= $row['TenSP']?></td>
                <td><img src="Img/<?= $row['Img']; ?>" style="max-width: 100px;"></td>
                <td><?= $row['Gia']?></td>
                <td><?= $row['Loai']?></td>
                <td><?= $row['SoLuong']?></td>
                <td><?= $row['Create_Time']?></td>
                <td>
                    <a href="ADMIN.php?action=edit&masp=<?= $row['MaSP']?>">EDIT</a>
                    <a onclick="return window.confirm('Bạn muốn xóa không');" href="ADMIN.php?action=delete&masp=<?=  $row['MaSP']; ?>">/ DELETE</a>
                </td>
            </tr>
            <?php   $stt ++; } ?>
    </table>
</div>