<?php 
    include('main.php') 
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Adara - Modern & Multipurpose eCommerce Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/jarallax.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                            <div class="logo">
                                <a href="index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-6">
                            <div class="header-top-offer">
                                <p>SUMMER SALE UP TO <span>70% OFF.</span> SHOP NOW</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="header-top-action">
                                <ul>
                                    <li class="sign-in"><a href="#">Sign In</a></li>
                                    <li class="wish-list"><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                    <li class="header-shop-cart"><a href="cart.php"><i class="flaticon-shopping-bag"></i><span><?php 
                                      if (isset($_SESSION['cart'])) {
                                          # code...
                                          echo count($_SESSION['cart']); 
                                      }
                                      else{
                                          echo 0;
                                      }
                                    ?></span></a>
                                        <ul class="minicart">
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="img/cart_p01.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Exclusive Winter Jackets</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <div class="cart-img">
                                                    <a href="#"><img src="img/cart_p02.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h4><a href="#">Winter Jackets For Women</a></h4>
                                                    <div class="cart-price">
                                                        <span class="new">$229.9</span>
                                                        <span><del>$229.9</del></span>
                                                    </div>
                                                </div>
                                                <div class="del-icon">
                                                    <a href="#"><i class="far fa-trash-alt"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$239.9</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="cart.php">Shopping Cart</a>
                                                    <a class="black-color" href="checkout">Checkout</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area black-bg">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <a href="index.html" class="main-logo"><img src="img/w_logo.png" alt="Logo"></a>
                                        <a href="index.html" class="sticky-logo"><img src="img/logo.png" alt="Logo"></a>
                                    </div>
                                    <div class="header-category d-none d-lg-block">
                                        <a href="#" class="cat-toggle"><i class="fas fa-bars"></i>ALL DEPARTMENT</a>
                                        <ul class="category-menu">
                                            <li class="has-dropdown"><a href="#">Accessories & Parts</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown"><a href="#">Cables & Adapters</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Batteries</a></li>
                                            <li><a href="#">Chargers</a></li>
                                            <li><a href="#">Bags & Cases</a></li>
                                            <li><a href="#">Electronic Cigarettes</a></li>
                                            <li><a href="#">Audio & Video</a></li>
                                            <li><a href="#">Televisions</a></li>
                                            <li><a href="#">TV Receivers</a></li>
                                            <li class="has-dropdown"><a href="#">Projectors</a>
                                                <ul class="cat-mega-menu">
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Electronic Cigarettes</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Smart Electronics</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Portable Audio & Video</li>
                                                            <li><a href="#">Audio & Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">TV Receivers</a></li>
                                                            <li><a href="#">Projectors</a></li>
                                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <ul>
                                                            <li class="dropdown-title">Accessories & Parts</li>
                                                            <li><a href="#">Cables & Adapters</a></li>
                                                            <li><a href="#">Batteries</a></li>
                                                            <li><a href="#">Chargers</a></li>
                                                            <li><a href="#">Bags & Cases</a></li>
                                                        </ul>
                                                        <ul>
                                                            <li class="dropdown-title">Audio & Video</li>
                                                            <li class="cat-mega-menu-banner"><a href="#"><img src="img/images/megamenu_banner.jpg" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Audio Amplifier Boards</a></li>
                                            <li><a href="#">TV Sticks</a></li>
                                        </ul>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="submenu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Categories</a>
                                                <ul class="submenu">
                                                <?php 
                                                     foreach ($obj->sel_cat() as $row) {
                                                         # code...  ?>
                                                     <li class=""><a href="products.php?c_id=<?php echo $row['id'] ?>"> <span><?php echo  $row['name'] ?></span></a></li>
                                                    <?php
                                                     }
                                                ?>
                                                  
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="shipping-offer">Free Shipping on Orders <span>$39+</span></li>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search-interface-symbol"></i></a></li>
                                            <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="img/icon/sidebar_toggle_icon.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="#">Home</a>
                                                <ul class="submenu">
                                                    <li class="active"><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="cart.html">Checkout Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="#">blog</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Search -->
            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form>
                            <input type="text" placeholder="Search here...">
                            <button><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Search-end -->

            <!-- off-canvas-start -->
            <div class="sidebar-off-canvas info-group">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-widget scroll">
                    <div class="sidebar-widget-container">
                        <div class="off-canvas-heading">
                            <a href="#" class="close-side-widget">
                                <span class="flaticon-targeting-cross"></span>
                            </a>
                        </div>
                        <div class="sidebar-textwidget">
                            <div class="sidebar-info-contents">
                                <div class="content-inner">
                                    <div class="logo mb-30">
                                        <a href="index.html"><img src="img/logo.png" alt=""></a>
                                    </div>
                                    <div class="content-box">
                                        <p>WooCommerce and WordPress are both free, open source software reasons many ...</p>
                                    </div>
                                    <div class="contact-info">
                                        <h4 class="title">CONTACT US</h4>
                                        <ul>
                                            <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444 0000</a></li>
                                            <li><span class="flaticon-email"></span><a href="/cdn-cgi/l/email-protection#ff9e9b9e8d9ebf96919990d19c9092"><span class="__cf_email__" data-cfemail="7e1f1a1f0c1f3e17101811501d1113">[email&#160;protected]</span></a></li>
                                            <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                        </ul>
                                    </div>
                                    <div class="oc-newsletter">
                                        <h4 class="title">NEWSLETTER</h4>
                                        <p>Fill your email below to subscribe to my newsletter</p>
                                        <form action="#">
                                            <input type="email" placeholder="Email...">
                                            <button class="btn">Subscribe</button>
                                        </form>
                                    </div>
                                    <div class="oc-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="oc-bottom">
                                        <div class="currency">
                                            <form action="#">
                                                <label>Currency</label>
                                                <select name="select">
                                                    <option value="">USD</option>
                                                    <option value="">AUE</option>
                                                    <option value="">SAR</option>
                                                    <option value="">INR</option>
                                                    <option value="">BDT</option>
                                                </select>
                                            </form>
                                        </div>
                                        <div class="language">
                                            <form action="#">
                                                <label>Language</label>
                                                <select name="select">
                                                    <option value="">English</option>
                                                    <option value="">Spanish</option>
                                                    <option value="">Turkish</option>
                                                    <option value="">Russian</option>
                                                    <option value="">Chinese</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- off-canvas-end -->

        </header>
        <!-- header-area-end -->
