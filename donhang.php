<?php 
include "connect.php";
$sql = "SELECT `chitiet_order`.orderID,Ten,`sanpham`.MaSP,TenSP, `sanpham`.`Img` ,`chitiet_order`.Gia,`chitiet_order`.SoLuong,Time FROM `order`, `chitiet_order`, `sanpham` WHERE `chitiet_order`.`orderID` = `order`.`orderID` AND `chitiet_order`.`MaSP` = `sanpham`.`MaSP`" ;
$result = mysqli_query ($conn, $sql);
?>
<div name="" class="">
    <h3 style=" Text-align: center; background-color: antiquewhite; margin: 20px 0px 10px 0px;">DANH SÁCH CHI TIết ĐƠN HÀNG</h3>
   
    <table class="tble" border="1px solid #f3f3f3;" align="center" style="margin: 10px auto; text-align: center;">
        <tr>
            <td>STT</td>
            <!-- <td>MaSP</td> -->
            <td>MaKH</td>
            <td>TenKH</td>
            <td>MaSP</td>
            <td>TenSP</td>
            <td>Hinh</td>
            <td>Gia</td>
            <td>SoLuong</td>
            <td>Time</td>
        </tr>

            <?php
            $stt = 0;
            while ($row = mysqli_fetch_array($result)){ 
                ?>
            <tr>
                <td><?= $stt ?></td>
                <!-- <td><?= $row['MaSP']?></td> -->
                <td><?= $row['orderID']?></td>
             <!-- <td><img src="Img/<?= $row['Img']; ?>" style="max-width: 100px;"></td> -->
                <td><?= $row['Ten']?></td>
                <td><?= $row['MaSP']?></td>
                <td><?= $row['TenSP']?></td>
                <td><img src="Img/<?= $row['Img']; ?>" style="max-width: 100px;"></td>
                <td><?= $row['Gia']?></td>
                <td><?= $row['SoLuong']?></td>   
                <td><?=date("d/m/Y H:i", $row['Time'])?></td>
            </tr>
            <?php   $stt ++; } ?>
    </table>
</div>