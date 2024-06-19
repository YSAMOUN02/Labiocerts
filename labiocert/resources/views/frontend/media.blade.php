<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oursevice</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5041c59df8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
<body class="threetwo">
 <!-- Navigation -->

 <div class=" main-nav" translate="no">
    <div class="container-width ">
        <nav class="navbar" id="navbar">
            <div class="logo mobile-logo">
                <a href="#"><img id="logo" src="../assets/img/img1.jpg" alt=""></a>
            </div>
            <ul class="nav-detail">
                <li class="menu-item" id="home"><a href="index.html" id="menu" class="menu-link"
                        onclick="navigate(event)">HOME</a></li>
                <li class="menu-item" id="our-service"><a href="ourservice.html" id="menu" class="menu-link"
                        onclick="navigate(event)">OUR SERVICE</a><i class="fa-solid fa-chevron-down"></i>
                    <ul class="submenu">
                        <li class="submenu-tropdown"><a href="service-one.html" class="menu-link"
                                onclick="navigate(event)">Pharmaceutical Testing</a></li>
                        <li class="submenu-tropdown"><a href="service-two.html" class="memu-link"
                                onclick="navigate(event)">Food and Feed Tesing</a></li>
                        <li class="submenu-tropdown"><a href="service-three.html" class="menu-link"
                                onclick="navigate(event)">Water and Wastewate Testing</a></li>
                    </ul>
                </li>
                <li class="menu-item" id="media-center">
                    <a href="media.html" id="menu" class="menu-link" onclick="navigate(event)">MEDIA CENTER</a>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-media">
                        <li class="submenu-tropdown alls allmenu" id="alls">
                            <a href="media.html" class="m-txt">
                                <h3>All</h3>
                            </a>
                            <div class="menu1 rowmenu" id="menu1">
                                <a href="Eventone.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg1.jpg" alt="">New year and double birthday</a>
                                <a href="Eventtwo.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg2.jpg" alt="">Launch Of KEM</a>
                                <a href="Eventthree.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg3.jpg" alt="">KINAL is the symbol of the effective
                                    pain-killer</a>
                                <a href="group-ppm.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg4.jpg" alt="">The Group PPM/Confirel announces the
                                    launch of KEM</a>
                            </div>
                        </li>
                        <li class="submenu-tropdown events allmenu" id="events">
                            <a href="Events.html" class="m-txt">
                                <h3>Events</h3>
                            </a>
                            <div class="rowevent event-img rowmenu menu2" id="menu2">
                                <a href="Eventone.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg1.jpg" alt="">New year and double birthday</a>
                                <a href="Eventtwo.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg2.jpg" alt="">Launch Of KEM</a>
                                <a href="Eventthree.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg3.jpg" alt="">KINAL is the symbol of the effective
                                    pain-killer</a>
                            </div>
                        </li>
                        <li class="submenu-tropdown news allmenu" id="news">
                            <a href="News.html" class="m-txt">
                                <h3>News</h3>
                            </a>
                            <div class="rownews new-mig rowmenu menu3" id="menu3">
                                <a href="group-ppm.html" class="img-menu" style="text-decoration: none;"><img
                                        src="../assets/img/allimg4.jpg" alt="">The Group PPM/Confirel announces the
                                    launch of KEM</a>
                                <a href="group-ppm.html" class="img-menu" style="text-decoration: none;"
                                    submenu><img src="../assets/img/allimg4.jpg" alt="">The Group PPM/Confirel
                                    announces the launch of KEM</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="menu-item" id="location"><a href="location.html" id="menu" class="menu-link"
                        onclick="navigate(event)">LOCATION AND CONTACT</a></li>
                <ul class="menu-language">
                    <li class="menu-lang"><a href="#" id="khmer" lang="km"><img
                                src="../assets/img/KhmerLanguage.jpg" alt="Khmer Language"></a></li>
                    <li class="menu-lang"><a href="#" id="english" lang="en"><img
                                src="../assets/img/English-lang.jpg" alt="English Language"></a></li>
                </ul>
                <div class="search-container">
                    <li class="menu-item search-icon"><i class="fas fa-search"></i></li>
                    <div class="search-box">
                        <input type="text" id="search-input" placeholder="Search...........">
                        <button id="search-button"><a href="#"></a>Search</button>
                        <ul class="search-suggestions" id="search-suggestions"></ul>
                    </div>
                </div>

            </ul>
        </nav>
    </div>
