<?php
    $err = false;
    $about = false;
    $cart = false;
    $checkout = false;
    $compare = false;
    $contact = false;
    $fgpass = false;
    $idx_2 = false;
    $idx_3 = false;
    $idx_4 = false;
    $idx = true;
    $signin = false;
    $product = false;
    $register = false;
    $shop = false;
    $single_blog = false;
    $wishlist = false;
    $blog = false;
    include "head/header.php";
    include "component/com_general/bannerPopup.php";    
    include "component/com_general/newsLetterPopup.php";
    include "component/com_general/mainHeader.php";
    include "component/com_general/categoriesMenu&SliderArea.php";

    include "component/com_idx/brandBanner.php";
    include "component/com_idx/hotDealsProduct.php";
    include "component/com_idx/bigBanner.php";
    include "component/com_idx/arrivalsProduct1.php";
    include "component/com_idx/arrivalsProduct2.php";
    include "component/com_idx/likeProduct.php";
    include "component/com_idx/brandBannerend.php";

    include "component/com_general/supportArea.php";
    include "footer/footer.php";
    include "footer/quickView.php";
?>