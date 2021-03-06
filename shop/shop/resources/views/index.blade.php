@extends('layouts.master')
@section('title', 'Home Page')
@section('popup')
	@parent
@endsection
@section('sidebar')
	@parent
@endsection

@section('content')

<div class="main-page-banner pb-50 off-white-bg">
            <div class="container">
                <div class="row">
                    <!-- Vertical Menu Start Here -->
                    <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                        <div class="vertical-menu mb-all-30">
                            <nav>
                                <ul class="vertical-menu-list">
                                    <li class=""><a href="shop.php"><span><img src="img\vertical-menu\1.png" alt="menu-icon"></span>Automotive & Motorcycle<i class="fa fa-angle-right" aria-hidden="true"></i></a>

                                        <ul class="ht-dropdown mega-child">
                                            <li><a href="shop.php">Office chair <i class="fa fa-angle-right"></i></a>
                                                 <!-- category submenu end-->
                                                <ul class="ht-dropdown mega-child">
                                                    <li><a href="shop.php">Bibendum Cursus</a></li>
                                                    <li><a href="shop.php">Dignissim Turpis</a></li>
                                                    <li><a href="shop.php">Dining room</a></li>
                                                    <li><a href="shop.php">Dining room</a></li>
                                                </ul>
                                                <!-- category submenu end-->
                                            </li>
                                            <li><a href="shop.php">Purus Lacus <i class="fa fa-angle-right"></i></a>
                                                 <!-- category submenu end-->
                                                <ul class="ht-dropdown mega-child">
                                                    <li><a href="shop.php">Magna Pellentesq</a></li>
                                                    <li><a href="shop.php">Molestie Tortor</a></li>
                                                    <li><a href="shop.php">Vehicula Element</a></li>
                                                    <li><a href="shop.php">Sagittis Blandit</a></li>
                                                </ul>
                                                <!-- category submenu end-->
                                            </li>                                            
                                            <li><a href="shop.php">Sagittis Eget</a></li>
                                            <li><a href="shop.php">Sagittis Eget</a></li>
                                        </ul>
                                        <!-- category submenu end-->
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\3.png" alt="menu-icon"></span>Sports & Outdoors<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu first-megamenu">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Cameras</li>
                                                    <li><a href="shop.php">Cords and Cables</a></li>
                                                    <li><a href="shop.php">gps accessories</a></li>
                                                    <li><a href="shop.php">Microphones</a></li>
                                                    <li><a href="shop.php">Wireless Transmitters</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="menu-tile">GamePad</li>
                                                    <li><a href="shop.php">real game hd</a></li>
                                                    <li><a href="shop.php">fighting game</a></li>
                                                    <li><a href="shop.php">racing pad</a></li>
                                                    <li><a href="shop.php">puzzle pad</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Digital Cameras</li>
                                                    <li><a href="shop.php">Camera one</a></li>
                                                    <li><a href="shop.php">Camera two</a></li>
                                                    <li><a href="shop.php">Camera three</a></li>
                                                    <li><a href="shop.php">Camera four</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="menu-tile">Virtual Reality</li>
                                                    <li><a href="shop.php">Reality one</a></li>
                                                    <li><a href="shop.php">Reality two</a></li>
                                                    <li><a href="shop.php">Reality three</a></li>
                                                    <li><a href="shop.php">Reality four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Megamenu Image Start -->
                                            <li class="megamenu-img">
                                                <a href="shop.php"><img src="img\vertical-menu\sub-img1.jpg" alt="menu-image"></a>
                                                <a href="shop.php"><img src="img\vertical-menu\sub-img2.jpg" alt="menu-image"></a>
                                                <a href="shop.php"><img src="img\vertical-menu\sub-img3.jpg" alt="menu-image"></a>
                                            </li>
                                            <!-- Single Megamenu Image End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\6.png" alt="menu-icon"></span>Fashion<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Men???s Fashion</li>
                                                    <li><a href="shop.php">Blazers</a></li>
                                                    <li><a href="shop.php">Boots</a></li>
                                                    <li><a href="shop.php">pants</a></li>
                                                    <li><a href="shop.php">Tops & Tees</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Women???s Fashion</li>
                                                    <li><a href="shop.php">Bags</a></li>
                                                    <li><a href="shop.php">Bottoms</a></li>
                                                    <li><a href="shop.php">Shirts</a></li>
                                                    <li><a href="shop.php">Tailored</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\7.png" alt="menu-icon"></span>Home & Kitchen<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Large Appliances</li>
                                                    <li><a href="shop.php">Armchairs</a></li>
                                                    <li><a href="shop.php">Bunk Bed</a></li>
                                                    <li><a href="shop.php">Mattress</a></li>
                                                    <li><a href="shop.php">Sideboard</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Small Appliances</li>
                                                    <li><a href="shop.php">Bootees Bags</a></li>
                                                    <li><a href="shop.php">Jackets</a></li>
                                                    <li><a href="shop.php">Shelf</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End --> 
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\4.png" alt="menu-icon"></span>Phones & Tablets<i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Tablet</li>
                                                    <li><a href="shop.php">tablet one</a></li>
                                                    <li><a href="shop.php">tablet two</a></li>
                                                    <li><a href="shop.php">tablet three</a></li>
                                                    <li><a href="shop.php">tablet four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Smartphone</li>
                                                    <li><a href="shop.php">phone one</a></li>
                                                    <li><a href="shop.php">phone two</a></li>
                                                    <li><a href="shop.php">phone three</a></li>
                                                    <li><a href="shop.php">phone four</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\6.png" alt="menu-icon"></span>TV & Video<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        <!-- Vertical Mega-Menu Start -->
                                        <ul class="ht-dropdown megamenu megamenu-two">
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Gaming Desktops</li>
                                                    <li><a href="shop.php">Alpha Desktop</a></li>
                                                    <li><a href="shop.php">rober Desktop</a></li>
                                                    <li><a href="shop.php">Ultra Desktop </a></li>
                                                    <li><a href="shop.php">beta desktop</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                            <!-- Single Column Start -->
                                            <li class="single-megamenu">
                                                <ul>
                                                    <li class="menu-tile">Women???s Fashion</li>
                                                    <li><a href="shop.php">3D-Capable</a></li>
                                                    <li><a href="shop.php">Clearance</a></li>
                                                    <li><a href="shop.php">Free Shipping Eligible</a></li>
                                                    <li><a href="shop.php">On Sale</a></li>
                                                </ul>
                                            </li>
                                            <!-- Single Column End -->
                                        </ul>
                                        <!-- Vertical Mega-Menu End -->
                                    </li>
                                     <li><a href="shop.php"><span><img src="img\vertical-menu\5.png" alt="menu-icon"></span>Beauty</a>
                                    </li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\8.png" alt="menu-icon"></span>Fruits & Veggies</a></li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\9.png" alt="menu-icon"></span>Computer & Laptop</a></li>
                                    <li><a href="shop.php"><span><img src="img\vertical-menu\10.png" alt="menu-icon"></span>Meat & Seafood</a></li>
                                    <!-- More Categoies Start -->
                                    <li id="cate-toggle" class="category-menu v-cat-menu">
                                        <ul>
                                            <li class="has-sub"><a href="#">More Categories</a>
                                                <ul class="category-sub">
                                                    <li><a href="shop.php"><span><img src="img\vertical-menu\11.png" alt="menu-icon"></span>Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- More Categoies End -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Vertical Menu End Here -->
                    <!-- Slider Area Start Here -->
                    <div class="col-xl-9 col-lg-8 slider_box">
                        <div class="slider-wrapper theme-default">
                            <!-- Slider Background  Image Start-->
                            <div id="slider" class="nivoSlider">
                                <a href="shop.php"><img src="img\slider\4.jpg" data-thumb="img/slider/1.jpg" alt="" title="#htmlcaption"></a>
                                <a href="shop.php"><img src="img\slider\3.jpg" data-thumb="img/slider/2.jpg" alt="" title="#htmlcaption2"></a>
                            </div>
                            <!-- Slider Background  Image Start-->
                        </div>
                    </div>
                    <!-- Slider Area End Here -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Brand Banner Area Start Here -->
        <div class="image-banner pb-50 off-white-bg">
            <div class="container">
                <div class="col-img">
                    <a href="#"><img src="img\banner\h1-banner.jpg" alt="image banner"></a>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <!-- Hot Deal Products Start Here -->
        <div class="hot-deal-products off-white-bg pb-90 pb-sm-50">
            <div class="container">
               <!-- Product Title Start -->
               <div class="post-title pb-30">
                   <h2>hot deals</h2>
               </div>
               <!-- Product Title End -->
                <!-- Hot Deal Product Activation Start -->
                <div class="hot-deal-active owl-carousel">
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Light Inverted Pendant Quick</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\30.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\31.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Calandiva Wrapped 12cm</a></h4>
                                <p><span class="price">$188.45</span><del class="prev-price">$190.50</del></p>
                                <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Gpoly and Bark Eames Styl...</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="single-product">
                        <!-- Product Image Start -->
                        <div class="pro-img">
                            <a href="product.php">
                                <img class="primary-img" src="img\products\10.jpg" alt="single-product">
                                <img class="secondary-img" src="img\products\11.jpg" alt="single-product">
                            </a>
                            <div class="countdown" data-countdown="2020/03/01"></div>
                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                        </div>
                        <!-- Product Image End -->
                        <!-- Product Content Start -->
                        <div class="pro-content">
                            <div class="pro-info">
                                <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                <div class="label-product l_sale">37<span class="symbol-percent">%</span></div>
                            </div>
                            <div class="pro-actions">
                                <div class="actions-primary">
                                    <a href="cart.php" title="Add to Cart">+ Add To Cart</a>
                                </div>
                                <div class="actions-secondary">
                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Content End -->
                        <span class="sticker-new">new</span>
                    </div>
                    <!-- Single Product End -->
                </div>
                <!-- Hot Deal Product Active End -->

            </div>
            <!-- Container End -->
        </div>
        <!-- Hot Deal Products End Here -->
        <!-- Hot Deal Products End Here -->
        <!-- Big Banner Start Here -->
        <div class="big-banner mt-100 pb-85 mt-sm-60 pb-sm-45">
            <div class="container banner-2">
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-1.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-2.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-3.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-4.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-5.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-6.jpg" alt="banner 3"></a>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-7.jpg" alt="banner 3"></a>
                    </div>
                    <div class="col-img">
                        <a href="#"><img src="img\banner\banner3-8.jpg" alt="banner 3"></a>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Big Banner End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Electronics & Digitals  </h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics">Electronics </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion">Fashion</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$188.45</span><del class="prev-price">$190.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                        <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Bark  Style</a></h4>
                                                        <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                        <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Vortex Side</a></h4>
                                                        <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                        <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\15.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\16.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark Vortex Side Eames</a></h4>
                                                        <p><span class="price">$188.45</span><del class="prev-price">$190.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\13.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\14.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\39.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\38.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Robert Welch Knife Block</a></h4>
                                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\35.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\36.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and  Vortex Side</a></h4>
                                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\34.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\35.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Compary and Bark Vortex Shewe</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\32.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\33.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">kallery kids  weare</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\41.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\39.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\9.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\10.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\electorince.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Flos Chasen S2 Suspension</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\19.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\20.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Country Squire Florist</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\20.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\21.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Concord Fabric Single</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\21.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\22.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Vortex and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\26.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\27.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\28.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\29.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Electronic and Bark Vortex</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Womens Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Womens & Mens </h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fshion-wmn">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-wmn">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-wmn">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids-wmn">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-wmn">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids-wmn">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-wmn">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion-wmn" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-wmn.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\13.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                        <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Bark  Style</a></h4>
                                                        <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                        <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Vortex Side</a></h4>
                                                        <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                        <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\15.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\16.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark Vortex Side Eames</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\13.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\14.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids-wmn" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-wmn.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\13.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\39.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\38.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Robert Welch Knife Block</a></h4>
                                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\35.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\36.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and  Vortex Side</a></h4>
                                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\34.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\35.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Compary and Bark Vortex Shewe</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\32.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\33.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">kallery kids  weare</a></h4>
                                                        <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty-wmn" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-wmn.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\13.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\41.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\39.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\9.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\10.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics-wmn" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-wmn.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\2.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\13.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Flos Chasen S2 Suspension</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\19.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\20.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Country Squire Florist</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\20.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\21.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Concord Fabric Single</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\21.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\22.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Vortex and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\26.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\27.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\28.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\29.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Electronic and Bark Vortex</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Womens Products Area End Here -->
        <!-- Furniture Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Furnitures & Decors </h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#fshion-fnd">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-fnd">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-fnd">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids-fnd">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-fnd">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids-fnd">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-fnd">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion-fnd" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-fnd.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$90.45</span><del class="prev-price">$120.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                        <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Bark  Style</a></h4>
                                                        <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                        <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Vortex Side</a></h4>
                                                        <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                        <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\15.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\16.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark Vortex Side Eames</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\13.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\14.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids-fnd" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-fnd.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\39.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\38.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Robert Welch Knife Block</a></h4>
                                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\35.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\36.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and  Vortex Side</a></h4>
                                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\34.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\35.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Compary and Bark Vortex Shewe</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\32.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\33.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">kallery kids  weare</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty-fnd" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-fnd.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\41.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\39.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\9.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\10.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics-fnd" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-fnd.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Flos Chasen S2 Suspension</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\19.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\20.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Country Squire Florist</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\20.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\21.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Concord Fabric Single</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\21.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\22.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Vortex and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\26.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\27.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\28.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\29.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Electronic and Bark Vortex</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Furniture Products Area End Here -->
        <!-- Kids Products Area Start Here -->
        <div class="arrivals-product pb-85 pb-sm-45">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Kids & Toys </h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kids-kds">Baby/Kids</a>
                            </li>                            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion-kds">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-kds">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-kds">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids-kds">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty-kds">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics-kds">Electronics </a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion-kds" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-kds.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\2.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                        <p><span class="price">$320.45</span><del class="prev-price">$400.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$150.30</span><del class="prev-price">$175.50</del></p>
                                                        <div class="label-product l_sale">10<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Bark  Style</a></h4>
                                                        <p><span class="price">$180.45</span><del class="prev-price">$200.50</del></p>
                                                        <div class="label-product l_sale">18<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Eames and Vortex Side</a></h4>
                                                        <p><span class="price">$160.45</span><del class="prev-price">$190.50</del></p>
                                                        <div class="label-product l_sale">12<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\15.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\16.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark Vortex Side Eames</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\13.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\14.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids-kds" class="tab-pane fade show active">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-kds.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$300.50</del></p>
                                                        <div class="label-product l_sale">25<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\39.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\38.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Robert Welch Knife Block</a></h4>
                                                        <p><span class="price">$100.45</span><del class="prev-price">$150.50</del></p>
                                                        <div class="label-product l_sale">30<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$90.50</span><del class="prev-price">$120.50</del></p>
                                                        <div class="label-product l_sale">15<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\35.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\36.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and  Vortex Side</a></h4>
                                                        <p><span class="price">$69.20</span><del class="prev-price">$145.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\34.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\35.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Compary and Bark Vortex Shewe</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\32.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\33.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">kallery kids  weare</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty-kds" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-kds.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\41.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\39.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\9.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\10.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics-kds" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-5 order-2 order-lg-1">
                                    <div class="banner-site-box mt-10">
                                        <div class="col-img">
                                            <a href="#"><img src="img\banner\banner-kds.jpg" alt=""></a>
                                        </div>
                                        <!-- Single Product Start -->
                                        <div class="single-product mt-20">
                                            <!-- Product Image Start -->
                                            <div class="pro-img">
                                                <a href="product.php">
                                                    <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                                    <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                                </a>
                                                <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                            </div>
                                            <!-- Product Image End -->
                                            <!-- Product Content Start -->
                                            <div class="pro-content">
                                                <div class="pro-info">
                                                    <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                                    <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                    <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                </div>
                                            </div>
                                            <!-- Product Content End -->
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                </div>
                                <div class="col-lg-7 order-1 order-lg-2">
                                    <!-- Arrivals Product Activation Start Here -->
                                    <div class="electronics-pro-active2 owl-carousel">
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\17.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\18.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Flos Chasen S2 Suspension</a></h4>
                                                        <p><span class="price">$99.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\19.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\20.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Country Squire Florist</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\20.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\21.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Concord Fabric Single</a></h4>
                                                        <p><span class="price">$99.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\21.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\22.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\23.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\24.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                        <p><span class="price">$99.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Vortex and Bark Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                        <!-- Double Product Start -->
                                        <div class="double-product">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\26.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\27.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Bark and Vortex Side</a></h4>
                                                        <p><span class="price">$84.45</span><del class="prev-price">$105.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                             <!-- Single Product Start -->
                                            <div class="single-product">
                                                <!-- Product Image Start -->
                                                <div class="pro-img">
                                                    <a href="product.php">
                                                        <img class="primary-img" src="img\products\28.jpg" alt="single-product">
                                                        <img class="secondary-img" src="img\products\29.jpg" alt="single-product">
                                                    </a>
                                                    <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                                </div>
                                                <!-- Product Image End -->
                                                <!-- Product Content Start -->
                                                <div class="pro-content">
                                                    <div class="pro-info">
                                                        <h4><a href="product.php">Electronic and Bark Vortex</a></h4>
                                                        <p><span class="price">$100.45</span><del class="prev-price">$115.50</del></p>
                                                        <div class="label-product l_sale">20<span class="symbol-percent">%</span></div>
                                                    </div>
                                                    <div class="pro-actions">
                                                        <div class="actions-primary">
                                                            <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                        </div>
                                                        <div class="actions-secondary">
                                                            <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                            <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Content End -->
                                                <span class="sticker-new">new</span>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <!-- Double Product End -->
                                    </div>
                                    <!-- Arrivals Product Activation End Here -->
                                </div>
                            </div>                            
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Kids Products Area End Here -->
        <!-- Arrivals Products Area Start Here -->
        <div class="second-arrivals-product pb-45 pb-sm-5">
            <div class="container">
                <div class="main-product-tab-area">
                    <div class="tab-menu mb-25">
                        <div class="section-ttitle">
                            <h2>Best Seller</h2>
                       </div>
                        <!-- Nav tabs -->
                        <ul class="nav tabs-area" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#electronics2">Electronics </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#electronics2">Sport/Outdoor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Living</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#beauty2">Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kids2">Baby/Kids</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#fshion2">Fashion</a>
                            </li>
                        </ul>                       

                    </div> 

                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="fshion2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\2.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Work Lamp Silver Proin</a></h4>
                                                <p><span class="price">$320.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                                <p><span class="price">$150.30</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$150.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\8.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\9.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Eames and Bark  Style</a></h4>
                                                <p><span class="price">$180.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Eames and Vortex Side</a></h4>
                                                <p><span class="price">$160.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\15.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\16.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Bark Vortex Side Eames</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                    <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\13.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\14.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$95.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                                     <!-- Single Product Start -->
                                    <div class="single-product">
                                        <!-- Product Image Start -->
                                        <div class="pro-img">
                                            <a href="product.php">
                                                <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                                <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                            </a>
                                            <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                        </div>
                                        <!-- Product Image End -->
                                        <!-- Product Content Start -->
                                        <div class="pro-content">
                                            <div class="pro-info">
                                                <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                                <p><span class="price">$84.45</span></p>
                                            </div>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                    <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Product Content End -->
                                    </div>
                                    <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="kids2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\42.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\43.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Utensils and Knives Block</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\40.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\41.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Terra Xpress HE Cooking </a></h4>
                                            <p><span class="price">$63.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\39.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\38.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Robert Welch Knife Block</a></h4>
                                            <p><span class="price">$100.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\36.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\37.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$90.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\35.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\36.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Bark and  Vortex Side</a></h4>
                                            <p><span class="price">$69.20</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\34.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\35.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Compary and Bark Vortex Shewe</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\32.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\33.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">kallery kids  weare</a></h4>
                                            <p><span class="price">$98.50</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\1.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\7.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #fshion End Here -->
                        <div id="beauty2" class="tab-pane fade">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\43.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\42.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\41.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\39.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\5.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\6.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\9.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\10.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\11.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\12.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\3.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\4.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #beauty End Here -->
                        <div id="electronics2" class="tab-pane fade show active">
                            <!-- Arrivals Product Activation Start Here -->
                            <div class="best-seller-pro-active owl-carousel">
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\17.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\18.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Flos Chasen S2 Suspension</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\19.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\20.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Country Squire Florist</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\20.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\21.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Concord Fabric Single</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\21.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\22.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Poly and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\23.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\24.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Gpoly and Bark Eames Style</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\24.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\25.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Vortex and Bark Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\26.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\27.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Bark and Vortex Side</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                                 <!-- Single Product Start -->
                                <div class="single-product">
                                    <!-- Product Image Start -->
                                    <div class="pro-img">
                                        <a href="product.php">
                                            <img class="primary-img" src="img\products\28.jpg" alt="single-product">
                                            <img class="secondary-img" src="img\products\29.jpg" alt="single-product">
                                        </a>
                                        <a href="#" class="quick_view" data-toggle="modal" data-target="#myModal" title="Quick View"><i class="lnr lnr-magnifier"></i></a>
                                    </div>
                                    <!-- Product Image End -->
                                    <!-- Product Content Start -->
                                    <div class="pro-content">
                                        <div class="pro-info">
                                            <h4><a href="product.php">Electronic and Bark Vortex</a></h4>
                                            <p><span class="price">$84.45</span></p>
                                        </div>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="cart.php" title="Add to Cart"> + Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a href="compare.php" title="Compare"><i class="lnr lnr-sync"></i> <span>Add To Compare</span></a>
                                                <a href="wishlist.php" title="WishList"><i class="lnr lnr-heart"></i> <span>Add to WishList</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Content End -->
                                </div>
                                <!-- Single Product End -->
                            </div>
                            <!-- Arrivals Product Activation End Here -->
                        </div>
                        <!-- #electronics End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Arrivals Products Area End Here -->
        <!-- Latest Blog Area Start Here -->
        <div class="blog-area ptb-95 off-white-bg ptb-sm-55">
            <div class="container">
                <div class="like-product-area"> 
                    <h2 class="section-ttitle2 mb-30">Latest Blog Post </h2>
               <!-- Latest Blog Active Start Here -->
               <div class="latest-blog-active owl-carousel">
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                       <div class="blog-img">
                           <a href="single-blog.php"><img src="img\blog\1.jpg" alt="blog-image"></a>
                       </div>
                       <div class="blog-desc">
                           <h4><a href="single-blog.php">At wisi enim ad minim veniam.</a></h4>
                            <ul class="meta-box d-flex">
                                <li><a href="#">By Truemart</a></li>
                            </ul>
                            <p>Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...</p>
                            <a class="readmore" href="single-blog.php">Read More</a>
                       </div>
                       <div class="blog-date">
                            <span>28</span>
                            June
                        </div>
                   </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                       <div class="blog-img">
                           <a href="single-blog.php"><img src="img\blog\2.jpg" alt="blog-image"></a>
                       </div>
                       <div class="blog-desc">
                           <h4><a href="single-blog.php">Dt wisi enim ad minim veniam.</a></h4>
                            <ul class="meta-box d-flex">
                                <li><a href="#">By Truemart</a></li>
                            </ul>
                            <p>Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...</p>
                            <a class="readmore" href="single-blog.php">Read More</a>
                       </div>
                       <div class="blog-date">
                            <span>28</span>
                            June
                        </div>
                   </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                       <div class="blog-img">
                           <a href="single-blog.php"><img src="img\blog\1.jpg" alt="blog-image"></a>
                       </div>
                       <div class="blog-desc">
                           <h4><a href="single-blog.php">At wisi enim ad minim veniam.</a></h4>
                            <ul class="meta-box d-flex">
                                <li><a href="#">By Truemart</a></li>
                            </ul>
                            <p>Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...</p>
                            <a class="readmore" href="single-blog.php">Read More</a>
                       </div>
                       <div class="blog-date">
                            <span>28</span>
                            June
                        </div>
                   </div>
                   <!-- Single Blog End -->
                   <!-- Single Blog Start -->
                   <div class="single-latest-blog">
                       <div class="blog-img">
                           <a href="single-blog.php"><img src="img\blog\2.jpg" alt="blog-image"></a>
                       </div>
                       <div class="blog-desc">
                           <h4><a href="single-blog.php">Dt wisi enim ad minim veniam.</a></h4>
                            <ul class="meta-box d-flex">
                                <li><a href="#">By Truemart</a></li>
                            </ul>
                            <p>Aenean vestibulum pretium enim vitae , non commodo urna volutpat . Pellentesque vel lacus  eget est d...</p>
                            <a class="readmore" href="single-blog.php">Read More</a>
                       </div>
                       <div class="blog-date">
                            <span>28</span>
                            June
                        </div>
                   </div>
                   <!-- Single Blog End -->

               </div>
               <!-- Latest Blog Active End Here -->
                </div>
                <!-- main-product-tab-area-->
            </div>
            <!-- Container End -->
        </div>
        <!-- Latest Blog s Area End Here -->

        <!-- Brand Banner Area Start Here -->
        <div class="main-brand-banner pt-95 pb-100 pt-sm-55 pb-sm-60">
            <div class="container">
                <div class="section-ttitle mb-30">
                    <h2>Hot Brands</h2>
               </div>
                <div class="row no-gutters">
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="img\banner\h1-band1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Brand Banner Start -->
                        <div class="brand-banner owl-carousel">
                            <div class="single-brand">
                                <a href="#"><img class="img" src="img\brand\1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img class="img" src="img\brand\1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img\brand\1.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>

                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                            <div class="single-brand">
                                <a href="#"><img src="img\brand\2.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\3.jpg" alt="brand-image"></a>
                                <a href="#"><img src="img\brand\4.jpg" alt="brand-image"></a>
                            </div>
                        </div>
                        <!-- Brand Banner End -->                        

                    </div>
                    <div class="col-lg-3">
                        <div class="col-img">
                            <img src="img\banner\h1-band2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Brand Banner Area End Here -->
        <div class="big-banner pb-100 pb-sm-60">
            <div class="container big-banner-box">
                <div class="col-img">
                    <a href="#">
                    <img src="img\banner\5.jpg" alt="">
                    </a>
                </div>
                <div class="col-img">
                    <a href="#">
                    <img src="img\banner\h1-banner3.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Container End -->
        </div>



        <!-- Support Area Start Here -->
        <div class="support-area bdr-top">
            <div class="container">
                <div class="d-flex flex-wrap text-center">
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-gift"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Great Value</h6>
                            <span>Nunc id ante quis tellus faucibus dictum in eget.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                            <i class="lnr lnr-rocket"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Worlwide Delivery</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-lock"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Safe Payment</h6>
                            <span>Duis suscipit elit sem, sed mattis tellus accumsan.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-enter-down"></i>
                        </div>
                        <div class="support-desc">
                            <h6>Shop Confidence</h6>
                            <span>Faucibus dictum suscipit eget metus. Duis  elit sem, sed.</span>
                        </div>
                    </div>
                    <div class="single-support">
                        <div class="support-icon">
                           <i class="lnr lnr-users"></i>
                        </div>
                        <div class="support-desc">
                            <h6>24/7 Help Center</h6>
                            <span>Quisque posuere enim augue, in rhoncus diam dictum non.</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        @endsection
