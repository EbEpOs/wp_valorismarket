<?php
include("header.php")
?>
    <!-- Off-canvas account-->
    <?php
    include("inc/canvas_signinup.php");
    ?>
    <!-- Off-canvas cart-->
    <?php
        include("inc/canvas_cart.php");
    ?>
    <!-- Navbar Multilevel-->
    <!-- First line: Topbar-->
    <?php
        include("inc/navbar_first_line.php");
    ?>
    <!-- Second line-->
    <?php
    include("inc/navbar_second_line.php");
    ?>
    <!-- Third line: Navigation-->
    <?php
    include("inc/navbar_third_line.php");
    ?>
    <!-- Page Content-->
    <!-- Hero slider + Promo list-->
    <?php
        include('inc/menu_sidebar_category.php');
    ?>
    <!-- Featured products grid-->
    <?php
        include('inc/feature_products.php');
    ?>
    <!-- Promo banner-->
    <?php
        include('inc/promo_banner.php');
    ?>
    <!-- Brands carousel-->
    <?php
        include('inc/brand_caroussel.php');
    ?>
    <!-- Product widgets-->
    <?php
        include('inc/product_widget.php');
    ?>
    <!-- Footer-->
    <?php
        include('inc/footer.php');
    ?>
    <!-- Back To Top Button-->
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->

<?php
include('footer.php');
?>