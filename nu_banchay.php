<?php
include "connect.php";
$sql2 = "select * from sanpham where Gene='Women' and TinhTrang='Flash' ";
$result2 = mysqli_query ($conn, $sql2);
?>
<h3 align="center ">Sản Phẩm Nữ Bán Chạy</h3>
    <div class="content-nu">
    <ul>
        <?php while($row =  mysqli_fetch_array($result2)){
        ?>
        <li>
            <a href="chitietsanpham.php?id=<?= $row['MaSP']; ?>">
                <div class="noidung-sanpham">
                    <img class="size" src="Img/<?= $row['Img']; ?>"/>
                     <div>
                         <p>
                             <?= $row['TenSP'] ?>
                        </p>
                        <p>
                            <img  class="btnlogo" src="image/logogiohang.png"/>
                            <?= $row['Gia'] ?>
                        </p>
                    </div>
                </div>
            </a>
        </li>
        <?php } ?> 
        </ul>        
    </div>
