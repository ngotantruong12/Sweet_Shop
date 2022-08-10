<?php
//var_dump($_POST); exit;
include "connect.php";
$a = $_POST['txtsearch'];
if(empty($a)){
    echo "rong"; exit;
}
else{
    $sql = "SELECT * FROM sanpham WHERE TenSP= '".$a."'" or die ("ERROR");
    $result = mysqli_query($conn, $sql);
   // var_dump($result); exit;
    include "header.php"; ?>
    <div class="content"> 
        <h3 align="center "> Danh Sách Các Sản Phẩm </h3>
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
<?php } ?>
   
     

