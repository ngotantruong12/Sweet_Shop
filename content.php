<?php
if(isset($_GET['action'])){
    $row = $_GET['action'];
}
else $row = "";
// if($row == "dssp-nam"){
//     include "DSSP_Nam.php";
// }elseif($row == "add_sp_nam"){
//     include "add_sp_nam.php";
// }
// elseif($row == "dssp-nu"){
//     include "DSSP_Nu.php";
// }elseif($row == "dssp-nam-bc"){
//     include "DSSP_Nam_BC.php";
// }elseif($row == "dssp-nu-bc"){
//     include "DSSP_Nu_BC.php";
// }
switch ($row){
    case "dssp":  include "DSSP.php";
    break;

    // sp nam
    case "dssp-nam":  include "DSSP_Nam.php";
        break;
    
   
    // sp ban chay nam
    case "dssp_nam_bc":  include "DSSP_Nam_BC.php";
        break;
   
    //sp nu 
    case "dssp_nu":  include "DSSP_Nu.php";
        break;
    
    // sp nu ban chay
    case "dssp_nu_bc":  include "DSSP_Nu_BC.php";
        break;
    
    case "add":  include "add_sanpham.php";
    break;
    
    case "edit":  include "edit_sanpham.php";
        break;
    case "delete":  include "delete_sanpham.php";
        break;
    case "donhang":  include "donhang.php";
        break;
    }
?>