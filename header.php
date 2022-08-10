<html>
<head>
    <title>Cửa hàng thời trang SWEET</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="formdangnhap.css"/> -->
</head>
<body>
    <!-- start menu -->
        <div class="menu">
            <div class="menu-top">
                <ul>
                    <li>
                        <a href="index.php">
                            <img class="img-logo" src="image/logo2.jpg"/>
                        </a>
                    </li>
                    <li>
                        <form action="search.php" method="POST">
                            <input class="button" type="text" name="txtsearch" placeholder="nhập sản phẩm"/>                    
                            <input  type="submit" name="btnsearch" value="Search" />
                        </form>
                    </li>
                </ul>
            </div>
            <div class="menu-botton">
                <ul>
                    <li>
                        <a href="index.php">
                           
                            Trang Chủ
                            <img class="btnlogo" src="image/logohmoe.png"/>
                        </a>
                    </li>
                    <li> 
                       <a>
                        <div class="dropdown">
                                Danh Mục Sản Phẩm
                                <img class="btnlogo" src="image/logodrop.jpg"/>   
                                <div class="dropdown-content">
                                    <a href="nam.php">Nam</a>
                                    <a href="nu.php">Nữ</a>      
                                </div>

                        </div>
                       </a>
                    </li>
                    <li>
                        <a href="aa/formdangnhap.html">
                            Login 
                             <img class="btnlogo" src="image/logologin.png"/>
                        </a>
                    </li>
                    <li>
                       <a href="giohang.php">
                             Giỏ Hàng
                            <img class="btnlogo" src="image/logogiohang.png"/>
                       </a>
                    </li>
                </ul>
            </div>
        </div>