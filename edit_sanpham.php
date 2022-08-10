<?php 
include "connect.php";
$sql = "select * from sanpham where MaSP= $_GET[masp] ";
$result = mysqli_query ($conn, $sql);
$row = mysqli_fetch_array($result);

if(isset($_POST['btnsave']) ){
        $ten = $_POST['txttensp'];
        $anh = $_FILES['imga']['name'];
        $gia = $_POST['txtgia'];
        $time = $_POST['txtdate'];
        $gene = $_POST['txtgene'];
        $tinhtrang = $_POST['txttinhtrang'];
        $loai = $_POST['txtloai'];
        $soluong = $_POST['txtsoluong'];
        if(!empty($ten) && !empty($gia) && !empty($time) && !empty($loai)&& !empty($tinhtrang) && !empty( $gene)&& !empty($soluong)){
        // $ma = $_POST['txtmasp'];
        if($anh != null )
				{


				$path = "Img/";
				$tmp_name = $_FILES['imga']['tmp_name'];
				$anh = $_FILES['imga']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "update sanpham set Img = '$anh' where MaSP ='$_GET[masp]'";
					mysqli_query($conn,$sql);
					header('location:ADMIN.php');
                }

					$sql = "update sanpham set TenSP= '$ten', Gia= '$gia', Create_Time= '$time', Loai= '$loai',TinhTrang= '$tinhtrang',Gene='$gene',SoLuong='$soluong' where MaSP = '$_GET[masp]' ";
					mysqli_query($conn,$sql);
                    header('location:ADMIN.php?action=dssp');
        }
            
        else{ ?>
        <div id="error-notify" style=" margin: 0 auto; width: 800px;  border: 1px solid #ccc;  text-align: center; padding: 20px;">
            <h1>Thông báo</h1>
            <h4>Vui lòng nhập đầy đủ thông tin</h4>
            <A href="ADMIN.php?action=edit_sp_nam&masp=<?= $row['MaSP']?>">Quay lại</A>
        </div>
   <?php  }
}
else{
?>
<div name="" class="">
<form method="post" action="" name="" enctype="multipart/form-data">
    <table class="tble" border="1px solid #f3f3f3;" align="center" style="margin: 10px auto; text-align: center;">
        <!-- <tr>
            <td>MaSP: </td>
            <td><input name="txtmasp" type="text" value="<?= $row['MaSP'] ?>"/></td>
        </tr> -->
        <tr>
            <td>TenSP: </td>
            <td><input name="txttensp" type="text" value="<?= $row['TenSP'] ?>"/></td>
        </tr>
        <tr>
            <td>Image: </td>
			<td><input type="file" name="imga"></td>
			<td><img src="Img/<?= $row['Img']; ?>" style="max-width: 100px;"></td>	
        </tr>
        <tr>
            <td>Gia: </td>
            <td><input name="txtgia" type="text" value="<?= $row['Gia'] ?>"/></td>
        </tr>
        <tr>
            <td>Gene: </td>
            <td>
                <select name="txtgene">
                    <option>Man</option>
                    <option>Women</option>
                </select>
            </td>
        </tr>
        <tr>
               <td>TinhTrang: </td>
               <td>
                    <select name="txttinhtrang">
                        <option>Flash</option>
                        <option>Normal</option>
                    </select>
               </td>
           </tr>
        <tr>
        <tr>
        <td>Loai: </td>
               <td>
                    <select name="txtloai" >
                        <option><?= $row['Loai'] ?> </option>
                        <option>Áo Sơ mi nam </option>
                        <option>Áo thun nam</option>
                        <option>Đồ bộ nam</option>
                        <option>Áo Sơ mi nữ </option>
                        <option>Áo thun nữ</option>
                        <option>Đồ bộ nữ</option>
                    </select>
               </td>
        </tr>
        <tr>
               <td>SoLuong: </td>
               <td><input type="text" name="txtsoluong" value="<?= $row['SoLuong'] ?>"/></td>
           </tr>
        <tr>
            <td>Create_Time: </td>
            <td><input name="txtdate" type="text" value="<?= $row['Create_Time'] ?>"/></td>
        </tr>
        <tr>
            <td></td>
            <td><input name="btnsave" type="submit" value="SAVE"/></td>
        </tr>
    </table>
</form>
</div>
 <?php } ?>