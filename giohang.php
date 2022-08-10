<?php ?>
<?php //var_dump($_POST); exit;
Session_Start(); // khai bao 1 session
include "header.php";
include "connect.php";
 // var_dump($_POST); exit; //action form tu trang chitietsanpham vd: array(2) { ["txtsoluong"]=> array(1) { [15]=> string(1) "2" } ["btnmua"]=> string(17) "Mua Sản Phẩm " }
    if (!isset($_SESSION["giohang"])) {
        $_SESSION["giohang"] = array();
    }
    $error = false; 
    $sucess = false;
    if(isset($_GET['action'])){
        function update_giohang($add = false){ // add = true
            foreach ($_POST['txtsoluong'] as $masp => $soluong) {
                if($soluong ==0){
                    unset( $_SESSION['giohang'][$masp]);  // xoa 1 sp, nsu sp do co so luong bang 0
                }
                else{
                    if ($add){
                       // var_dump( $_SESSION['giohang'][$masp]); exit;
                        $_SESSION['giohang'][$masp] += $soluong ; // gan cho sesson,  cong don san pham, neu san pham do da "ton tai"
                       
                    }
                    else{
                        $_SESSION['giohang'][$masp] = $soluong;
                    }
                }
            }
            
        }              

        
        switch ($_GET['action']){
            case "add":
                update_giohang(true);
                header('Location: giohang.php');
             //    var_dump($_SESSION['giohang']); exit;   //danh sach cac key va values khi nhan btn mua sanpham vd:   // array(2) { [19]=> string(1) "4" [15]=> string(1) "2" }
                
                // var_dump(array_keys($_SESSION['giohang']) );exit; danh sach cac key cua session  vd: array(2) { [0]=> int(19) [1]=> int(15) }
        //    var_dump( implode(",", array_keys($_SESSION['giohang']) )); exit; noi cac key lai voi nhau ki tu "  , " vd: string(5) "19,15"
            break;
            case "delete":
               unset( $_SESSION['giohang'] [$_GET['masp']] ); // xoa masp (key) trong session
               header('location: giohang.php');
            break;
            case "submit":
//var_dump($_POST); exit;
                if(isset($_POST['btnupdate'])){
                    
                   update_giohang(); 
                   header('location: giohang.php');         
                }
                elseif(isset($_POST['btndathang'])){
                    //var_dump($_POST); exit;
                    if(empty($_POST['name'])){
                        $error = "Vui Long Nhap Ten";                      
                    }
                    elseif(empty($_POST['phone'])){
                        $error = "Vui Long Nhap So Dien Thoai";                        
                    }
                    elseif(empty($_POST['address'])){
                    $error = "Vui Long Nhap Dia Chi";
                    }elseif(empty($_POST['txtsoluong'])){
                        $error = "Gio Hang Rong";
                    }
                    if($error == false && !empty($_POST['txtsoluong'])){ // k loi va co so luong ->database
                      // var_dump($_POST['txtsoluong']); exit;
                      // "SELECT * FROM sanpham WHERE MaSP IN (15)"
                      $sql= "SELECT * FROM sanpham WHERE MaSP IN (".implode(",", array_keys($_SESSION['giohang']) ).")";
                      $result = mysqli_query($conn,$sql );
                    //  var_dump($_POST); exit;
                        $tongtien =0;
                        $orderSP = array();
                    while( $row =  mysqli_fetch_array($result)){
                       $orderSP[] = $row;
                       // $tongtien = $row['Gia'] *  $_POST['txtsoluong'][$row['MaSP']] ; tong tien 1 san pham
                       $tongtien += $row['Gia'] * $_POST['txtsoluong'][$row['MaSP']] ;// tong tien cac san pham
                        
                   } // them vao bang order
                        $sql_order = "INSERT INTO `order` (`orderID`, `Ten`, `SDT`, `DiaChi`, `GhiChu`, `TongTien`, `Create_Time`) VALUES (NULL, '".$_POST['name']."',  '".$_POST['phone']."', '".$_POST['address']."',  '".$_POST['note']."', '$tongtien', ".time().");";    
                        //echo date("d/m/Y H:i", 1611309199)  ; exit;   in ngay kieu int    
                        $result_order =  mysqli_query($conn,$sql_order  );
                       $order_id = $conn->insert_id; // lay ma ID cua san pham vua them
                       // var_dump(  $order_id ); exit;
                       // THEM VAO BANG CHITIET_ORDER
                       $insertstring = "";
                       foreach($orderSP as $key => $sanpham){
                          // var_dump($sanpham);exit;
                           $insertstring .= "(NULL, '".$order_id."', '".$sanpham['MaSP']."', '".$sanpham['Gia']."', '".$_POST['txtsoluong'][$sanpham['MaSP']]."',".time()." )";
                            if($key != count($orderSP) -1){ // them dau phay (,) sau moi lan them, dieu kien them la nho hon so phan tu cua mang
                                $insertstring .= ",";
                            }
                        }
                       // $sql_chitietorder("INSERT INTO `chitiet_order` (`id`, `orderID`, `MaSP`, `Gia`, `SoLuong`, `Time`) VALUES ".$insertstring .";");
                        $insertorder = mysqli_query ($conn, "INSERT INTO `chitiet_order` (`id`, `orderID`, `MaSP`, `Gia`, `SoLuong`, `Time`) VALUES ".$insertstring .";");
                       //var_dump($insertorder); exit;
                       $sucess = "Đã Đặt Hàng Thành Công";
                       unset($_SESSION['giohang']);
                        }
                  
                   //  echo $error;  
                    }
                
            break;
        }
    }
    if(!empty($_SESSION['giohang'])){
        $sql ="SELECT * FROM sanpham WHERE MaSP IN (".implode(",", array_keys($_SESSION['giohang']) ).")"; // lay key cua session, roi gom no lai (a,a,b,....)
        $result = mysqli_query($conn, $sql);
        // var_dump($_result); exit;  ......... ["num_rows"]=> int(2) ............
    }

    if(!empty($error)){  // neu nhu k nhap ten, sdt, dia chi?> 
       <div class="error_giohang">
            <?= $error ?>. <a href="javascript:history.back()">Quay Lai</a>
       </div>
    <?php } elseif(!empty($sucess)){  // sau khi mua hang thanh cong ?> 
        <div class="error_giohang">
            <?= $sucess ?>. <a href="index.php">Tiếp tục mua hàng</a>
       </div>
    <?php }
    else { ?>
        
 
    <div class="giohang" >
    <form method="POST" action="giohang.php?action=submit">
    <table boder="1px solid black;" style=" width: 1000px ;margin: 5px  auto;">
        <tr>
            <td>STT</td>
            <td>Tên Sản Phẩm</td>
            <td>Ảnh Sản Phẩm</td>
            <td>Đơn Giá</td>
            <td>Số Lượng</td>
            <td>Thành Tiền</td>
            <td>Xóa</td>
        </tr>
        <?php
        if(!empty($result)){ // neu xoa het san pham
            $stt= 0;
            $tongtien = 0;
            while ($row = mysqli_fetch_array($result)) {  //var_dump($row); exit;
         ?>
            <tr>
            <td><?= $stt ?></td>
            <td ><?= $row['TenSP']?></td>
            <td><img style="height: 100px; width:100px;" src="Img/<?= $row['Img']?>"/></td>
            <td ><?= $row['Gia']?></td>
            <td><input size="2" name="txtsoluong[<?= $row['MaSP']?>]" type="text" value="<?= $_SESSION["giohang"][$row['MaSP']]  ?>"/></td>
            <td><?= $row['Gia'] *  $_SESSION["giohang"][$row['MaSP']] ?> </td>
            <td> <a onclick="return window.confirm('Bạn muốn xóa không');" href="giohang.php?action=delete&masp=<?=  $row['MaSP']; ?>">DELETE</a></td>
        </tr>
        <?php $stt++; 
        $tongtien +=  $row['Gia'] *  $_SESSION["giohang"][$row['MaSP']];
         }   
       ?>
        
        <tr id="row-total">
            <td>&nbsp</td>
            <td>Tổng Tiền</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
            <td><?= $tongtien ?></td>
            <td>&nbsp</td>
        </tr>
    <?php } ?>
    </table>
    <div class="">
       <input type="submit" name="btnupdate" value="Update"/>
    </div>
   <hr> 
        <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
        <div><label>Điện thoại:     </label><input type="text" value="" name="phone" /></div>
        <div><label>Địa chỉ:         </label><input type="text" value="" name="address" /></div>
        <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
        <input type="submit" name="btndathang" value="Đặt hàng" /> 
    </form>
     
</div>


<?php   } ?>
<?php  
include "footer.php";
?>