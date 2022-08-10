<?php 
include "connect.php";
$sql = "select * from sanpham" ;
$result = mysqli_query ($conn, $sql);
?>
<div name="" class="">
    <h3 style=" Text-align: center; background-color: antiquewhite; margin: 20px 0px 10px 0px;">DANH SÁCH SẢN PHẨM</h3>
   
    <table class="tble" border="1px solid #f3f3f3;" align="center" style="margin: 10px auto; text-align: center;">
        <tr>
            <td>STT</td>
            <!-- <td>MaSP</td> -->
            <td>TenSp</td>
            <td>IMG</td>
            <td>Gia</td>
            <td>Gene</td>
            <td>TinhTrang</td>
            <td>SoLuong</td>
            <td>Loai</td>
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
                <td><img src="uploads/<?= $row['Img']; ?>" style="max-width: 100px;"></td>
                <td><?= $row['Gia']?></td>
                <td><?= $row['Gene']?></td>
                <td><?= $row['TinhTrang']?></td>
                <td><?= $row['SoLuong']?></td>
                <td><?= $row['Loai']?></td>
                <td><?= $row['Create_Time']?></td>
                <td>
                    <a href="ADMIN.php?action=edit&masp=<?= $row['MaSP']?>">EDIT</a>
                    <a onclick="return window.confirm('Bạn muốn xóa không');" href="ADMIN.php?action=delete&masp=<?=  $row['MaSP']; ?>">/ DELETE</a>
                </td>
            </tr>
            <?php   $stt ++; } ?>
    </table>
</div>