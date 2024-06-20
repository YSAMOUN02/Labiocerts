@extends('frontend.master')
@section ('content')
<!-- Welcome section -->
<section>
    <div class="welcomepage tenzero container-width">
        <div class="grid-welcome">
            <div class="welcome-title tenzero-four wel-txtt scrollable">
                <h1>Welcome to Labiocert</h1>
                <p>
                    Labiocert provide a one-stop service for testing a wide range of products, from raw materials to finished products. With our existing laboratory located in Chom Chao, Phnom Penh
                    and internationally recognized partner laboratories, we are pleased to support you in quality analysis and related consultancy.
                </p>
                <div class="welcomepage-img wel-img">
                    <img src="{{URL('/assets/image/welcome-img.jpg')}}" alt="">
                </div>
                <div class="team-text wel-txtt">
                    <p>
                        Our team of experienced scientists will work hand-in-hand with you to meet your analytical needs in our state of the art facility. All work is performed under strict
                        confidentiality following the requirements of good laboratory practices.
                    </p>
                </div>
                <div class="coverage-service">
                    <div class="coverageservice-img wel-img">
                        <img src="{{URL('/assets/image/welservice.jpg')}}" alt="">
                    </div>
                    <div class="coverageservice-textdetail">
                        <h5>Coverage of testing service</h5>
                        <ul class="coverageservice-textdetail co-li">
                            <li>Physico-chemical testing</li>
                            <li>Microbiological testing</li>
                            <li>Sensory testing</li>
                            <li>Packaging Testing</li>
                            <li>Hygiene and environment monitoring</li>
                            <li>Stability Programs</li>
                            <li>Method Development & Validation</li>
                        </ul>
                    </div>
                </div>
                <div class="relecvant">
                    <div class="relevant-img wel-img">
                        <img src="{{URL('/assets/image/relevant.jpg')}}" alt="">
                    </div>
                    <div class="relevan-text">
                        <h5>Relevant Products</h5>
                        <ul class="ulrelevant co-li">
                            <li>Pharmaceuticals</li>
                            <li>Foods and feeds</li>
                            <li>Water and wastewater</li>
                        </ul>
                    </div>
                </div>
                <div class="button-container">
                    <div class="share-dropdown">
                        <button class="share-button"><i class="fa-solid share-link fa-share-nodes fa-sm" style="color: #0e0c0c;"></i>Share</button>
                        <div class="dropdown-content">
                            <a href="#" id="share-copy">Copy link</a>
                        </div>
                    </div>
                    <div class="face-btn">
                        <button class="facebook-button">
                            <a href="#" id="share-facebook">
                                <i class="fa-brands share-face fa-facebook-f" style="color: #ffffff;"></i>
                                Facebook
                            </a>
                        </button>
                    </div>
                    <div class="print-btn">
                        <button class="print-button" onclick="window.print()">
                            <i class="fa-solid share-print fa-print" style="color: #ffffff;"></i>
                            Print
                        </button>
                    </div>

                </div>
                <div class="block-row">
                    <div class="previous-side">
                        <span class="pre-art">Previous article</span> <br>
                        <a href="/service/foodtesting">Food and Feed Testing</a>
                    </div>
                    <div class="next-side">
                        <span class="next-art">Next article</span>
                        <a href="/service/pharmaceutical">Pharmaceutical Testing</a>
                    </div>
                </div>
            </div>
            <aside>

            </aside>
            <div class="adversting fixed ads-service">
                <div class="last-new">
                    <span class="lastnew">LASTEST NEWS</span>
                </div>
                <div class="lastnew-detail">
                    <div class="img-khmernew ">
                        <a href="/media/newyear" class="img-lastnew"><img src="{{URL('/assets/image/allimg1.jpg')}}" alt=""></a>
                        <a href="/media/newyear" class="text-lastnew">New year and double birthday</a>
                    </div>
                    <div class="img-launchnew ">
                        <a href="/media/launchofKEM" class="img-lastnew"><img src="{{URL('/assets/image/allimg2.jpg')}}" alt=""></a>
                        <a href="/media/launchofKEM" class="text-lastnew">Launch of KEM</a>
                    </div>
                    <div class="img-kinal ">
                        <a href="/media/kinal" class="img-lastnew"><img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a>
                        <a href="/media/kinal" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Welcome section -->
@endsection