<?php
    $conn = mysqli_connect("localhost", "root", "", "SWEET") or die("ERROR CONNECT");
    //mysqli_character_set_name($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8' ");
?>