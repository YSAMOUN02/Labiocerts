@extends('frontend.master')
@section('content')

<body>
    
    <!-- Slider Section-->
    <swiper-container class="mySwiper" pagination="true" pagination-type="progressbar" navigation="true" autoplay="true"
        autoplay-delay="3000">
        <swiper-slide><img src="{{URL('/assets/image/slide1.jpg')}}" alt=""></swiper-slide>
        <swiper-slide><img src="{{URL('/assets/image/Silde2.jpg')}}" alt=""></swiper-slide>
        <swiper-slide><img src="{{URL('/assets/image/Silde3.jpg')}}" alt=""></swiper-slide>
        <swiper-slide><img src="{{URL('/assets/image/Silde4.jpg')}}" alt=""></swiper-slide>

    </swiper-container>
    <!-- End of Slider Section -->

    <!-- Welcome section -->
    <section class="welcome-section grid1x2 container-width ">
        <div class="welcome-img">
            <img src="{{URL('/assets/image/welcome-img.jpg')}}" alt="">
        </div>
        <div class="welcome-title-section">
            <h1 class="welcome-title">WELCOME TO LABIOCERT</h1>
            <p class="welcome-title">
                Labiocert provide a one-stop service for testing a wide range of products, from raw materials to
                finished products.
                With our existing laboratory located in Chomchao, Phnom Penh and internationally recognized partner
                laboratories,
                we are pleased to support you in quality analysis and related consultancy.
                Our team of experienced scientists will work hand-in-hand with you to meet your analytical needs in
                our state of the art facility.
                All work is performed under strict confidentiality following the requirements of good laboratory
                practices...
            </p>
            <div class="readmore-btn mwel-btn">
                <a href="/welcomelabiocert" class="btn1 btn-color btn-size btn-sizes">
                    <button class="read-btn style-bt">Read more <i class="fa-solid fa-angles-right"></i></button>
                </a>
            </div>
        </div>
    </section>
    <!-- End of welcome section -->

    <!-- Service Section -->
    <section class="service-section container-width">
        <div class="service-title-section">
            <h1 class="service-title">OUR OVERALL SERVICES</h1>
        </div>
        <div class="grid1x3 service-section-detil">
            <div class="pharma-test">
                <i class="fa-solid fa-flask-vial"></i>

                <div class="pharma-title-service">
                    <h3 class="pharmat-title">Pharmaceutical testing</h3>
                </div>
                <p class="pharma-title-detail">
                    Would you need test results to prove your product conformance with defined specifications?
                    Would you need to check whether your materials...
                </p>
                <div class="readmore-btn">
                    <a href="/service/pharmaceutical" class="btn1 btn-color btn-size btn-sizes">
                        <button class="read-btn style-bt btn-pharma btn-service">Read more <i
                                class="fa-solid fa-angles-right"></i></button>
                    </a>
                </div>
            </div>
            <div class="food-test">
                <i class="fa-solid fa-mortar-pestle"></i>
                <div class="food-title-service">
                    <h3 class="food-titl text">Food and Feed Testing</h3>
                </div>
                <p class="food-title-detail">
                    Laboratory testing is an important process, which relies on scientific analysis
                    to gauge one or more characteristics of a product...
                </p>
                <div class="readmore-btn">
                    <a href="/service/foodtesting" class="btn1 btn-color btn-size btn-sizes">
                        <button class="read-btn style-bt btn-food btn-service">Read more <i
                                class="fa-solid fa-angles-right"></i></button>
                    </a>
                </div>
            </div>
            <div class="water-test">
                <i class="fas fa-tint water-icon"></i>
                <div class="water-title-service">
                    <h3 class="water-title">Water and Wastewater Testing</h3>
                </div>
                <p class="water-test">
                    Is your water potable? Is your wastewater is good enough for the environment?
                    We can help you check this at Labiocert laboratory...
                </p>
                <div class="readmore-btn water-btn">
                    <a href="/service/watertesting" class="btn1 btn-color btn-size btn-sizes">
                        <button class="read-btn style-bt btn-water btn-service">Read more <i
                                class="fa-solid fa-angles-right"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of service section -->

    <!-- Client section -->
    <div class="client-section container-width">
        <div class="client-title-section">
            <h3 class="client-title">OUR CLIENTS</h3>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper m-client">
                <div class="swiper-slide"><a href=""><img src="{{URL('/assets/image/Logo_BTB_Rice.jpg')}}" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="{{URL('/assets/image/Logo_kinal.jpg')}}" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="{{URL('/assets/image/Logo_PPM.jpg')}}" alt=""></a></div>
                <div class="swiper-slide"><a href="https://www.confirel.com/en"><img
                            src="{{URL('/assets/image/Logo_confirel.jpg')}}" alt=""></a></div>
                <div class="swiper-slide"><a href=""><img src="{{URL('/assets/image/Logo_techneola.jpg')}}" alt=""></a></div>
            </div>
            <div class="swiper-button">
                <div class="nextt-btn">
                    <button class="button-next"><i class="fa-solid fa-chevron-left"></i></button>
                </div>
                <div class="prevv-btn">
                    <button class="button-prev"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- End of Client Section-->
    <div class="quote ">
        <div class="container-width footer quote-grid">
            <div class=" quote-section quote-grid">
                <i class="fa-solid fa-pen-to-square"></i>
                <div class="text-title">
                    <h2 class="text-title-detail">We're here to help you improve your business continually.</h2>
                    <p class="text-detail">
                        In search of excellence and competitive advantage, there is a need to continually improve the
                        business...
                    </p>
                </div>
                <div class="readmore-btn mquote-btn">
                    <a href="/service/pharmaceutical/quote" class="btn1 btn-color btn-size btn-sizes">
                        <span class="btn-quote">GET A QUOTE</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/mobile.js"></script>
    <script>
        
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
@endsection