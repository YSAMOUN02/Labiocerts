@extends('frontend.master')
@section('content')

<!-- Event one section  -->
<section> 
    <div class="eventone-section tenzero container-width">
        <div class="event-one ">
            <div class="newyear-text scrollable">
                <div class="newyear-detial ">
                    <h1>New Year and double birthday</h1>
                    <h5>March 4, 2020</h5>
                    <p>On April 8th, all employees of PPM and Confiel, who were joined by one hundred guests, celebrated both the entry into the Khmer New Year
                        as well as the 20th and 15th anniversaries of the two Group companies. 
    
                    </p>
                    <p>
                        Under the presidency of <span style="font-weight: bold;">HE Sok Chenda Sophea,</span> Minister and Secretary General of the Council for the Development
                        of Cambodia, <span style="font-weight: bold;">Dr. Hay Ly Eang,</span>founder of the Group, said that PPM and Confirel were sister companies, which, since their beginnings, shared a common goal: the development of Cambodia
                        and its economic prosperity, to contribute to improving the welfare and health of its population, and to promote social harmony
                        in Cambodia so that the country never revives the dark days of its past. 
                    </p>
                    <p>
                        After reviewing the main steps taken in the development of both companies, as well as the great achievements that have marked 
                        their path, Dr. Hay underlined their strong development prospects. “By bringing Confirel towards the production of healthy food products such as KEM, which is set to become one of our flagship 
                        products in the coming years, and by developing the production of preventive drugs to consolidate PPM, the two companies are walking in the same direction”, Dr. Hay said.
                    </p>
                    <p><span style="font-weight: bold;">HE Sok Chenda Sophea</span> took the floor to express his pride in the products of PPM and Confirel. A celebratory party then took place, enjoyed by the guests.</p>
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
                            <a href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Flabiocert.com%2F%3Fp%3D850%26%23038%3Blang%3Den" id="share-facebook">
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
                        <a href="/media/launchofKEM">Launch of KEM</a>
                    </div>
                    <div class="next-side">
                        <span class="next-art">Next article</span> 
                        <a href="/service/pharmaceutical/quote">We're here to help you improve your business continually</a>
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
                            <a href="/media/newyear" class="img-lastnew"><img src="{{URL('/assets/image/allimg1.jpg')}}" alt=""></a>
                            <a href="/media/newyear" class="text-lastnew">New year and double birthday</a>
                        </div>
                        <div class="img-launchnew ">
                            <a href="/media/launchofKEM" class="img-lastnew"><img src="{{URL('/assets/image/allimg2.jpg')}}" alt=""></a>
                            <a href="/media/launchofKEM" class="text-lastnew">Launch of KEM</a>
                        </div>
                        <div class="img-kinal">
                            <a href="/media/kinal" class="img-lastnew"><img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a>
                            <a href="/media/kinal" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- End of event one section -->

@endsection 