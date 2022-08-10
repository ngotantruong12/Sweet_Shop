<?php
include "header.php";
include "connect.php";
$sql = "select * from sanpham where Gene='Women'";
$result = mysqli_query ($conn, $sql);
?>
<div class="content"> 
    <h3 align="center ">Danh Sách Các Sản Phẩm Nữ</h3>
    <div class="conten-nam">
    <ul>
        <?php while($row =  mysqli_fetch_array($result)){
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
</div>

<?php
include "footer.php";

?>