</div>
<div class="re-nav">
    <div class="over-lay" id="myNav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            style="text-decoration: none;">&times;</a>
        <div class="overlayy-content">
            <li><a href="index.html" style="text-decoration: none;">Home</a></li>
            <li class="dropdown-container">
                <div class="fa-cc dropdown-container">
                    <a href="ourservice.html" style="text-decoration: none;">Our Services</a>
                    <i class="fa-solid fa-chevron-right dropdown-icon" onclick="toggleDropdown(this)"></i>
                </div>
                <ul class="na-dropdown">
                    <li><a href="service-one.html">Pharmaceutical Testing</a></li>
                    <li><a href="service-two.html">Food and Feed Testing</a></li>
                    <li><a href="service-three.html">Water and Wastewater Testing</a></li>
                </ul>
            </li>
            <li class="dropdown-container">
                <div class="fa-cc dropdown-container">
                    <a href="media.html" style="text-decoration: none;">Media Center</a>
                    <i class="fa-solid fa-chevron-right dropdown-icon" onclick="toggleDropdown(this)"></i>
                </div>
                <ul class="na-dropdown">
                    <li><a href="Events.html">Events</a></li>
                    <li><a href="News.html">News</a></li>
                </ul>
            </li>
            <li><a href="location.html" style="text-decoration: none;">Location and Contact</a></li>
        </div>
    </div>
    <div class="nav-ham ">
        <div class="nav-respon hamburger ">
            <span class="" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        </div>
        <div class="logo mobile-logo">
            <a href="#" class="m-logo"><img id="logo" src="../assets/img/img1.jpg" alt=""></a>
        </div>
        <div class="s-bar">
            <span class="s-icon" style="font-size:30px;cursor:pointer" onclick="oNav()"><i
                    class="fas fa-search"></i> </span>
        </div>
    </div>
    <div class="s-container o-lay" id="m-Nav">
        <a href="javascript:void(0)" class="close-btn" onclick="cNav()">&times;</a>
        <div class="over-lay-content">
            <div class="s-box">
                <input type="text" id="s-input" placeholder="Search">
                <ul class="s-suggestions" id="s-suggestions"></ul>
            </div>
        </div>
    </div>
</div>
<!-- End of navigation -->


    <!-- Events Section  -->
<section>
        <div class="mediacenter-section ">
            <div class="media-text">
                <div class="media-title">
                    <h1>Events</h1>
                </div>
                <div class="media-image">
                    <div class="media-ff">
                    <a href="Eventone.html"> 
                        <img class="mediaf-own" src="../assets/img/media-f.jpg" alt="">
                        <div class="overlay">New year and double birthday <p>March 4, 2020</p></div>
                    </a> 
                    </div>
                    <div class="media-s">
                    <a href="Eventtwo.html">
                        <img class="medias-own" src="../assets/img/media-s.jpg" alt="">
                        <div class="over">Launch of KEM <p>March 4, 2020</p></div>
                    </a>
                    </div>
                </div>
            </div>
            <div class="all-detail tenzero container-width">
                <div class="alldetail-text">
                    <div class="kinal-detail">
                        <div class="img-knl">
                            <a href="Eventthree.html" class="img-media"> <img src="../assets/img/allimg3.jpg" alt=""></a> 
                        </div>
                        <div class="knl-txt">
                            <a href="Eventthree.html" style="text-decoration: none;"> <h5>KINAL is the symbol of the effective pain-killer</h5></a>  
                            <p>March 4, 2020</p>
                            <p class="knl-tt">Phnom Penh, 18 December 2013: PharmaProduct Manufacutring(PPM) celebrated the 54th Anniverary of KINAL and Awarding Ceremony to students who won the KINAL Research...</p>
                        </div>
                    </div>
                    <div class="g-ppm">
                        <div class="gppm-img">
                          <a href="group-ppm.html" class="img-media"> <img src="../assets/img/allimg4.jpg" alt=""></a> 
                        </div>
                        <div class="gppm-txt">
                            <a href="group-ppm.html"  style="text-decoration: none;"><h5>The Group PPM/Confirel announces the launch of KEM</h5></a>
                            <p>March 1, 2020</p>
                            <p class="knl-tt">The Group PPM/Confirel announces the launch of KEM, a plant complex produced in Kampot that is good for health, containing more than...</p>
                        </div>
                    </div>
                </div>
                <aside>
                    <div class="ads-eventone fixed ads-service">
                        <div class="last-new">
                            <span class="lastnew">LASTEST NEWS</span>
                        </div>
                        <div class="lastnew-detail">
                            <div class="img-khmernew ">
                                <a href="Eventone.html" class="img-lastnew"><img src="../assets/img/allimg1.jpg" alt=""></a>
                                <a href="Eventone.html" class="text-lastnew">New year and double birthday</a>
                            </div>
                            <div class="img-launchnew ">
                                <a href="Eventtwo.html" class="img-lastnew"><img src="../assets/img/allimg2.jpg" alt=""></a>
                                <a href="Eventtwo.html" class="text-lastnew">Launch of KEM</a>
                            </div>
                            <div class="img-kinal">
                                <a href="Eventthree.html" class="img-lastnew"><img src="../assets/img/allimg3.jpg" alt=""></a>
                                <a href="Eventthree.html" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
