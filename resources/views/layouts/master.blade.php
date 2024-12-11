<!DOCTYPE html>
<html>

<head>
    <title>Rocrita</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link href="/rockrita/css/style.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <main class="app-container">
        <!-- Header Main Section Start -->
        <div class="header-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-txt">
                            <h5>Quality outfits save upto 20%</h5>
                            <a href="mailto:teronicajay@yahoo.com"><i class="bx bx-envelope"></i>
                                teronicajay@yahoo.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <header class="header-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header-logo">
                            <a href="/"><img src="rockrita/images/logo.png" alt="" /></a>
                            </li>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-search-bar">
                            <select name="" id="">
                                <option value="">All</option>
                                <option value="">All</option>
                                <option value="">All</option>
                            </select>
                            <input type="search" name="" id="" placeholder="Search Products" />
                            <button type="submit"><i class="ri-search-line"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="header-socials">
                            <ul>
                                <li>
                                    <a href="/login"><i class="bx bx-user"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-shopping-cart-line"></i></a>
                                </li>
                                <li><span>0</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="header-nav">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-right" data-aos-duration="1000">
                        <div class="navigation-bar">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About us</a></li>
                                <li><a href="/wig">Wigs</a></li>
                                <li><a href="/glueless">Glueless wig</a></li>
                                <li><a href="/shop">Shop by</a></li>
                                <li><a href="/best">Best seller</a></li>
                                <li><a href="/sale">Sale zone</a></li>
                                <li><a href="/new">New in</a></li>
                                <li><a href="/bundles">Bundles & Closure</a></li>
                                <li><a href="#">More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Main Section End -->

        @yield('content')

        <!-- Footer Main Section Start -->
        <footer class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1000">
                        <div class="footer-img">
                            <img src="rockrita/images/logo.png" alt="" />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod
                            </p>
                            <ul>
                                <li>
                                    <a href="#"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="bx bxl-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-down" data-aos-duration="1000">
                        <div class="footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><a href="/wig">WIGS</a></li>
                                <li><a href="/glueless">GLUELESS WIG</a></li>
                                <li><a href="/shop">SHOP BY</a></li>
                                <li><a href="/best">BEST SELLER</a></li>
                                <li><a href="/sale">SALE ZONE</a></li>
                                <li><a href="/new">NEW IN</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-down" data-aos-duration="1000">
                        <div class="footer-links">
                            <h4>Other Links</h4>
                            <ul>
                                <li><a href="/bundles">Bundles & Closure</a></li>
                                <li><a href="#">More</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2" data-aos="fade-down" data-aos-duration="1000">
                        <div class="footer-links">
                            <h4>Other Links</h4>
                            <ul>
                                <li><a href="/order">Order Status</a></li>
                                <li><a href="/return">Returns & Exchange</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3" data-aos="fade-left" data-aos-duration="1000">
                        <div class="footer-newsletter">
                            <h3>JOIN OUR NEWSLATTER</h3>
                            <p>AVd do eiusmod tempor incididunt ut labore et dolore</p>
                            <input type="email" name="" id="" placeholder="Your Email Address" />
                            <button type="submit"><i class="bx bxs-send"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-txt">
                            <p>© All Rights Reserved Lorem Ipsum 2023</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-img">
                            <img src="rockrita/images/bankcard-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Main Section End -->
    </main>


    <script src="/rockrita/js/jquery.min.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="text/javascript" src="/rockrita/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/rockrita/js/slick.js"></script>
    <script type="text/javascript" src="/rockrita/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="/rockrita/js/wow.js"></script>
    <script type="text/javascript" src="/rockrita/js/functions.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
