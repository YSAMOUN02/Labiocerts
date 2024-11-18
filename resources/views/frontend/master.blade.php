<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, XML, JavaScript">
    <meta name="" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Labiocert</title>
    <link rel="stylesheet" href="{{URL('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5041c59df8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link
      rel="shortcut icon"
      href="/assets/image_backend/download (1).png"
      type="image/x-icon"
    />
</head>

<body>
    <!-- Navigation -->
    <header id="nav">
        <div class=" main-nav" translate="no">
            <nav class="navbar" id="navbar">
                <div class="logo mobile-logo">
                    <a href="#"><img id="logo" src="{{URL('/assets/image/img1.jpg')}}" alt=""></a>
                </div>
                <ul class="nav-detail">
                    <li class="menu-item" id="home"><a href="/" id="menu" class="menu-link"
                            onclick="navigate(event)">HOME</a></li>
                    <li class="menu-item" id="our-service"><a href="/service" id="menu" class="menu-link"
                            onclick="navigate(event)">OUR SERVICE</a><i class="fa-solid fa-chevron-down"></i>
                        <ul class="submenu-service">
                            <li class="submenu-tropdown"><a href="/service/pharmaceutical" class="menu-link"
                                    onclick="navigate(event)">Pharmaceutical Testing</a></li>
                            <li class="submenu-tropdown"><a href="/service/foodtesting" class="memu-link"
                                    onclick="navigate(event)">Food and Feed Tesing</a></li>
                            <li class="submenu-tropdown"><a href="/service/watertesting" class="menu-link"
                                    onclick="navigate(event)">Water and Wastewate Testing</a></li>
                        </ul>
                    </li>
                    <li class="menu-item" id="media-center">
                        <a href="/media" id="menu" class="menu-link" onclick="navigate(event)">MEDIA CENTER</a>
                        <i class="fa-solid fa-chevron-down"></i>
                       <div class="container_submedia">
                        <div class="inner_submedia">
                                <ul class="sub-media">
                                    <li onmouseover="hover_menu1()" id="menu_show1">Popular</li>
                                    <li onmouseover="hover_menu2()" id="menu_show2" class="selected">Events </li>
                                    <li onmouseover="hover_menu3()" id="menu_show3">  Lastest</li>
                                </ul>
                            <div class="hide-content">

                                {{-- ALL  --}}
                                <div class="content" id="content1">
                                    @if(!empty($media_popular))
                                    @php
                                    $count = 0;
                                    @endphp
                                    @foreach ($media_popular as $item)
                                
                                            <div class="box box1">
                                                <a href="/media/page={{$item->id}}">
                                                    <div class="img">
                                                        <img src="/assets/uploads/{{$item->image->name}}" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <span>{{ Str::limit($item->title,60) }}</span>
                                                    </div>
                                                </a>
                                        </div>   
                                        @php
                                            $count ++;
                                        @endphp
                                        @endforeach
                                        @if($count > 0 && $count < 4)
                                            @php
                                                $show = 4 - $count;    

                                            @endphp
                                            @for($i = 0;$i < $show ; $i++)
                                                <div class="box box1"> </div>
                                            @endfor
                                        @endif
                                    @endif
                                </div>

                                {{-- EVENT  --}}
                                <div class="content" id="content2">
                                    @if(!empty($media_event))
                                    @php
                                    $count = 0;
                                    @endphp
                                    @foreach ($media_event as $item)
                                
                                            <div class="box box1">
                                                <a href="/media/page={{$item->id}}">
                                                    <div class="img">
                                                        <img src="/assets/uploads/{{$item->image->name}}" alt="">
                                                    </div>
                                                    <div class="text">
                                                        <span>{{ Str::limit($item->title,60) }}</span>
                                                    </div>
                                                </a>
                                        </div>   
                                        @php
                                            $count ++;
                                        @endphp
                                        @endforeach
                                        @if($count > 0 && $count < 4)
                                            @php
                                                $show = 4 - $count;    

                                            @endphp
                                            @for($i = 0;$i < $show ; $i++)
                                                <div class="box box1"> </div>
                                            @endfor
                                        @endif
                                    @endif
                                </div>

                                {{-- LASTEST  --}}
                                <div class="content" id="content3">
                                    @if(!empty($media_last))
                                        @php
                                        $count = 0;
                                        @endphp
                                        @foreach ($media_last as $item)
                                    
                                                <div class="box box1">
                                                    <a href="/media/page={{$item->id}}">
                                                        <div class="img">
                                                            <img src="/assets/uploads/{{$item->image->name}}" alt="">
                                                        </div>
                                                        <div class="text">
                                                            <span>{{ Str::limit($item->title,60) }}</span>
                                                        </div>
                                                    </a>
                                            </div>   
                                            @php
                                                $count ++;
                                            @endphp
                                            @endforeach
                                            @if($count > 0 && $count < 4)
                                                @php
                                                    $show = 4 - $count;    

                                                @endphp
                                                @for($i = 0;$i < $show ; $i++)
                                                    <div class="box box1"> </div>
                                                @endfor
                                            @endif
                                    @endif
                                </div>
                        </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item" id="location"><a href="/location" id="menu" class="menu-link"
                            onclick="navigate(event)">LOCATION AND CONTACT</a></li>
                    <ul class="menu-language">
                        <li class="menu-lang"><a href="#" id="khmer" lang="km"><img
                                    src="{{URL('/assets/image/KhmerLanguage.jpg')}} " alt="Khmer Language"></a></li>
                        <li class="menu-lang"><a href="#" id="english" lang="en"><img
                                    src="{{URL('/assets/image/English-lang.jpg')}}" alt="English Language"></a></li>
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
        <div class="re-nav">
            <div class="over-lay" id="myNav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
                    style="text-decoration: none;">&times;</a>
                <div class="overlayy-content">
                    <li><a href="/" style="text-decoration: none;">Home</a></li>
                    <li class="dropdown-container">
                        <div class="fa-cc dropdown-container">
                            <a href="/service" style="text-decoration: none;">Our Services</a>
                            <i class="fa-solid fa-chevron-right dropdown-icon" onclick="toggleDropdown(this)"></i>
                        </div>
                        <ul class="na-dropdown">
                            <li><a href="/service/pharmaceutical">Pharmaceutical Testing</a></li>
                            <li><a href="/service/foodtesting">Food and Feed Testing</a></li>
                            <li><a href="/service/watertesting">Water and Wastewater Testing</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-container">
                        <div class="fa-cc dropdown-container">
                            <a href="/media" style="text-decoration: none;">Media Center</a>
                            <i class="fa-solid fa-chevron-right dropdown-icon" onclick="toggleDropdown(this)"></i>
                        </div>
                        <ul class="na-dropdown">
                            <li><a href="/media/events">Events</a></li>
                            <li><a href="/media/news">News</a></li>
                        </ul>
                    </li>
                    <li><a href="/location" style="text-decoration: none;">Location and Contact</a></li>
                </div>
            </div>
            <div class="nav-ham ">
                <div class="nav-respon hamburger ">
                    <span class="" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>
                </div>
                <div class="logo mobile-logo">
                    <a href="/" class="m-logo"><img id="logo" src="{{URL('/assets/image/img1.jpg')}}" alt=""></a>
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
    </header>
    <!-- End of navigation -->
        @yield('content')
    <!--Footer-->
    <footer>
        <div class="grid1x3 social container-width">
            <div class="footer-img">
                <img src="{{URL('/assets/image/Logo_labocert_footer.JPG')}}" alt="">
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
                    <h3 class="contact-us"><span>Contact us</span>
                        <hr class="open-line">
                    </h3>
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
                <img src="{{URL('/assets/image/Science_art.jpg')}}" alt="">
                <div class="social-title">
                    <h4>Social Networks
                        <hr class="open-line">
                    </h4>
                    <div class="social-icon">
                        <a href="#" class="icon-face"><i class="fab sfab fa-facebook-square"></i></a>
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
                    Copyright <i class="fa-regular fa-copyright"></i> 2024 LOBIOCERT. All rights reserved.
                </h4>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{URL('/assets/js/script.js')}}"></script>
    <script src="{{URL('/assets/js/mobile.js')}}"></script>


    
    <script>
