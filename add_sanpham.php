<?php
include "connect.php";
include 'function.php';
if(isset($_POST['btnadd'])){
    // $ma = $_POST['txtmasp'];
    $ten = $_POST['txttensp'];
    $anh = $_FILES['imga'];
    $gia = $_POST['txtgia'];
    $time = $_POST['txtdate'];
    $loai = $_POST['txtloai'];
    $tinhtrang= $_POST['txttinhtrang'];
    $gene = $_POST['txtgene'];
    $soluong = $_POST['txtsoluong'];

    if($anh !=NULL && !empty($ten) && !empty($gia) && !empty($time) && !empty($loai)&& !empty($tinhtrang) && !empty( $gene) && !empty( $soluong )){
       $uploadedFiles = $_FILES['imga'];
       $error = uploadFiles($uploadedFiles); // error == file name
       if(!empty($error)){
          $anh2 = $uploadedFiles["name"];
           $sql ="INSERT INTO sanpham( MaSP, TenSP, Img, Gia, Loai,TinhTrang, Gene, SoLuong, Create_Time) VALUES 
            (NULL ,'$ten', '$error','$gia', '$loai','$tinhtrang','$gene','$soluong', '$time ' )";
            mysqli_query($conn, $sql);
           header('location:ADMIN.php?action=dssp');
       }
        
    else {
           print_r($error);
          }
    }
    else{ ?>
       <div id="error-notify" style=" margin: 0 auto; width: 800px;  border: 1px solid #ccc;  text-align: center; padding: 20px;">
            <h1>Thông báo</h1>
            <h4>Vui lòng nhập đầy đủ thông tin</h4>
            <a href="ADMIN.php?action=add">Quay lại</a>
        </div>
  <?php  }
}
else{
 ?>
 <div>
     <form method="post" action="" name="" enctype="multipart/form-data">
        <table width="500"  border="1" style="margin: 10px auto;">
           <!-- <tr>
               <td>MaSP:</td>
               <td><input type="text" name="txtmasp"/></td>
           </tr> -->
           <tr>
               <td>TenSP:</td>
               <td><input type="text" name="txttensp"/></td>
           </tr>
           <tr>
               <td>Image:</td>
               <td><input  multiple  type="file" name="imga[]"/></td>
           </tr>
           <tr>
               <td>Gia: </td>
               <td><input type="text" name="txtgia"/></td>
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
               <td>Loai: </td>
               <td>
                    <select name="txtloai">
                        <option>Áo Sơ mi nam </option>
                        <option>Áo thun nam</option>
                        <option>Đồ bộ nam</option>
                        <option>Áo Sơ mi nữ </option>
                        <option>Áo thun nữ</option>
                        <option>Đồ bộ nữ</option>
                    </select>
               </td>
           </tr>x
           <tr>
               <td>SoLuong: </td>
               <td><input type="text" name="txtsoluong"/></td>
           </tr>
           <tr>
           <tr>
               <td>Create_Time: </td>
               <td><input type="date" name="txtdate"/></td>
           </tr>
            <tr >
                <td></td>
                <td > <input type="submit" name="btnadd" value="Thêm"/></td>
            </tr>
        </table>
     </form>
 </div>
 <?php } ?>