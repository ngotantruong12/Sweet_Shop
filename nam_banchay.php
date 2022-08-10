<?php
include "connect.php";
$sql = "select * from sanpham where Gene='Man' and TinhTrang='Flash' ";
$result = mysqli_query ($conn,$sql);
?>
<h3 align="center ">Sản Phẩm Nam Bán Chạy</h3>
    <div class="conten-nam">
    <ul>
        <?php while($row =  mysqli_fetch_array($result)){
        ?>
        <li>
            <a href="chitietsanpham.php?id=<?= $row['MaSP'] ?>">
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