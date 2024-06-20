@extends('frontend.master')
@section('content')
    <!-- Service three -->
    <section> 
        <div class="service-three tenzero container-width ">
            <div class="gridservice-three">
                <div class="water tenzero-four  scrollable">
                    <div class="water-title">
                        <h1>Water and Wasterwater Testing</h1>
                    </div>
                    <div class="water-detial">
                        <img src="{{URL('/assets/image/img-water.jpg')}}" alt="">
                    </div>
                    <div class="waterdetail-text w-txt">
                        <p>Is your water potable?</p>
                        <p>Is your wasterwater is good enough for environment?</p>    
                    </div>
                    <div class="water-physico">
                        <div class="waterphysico-img">
                            <img src="{{URL('/assets/image/service-three01.jpg')}}" alt="">
                        </div>    
                        <div class="waterphysico-text w-txt">
                            <p>We can help you check this at Labiocert laboratory</p>
                            <h5>Coverage of testing service:</h5>
                            <li>Physico-chemical testing</li>
                            <li>Microbiological testing</li>
                        </div>
                    </div>
                    <div class="waterphysico-detail w-txt">
                        <p>
                            Labiocert provide a one-stop service for testing a wide range of products, from raw materials to finished products. With our existing laboratory located in Chom Chao, Phnom Penh and internationally recognized partner laboratorie
                            s, we are pleased to support you in quality analysis and related consultancy
                        </p>    
                    </div>
                    <div class="serive-onebtn">
                        <a href="/service/pharmaceutical/quote" class="btn1 btn-color btn-size btn-sizes">
                            <span class="serviceone-btn">GET A QUOTE</span>
                        </a>  
                        <a href="/services/watertesting/analysisfees" class="btn1 btn-color btn-size btn-sizes">
                            <span class="parameter-btn">Test Parameters</span>
                        </a>      
                    </div>  
                    <div class="button-container">
                        <div class="share-dropdown">
                            <button class="share-button"><i class="fa-solid share-link fa-share-nodes fa-sm"
                                    style="color: #0e0c0c;"></i>Share</button>
                            <div class="dropdown-content">
                                <a href="#" id="share-copy">Copy link</a>
                            </div>
                        </div>
                        <div class="face-btn"> 
                            <button class="facebook-button">
                                <a href="#" id="share-facebook">
                                    <i class="fa-brands share-face fa-facebook-f"style="color: #ffffff;"></i>
                                    Facebook
                                </a>
                            </button>
                        </div>
                        <div class="print-btn">
                            <button class="print-button" onclick="window.print()">
                                <i class="fa-solid share-print fa-print"style="color: #ffffff;"></i>
                                Print 
                            </button>
                        </div>
                        
                    </div>
                    <div class="block-row">
                        <div class="previous-side">
                            <span class="pre-art">Previous article</span> <br>
                            <a href="/service/pharmaceutical/quote">we're here to help you improve your business continually</a>
                        </div>
                        <div class="next-side">
                            <span class="next-art">Next article</span> 
                            <a href="/service/foodtesting">Food and Feed Testing</a>
                        </div>
                    </div>
                </div>
                <aside>
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
                </aside>
                
        </div>
        </div>
</section>
    <!-- End of Service three -->

@endsection