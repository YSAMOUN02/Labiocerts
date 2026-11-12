<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="LABIOCERT - The Confidence Solution. Laboratory testing services in Phnom Penh, Cambodia: food, water and pharmaceutical analysis.">
    <meta name="keywords" content="Labiocert, laboratory, Cambodia, Phnom Penh, food testing, water testing, pharmaceutical analysis">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="Labiocert - The Confidence Solution">
    <meta property="og:description" content="Laboratory testing services in Phnom Penh, Cambodia: food, water and pharmaceutical analysis.">
    <meta property="og:image" content="{{ URL('/assets/image/img1.png') }}">
    <title>Labiocert - The Confidence Solution</title>
    <link rel="stylesheet" href="{{ URL('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5041c59df8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ URL('assets/css/responsive-fix.css') }}?v=1">
    <link rel="shortcut icon" href="/assets/image_backend/download (1).png" type="image/x-icon" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @yield('header')


</head>

<body>
    <!-- Navigation -->

    <header id="nav">
        <div class=" main-nav " translate="no">
            <nav class="navbar" id="navbar">
                <div class="logo mobile-logo">
                    <div id="google_translate_element" class="d-none"></div>
                    <a href="/"><img id="logo" src="{{ URL('/assets/image/img1.png') }}" alt="Labiocert"></a>
                </div>
                <ul class="nav-detail">
                    <li class="menu-item" id="home"><a href="/" id="menu" class="menu-link"
                            onclick="navigate(event)">HOME</a></li>
                    <li class="menu-item" id="our-service"><a href="/service" id="menu" class="menu-link"
                            onclick="navigate(event)">OUR SERVICE</a><i class="fa-solid fa-chevron-down"></i>
                        <ul class="submenu-service">
                            @if(!empty($service))
                            @foreach ($service  as $item)

                                <li class="submenu-tropdown"><a href="/service/{{$item->id}}" class="menu-link"
                                    onclick="navigate(event)">{{$item->title}}</a></li>
                            @endforeach

                            @endif

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
                                    <li onmouseover="hover_menu3()" id="menu_show3"> Lastest</li>
                                </ul>
                                <div class="hide-content">

                                    {{-- ALL  --}}
                                    <div class="content" id="content1">
                                        @if (!empty($media_popular))
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($media_popular as $item)
                                                <div class="box box1">
                                                    <a href="/media/page={{ $item->id }}">
                                                        <div class="img">
                                                            @php
                                                                $thumbnail = $item->image->name ?? '';
                                                            @endphp

                                                            <img src="/assets/uploads/{{ $thumbnail }}"
                                                                alt="">
                                                        </div>
                                                        <div class="text">
                                                            <span>{{ Str::limit($item->title, 60) }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach
                                            @if ($count > 0 && $count < 4)
                                                @php
                                                    $show = 4 - $count;

                                                @endphp
                                                @for ($i = 0; $i < $show; $i++)
                                                    <div class="box box1"> </div>
                                                @endfor
                                            @endif
                                        @endif
                                    </div>

                                    {{-- EVENT  --}}
                                    <div class="content" id="content2">
                                        @if (!empty($media_event))
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($media_event as $item)
                                                <div class="box box1">
                                                    <a href="/media/page={{ $item->id }}">
                                                        <div class="img">
                                                            @php
                                                                $thumbnail = $item->image->name ?? '';
                                                            @endphp

                                                            <img src="/assets/uploads/{{ $thumbnail }}"
                                                                alt="">
                                                        </div>
                                                        <div class="text">
                                                            <span>{{ Str::limit($item->title, 60) }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach
                                            @if ($count > 0 && $count < 4)
                                                @php
                                                    $show = 4 - $count;

                                                @endphp
                                                @for ($i = 0; $i < $show; $i++)
                                                    <div class="box box1"> </div>
                                                @endfor
                                            @endif
                                        @endif
                                    </div>

                                    {{-- LASTEST  --}}
                                    <div class="content" id="content3">
                                        @if (!empty($media_last))
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($media_last as $item)
                                                <div class="box box1">
                                                    <a href="/media/page={{ $item->id }}">
                                                        <div class="img">
                                                            @php

                                                                $thumbnail = $item->image->name ?? '';

                                                            @endphp

                                                            <img src="/assets/uploads/{{ $thumbnail }}"
                                                                alt="">
                                                        </div>
                                                        <div class="text">
                                                            <span>{{ Str::limit($item->title, 60) }}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach
                                            @if ($count > 0 && $count < 4)
                                                @php
                                                    $show = 4 - $count;

                                                @endphp
                                                @for ($i = 0; $i < $show; $i++)
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

                    <li class="menu-item" id="location"><a href="/video" id="menu" class="menu-link">Profile Video</a></li>
                    <ul class="menu-language">

                        <li class="menu-lang" >

                            <img  class="km_lang" onclick="change_language('km')"
                                    src="{{ URL('/assets/image/KhmerLanguage.jpg') }} " alt="Khmer Language">

                                    <img class="en_lang" onclick="change_language('en')"
                                    src="{{ URL('/assets/image/English-lang.jpg') }}" alt="English Language">
                        </li>

                    </ul>
                    {{-- <div class="search-container">
                        <li class="menu-item search-icon"><i class="fas fa-search"></i></li>
                        <div class="search-box">
                            <input type="text" id="search-input" placeholder="Search...........">
                            <button id="search-button"><a href="#"></a>Search</button>
                            <ul class="search-suggestions" id="search-suggestions"></ul>
                        </div>
                    </div> --}}

                </ul>
            </nav>
        </div>
        <div class="re-nav">
            <div class="over-lay" id="myNav">
                <a href="javascript:void(0)" class="closebtn"
                  >&times;</a>
                <div class="overlayy-content">
                    <li><a href="/" style="text-decoration: none;">Home</a></li>
                    <li class="dropdown-container">
                        <div class="fa-cc dropdown-container">
                            <a href="/service" style="text-decoration: none;">Our Services</a>
                            <i class="fa-solid fa-chevron-right dropdown-icon" onclick="toggleDropdown(this)"></i>
                        </div>
                        <ul class="na-dropdown">
                            @if(!empty($service))
                                @foreach ($service  as $item)
                                    <li><a href="/service/{{$item->id}}">{{$item->title}}</a></li>
                                @endforeach

                            @endif
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

                    <li><a href="/video" style="text-decoration: none;">Profile Video</a></li>
                </div>
            </div>
            <div class="nav-ham ">
                <div class="nav-respon hamburger ">
                    <span class="" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776; </span>
                </div>
                <div class="logo mobile-logo">
                    <a href="/" class="m-logo"><img id="logo" src="{{ URL('/assets/image/img1.png') }}"
                            alt="Labiocert"></a>
                </div>
                <div class="s-bar">
                    <img  class="km_lang" onclick="change_language('km')"
                    src="{{ URL('/assets/image/KhmerLanguage.jpg') }} " alt="Khmer Language">

                    <img class="en_lang" onclick="change_language('en')"
                    src="{{ URL('/assets/image/English-lang.jpg') }}" alt="English Language">
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
                <img src="{{ URL('/assets/image/Logo_labocert_footer.JPG') }}" alt="">
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
                                <span class="tell">Tel: <a href="tel:+85517594243" style="color:inherit;text-decoration:none;">017 594 243</a> / <a href="tel:+85593594243" style="color:inherit;text-decoration:none;">093 594 243</a>
                                <br>Fax: (+855) 23 89 00 93</span>
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
                <img src="{{ URL('/assets/image/Science_art.jpg') }}" alt="">
                <div class="social-title">
                    <h4>Social Networks
                        <hr class="open-line">
                    </h4>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/share/1FQji8RHDQ/" target="_blank" class="icon-face"><i class="fab sfab fa-facebook-square"></i></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="copy">
            <div class="copy-right ">
                <h4 class="title-copy-right">
                    @php
                          $year = date('Y');
                    @endphp
                    Copyright <i class="fa-regular fa-copyright"></i> {{$year}} Labiocert . All rights reserved.
                </h4>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ URL('/assets/js/script.js') }}"></script>
    <script src="{{ URL('/assets/js/mobile.js') }}"></script>



    <script>
        document.addEventListener('scroll', function() {


        var scroll = window.scrollY;
        var navbar = document.querySelector('#navbar');
        var mainNav = document.querySelector('.main-nav');

        if (scroll > 0) {
            navbar.classList.add('scroll');
            mainNav.style.height = '80px'; // Adjust the height as needed
            mainNav.querySelector('img').style.height = '33px'; // Adjust the height as needed
        } else {
            navbar.classList.remove('scroll');
            mainNav.style.height = '100px'; // Original height
                mainNav.querySelector('img').style.height = '66px';
        }
    });

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
                resize: function() {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            return windowWidth <= 300 ? 'vertical' : 'horizontal';
        }

            function change_language(lang) {
        // Change the lang attribute of the <html> tag
        document.documentElement.lang = lang;

        // Change the language in the Google Translate dropdown (if applicable)
        let selectField = document.querySelector(".goog-te-combo");
        if (selectField) {
            selectField.value = lang;
            selectField.dispatchEvent(new Event('change')); // Simulate a change event
        }
        localStorage.setItem('language', lang);
        // Optionally, call checkLanguage to handle UI changes (like showing/hiding flags)
        checkLanguage();
    }
    setTimeout(function () {
        let iframe = document.querySelector('.goog-te-banner-frame');
        if (iframe) iframe.style.display = 'none';

        let body = document.querySelector('body');
        if (body) body.style.top = '0px';
        }, 500);
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'km,en', autoDisplay: false}, 'google_translate_element');
  }




    function checkLanguage() {
        // Get the current language from Google Translate or your page setup
        let currentLanguage = localStorage.getItem('language') || 'en';

        console.log(currentLanguage);
        // Check if the language is Khmer (km) or English (en)
        if (currentLanguage == 'en') {
            document.querySelector('.km_lang').style.display = 'block';
            document.querySelector('.en_lang').style.display = 'none';
        }else{
            document.querySelector('.en_lang').style.display = 'block';
            document.querySelector('.km_lang').style.display = 'none';

        }
    }
    window.onload = checkLanguage;
    </script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