function hover_menu1() {
    document.querySelector('#content1').style.display = "flex";
    document.querySelector('#content2').style.display = "none";
    document.querySelector('#content3').style.display = "none";
    document.querySelector('#menu_show1').classList.add("selected");
    document.querySelector('#menu_show2').classList.remove("selected");
    document.querySelector('#menu_show3').classList.remove("selected");
}

function hover_menu2() {
    document.querySelector('#content1').style.display = "none";
    document.querySelector('#content2').style.display = "flex";
    document.querySelector('#content3').style.display = "none";
    document.querySelector('#menu_show2').classList.add("selected");
    document.querySelector('#menu_show1').classList.remove("selected");
    document.querySelector('#menu_show3').classList.remove("selected");
}

function hover_menu3() {
    document.querySelector('#content1').style.display = "none";
    document.querySelector('#content2').style.display = "none";
    document.querySelector('#content3').style.display = "flex";
    document.querySelector('#menu_show3').classList.add("selected");
    document.querySelector('#menu_show1').classList.remove("selected");
    document.querySelector('#menu_show2').classList.remove("selected");
}

        // Example of swiper initialization
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                type: 'progressbar',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
        // Client 
        var swiper = new Swiper('.swiper', {
            slidesPerView: 4,
            direction: getDirection(),
            loop: true,
            speed: 800,
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
            },
        });
        function getDirection() {
            var windowWidth = window.innerWidth;
            return windowWidth <= 300 ? 'vertical' : 'horizontal';
        }
        document.querySelector('.button-next').addEventListener('click', function () {
            swiper.slideNext();
        });
        document.querySelector('.button-prev').addEventListener('click', function () {
            swiper.slidePrev();
        });

    </script>
</body>

</html>