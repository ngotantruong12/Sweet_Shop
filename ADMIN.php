<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" type="text/css" href="./styleAD.css"/>
</head>
<body>
    
    <div class="container">
    <div class="menu">
       <div class="menu-top" id="centerr">
            <ul>
                <li>
                    <a href="ADMIN.php">
                        <img class="img-logo" src="image/logo0.jpg"/>
                    </a>
                </li>
                <li>
                    <h1 style=" Text-align: center;">QUẢN LÍ CỬA HÀNG THỜI TRANG - SWEET</h1>
                </li>
            </ul>
        </div>
        <div class="menu-top">
            <ul>
                <li>
                <a href="ADMIN.php">Trang chủ</a>
                </li>
                <li> 
                    <a href="ADMIN.php?action=dssp">Danh sác sản phẩm</a>
                </li>
                <li> 
                    <a href="ADMIN.php?action=dssp-nam">Danh sác sản phẩm nam</a>
                </li>
                <li>
                    <a href="ADMIN.php?action=dssp_nu">Danh sách sản phẩm nữ</a>
                </li>
                <li> 
                    <a href="ADMIN.php?action=dssp_nam_bc">Danh sác sản phẩm nam bán chạy</a>
                </li>
                <li>
                    <a href="ADMIN.php?action=dssp_nu_bc">Danh sách sản phẩm nữ bán chạy</a>
                </li>
                <li>
                    <a href="ADMIN.php?action=donhang">Danh sách chi tiết đơn hàng</a>
                </li>

            </ul>
        </div>
        </div>
        <div name="content">
            <?php require("content.php"); ?>
        </div>
    </div>
</body>
</html>