</section>
    <!-- End of events section-->
        
    <footer class="f-service">
        <div class="grid1x3 social container-width">
            <div class="footer-img">
                <img src="../assets/img/Logo_labocert_footer.JPG" alt="">
                <h3 class="open-hour-title"><span>Opening Hours</span>
                   <hr class="open-line">
                </h3>
                <div class="open-hour-detail">
                    <a class="open-detail"><span>Monday - Friday: <br> 08:00 AM - 05:00 PM</span></a>
                    <hr class="secound-open-line">
                </div>
                <div class="open-hour-detail">
                    <p class="open-detail"><span>Saturday: 08:00 AM - 12:00 PM</span></p>
                </div>
            </div>
            <div class="contactus ">
                
                <div class="contact ">
                    <h3 class="contact-us"><span>Contact us</span><hr class="open-line"></h3>
                    <div class="contact-grid">
                        <div class="contact-icon open-detail">
                            <div class="mobile-icon">
                                <i class="fa-solid  f-icon fa-mobile-screen "></i>
                            </div>
                            <div class="email-icon open-detail ">
                                <i class="fa-regular f-icon fa-envelope"></i>
                            </div>
                            <div class="location-icon open-detail">
                                <i class="fa-solid  f-icon fa-location-dot"></i>
                            </div>
                        </div>
                        <div class="contact-text">
                            <div class="contact-tell  od open-detail">
                                <span class="tell">Tel: (+855) 17 59 42 93 <br>Fax: (+855) 23 89 00 93</span>
                            </div>
                            <div class="email-text od open-detail">
                                <span class="email">info@labiocert.com </span>
                            </div>
                            <div class="location-text od open-detail">
                                <span class="">
                                    # 138 Bis, Street 110, Sangkat Chom Chao,
                                    Khan Por Sen Chey, Phnom Penh, Cambodia
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social-network">
                <img src="../assets/img/Science_art.jpg" alt="">
                <div class="social-title">
                    <h4>Social Networks<hr class="open-line"></h4>
                    <div class="social-icon">
                        <a href="#" class="icon-face"><i class="fab sfab fa-facebook-square" ></i></a>
                        <a href="#" class="icon-in"><i class="fab sfab fa-linkedin"></i></a>
                        <a href="#" class="icon-twit"><i class="fa-brands fab fa-x-twitter"></i></a> 
                        <a href="#" class="icon-you"><i class="fab sfab  fa-square-youtube"></i></a> 
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="copy-right ">
                <h4 class="title-copy-right">
                    Copyright <i class="fa-regular fa-copyright"></i> 2024 LOBOCERT. All rights reserved.
                </h4>
            </div>
        </div>
    </footer>

    <!--End Footer-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/mobile.js"></script>
    </body>
    </html>
        