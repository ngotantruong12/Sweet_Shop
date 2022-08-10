

<?php 
include "header.php"; ?>

<div class="banner" >
  <?php  include"slide.php";?>
</div>
    <!-- //  start content  -->
<div class="content"> 
    <!-- san pham ban chay nam -->
   <?php 
        include "nam_banchay.php";
    // <!-- end san pham nam -->

    // <!-- san pham ban chay nu -->
        include "nu_banchay.php";
    // <!-- end san pham nu -->

    // <!-- end content-->
    ?>
</div>
<?php  
include "footer.php";
?>