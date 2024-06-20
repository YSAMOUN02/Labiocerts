@extends('frontend.master')
@section('content')
<!-- Service two-->
<section>
        <div class="two-service tenzero container-width">
            <div class="gridservice-two">
                <div class="food-section tenzero-four scrollable">
                    <div class="food-title">
                        <h1>Food and Feed Testing</h1>
                    </div>
                    <div class="foot-detial">
                        <div class="food-image">
                            <img src="{{URL('/assets/image/service-two02.jpg')}}" alt="">
                        
                        </div>
                        <div class="labortory-text food-txtt">
                            <p>Laboratory testing is an important peress, which resuls on scien alalusis to gauge
                                one or more characteristics of a product and the comparison of these with specified requiremens
                                to detemmine is conformanly; 
                            </p>    
                        </div>
                        <div class="coverage">
                            <div class="coverage-image">
                                <img src="{{URL('/assets/image/service-two01.jpg')}}" alt="">
                            </div>
                            <div class="coverage-text">
                                <h5>Coverage of testing service</h5>
                                <li>Physico-chemical testing</li>
                                <li>Organoleptic evaluation</li>
                                <li>Hygiene and environmental monitoring</li>  
                            </div>
                        </div>
                        <div class="physico-detail food-txtt">
                            <p>Labiocert provide a one-stop service for testing a wide range of products, from raw materials to finished products.
                                With our existing laboratory located in Chom Chao, Phnom Penh and internationally 
                               recognized partner laboratories, we are pleased to support you in quality analysis and related consultancy.
                           </p>     
                        </div>
                        <div class="serive-onebtn"> 
                            <div class="get-btnquote">
                                <a href="/service/pharmaceutical/quote" class="btn1 btn-color btn-size btn-sizes">
                                    <span class="serviceone-btn">GET A QUOTE</span>
                                </a>      
                            </div>
                            <div class="paremeter-bt">
                                <a href="/service/foodtesting/analysisfeesforfood" class="btn1 btn-color btn-size btn-sizes">
                                    <span class="parameter-btn">Microbiological parameters</span>
                                </a>          
                            </div>
                            <div class="physico-btn">
                                <a href="/service/foodtesting/physicoanalysis" class="btn1 btn-color btn-size btn-sizes">
                                    <span class="parameter-btn">Physico-Chemical parameters</span>
                                </a>          
                            </div>
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
                                <a href="/service/watertesting">Water and Wastewater Testing</a>
                            </div>
                            <div class="next-side">
                                <span class="next-art">Next article</span> 
                                <a href="/welcomelabiocert">Welcome to Labiocert</a>
                            </div>
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
    <!-- End of Service two -->
@endsection