@extends('frontend.master')
@section('content')

<!-- Event three Section-->
<section> 
    <div class="eventthree-section tenzero container-width">
        <div class="event-three ">
            <div class="Kinal-text scrollable">
                <div class="kinal-detial ">
                    <h1>KINAL is the symbol of the effective pain-killer</h1>
                    <h5>March 4, 2020</h5>
                    <p> 
                        Phnom Penh, 18 December 2013: <a style="color: rgba(77, 178, 236, 0.99);" href="#">PharmaProduct Manufacturing (PPM) </a>
                        celebrated the 54th Anniversary of KINAL and Awarding Ceremony to students 
                        who won the KINAL Research Competition.This event was presided over by
                        <span style="font-weight: bold;">Permanent Deputy Prime Minister H.E Keat Chhon</span> and Secretary of 
                        <span style="font-weight: bold;">Ministry of Health H.E Te Kuyseang,</span>
                        and was participated by pharmaceutical professionals, doctors, pharmacists, national and international guests.
                        <span style="font-weight: bold;">Dr. Hay Ly Eang, Founder and CEO of PPM,</span>
                        stated that this event is the sign of success of KINAL, the Cambodia’s first analgesic medicine serving health of people for more 
                        than 50 years and the most famous brand with a presence in more than 20 countries around the world.
                    </p>
                    <p>
                        Dr. Hay continued that PPM is ready for the 10-country market when the ASEAN economic integration community will be materialized in 2015.H.E Keat Chhon praised the efforts and achievement of PPM 
                        can bring Cambodia’s products to international market. Moreover, PPM provides employment to Cambodian people, contributing to economic development of the nation. 
                        He also admired PPM for its initiative to launch KINAL Prize, a research competition program aiming at motivating young students to research on various topics related to health.
                    </p>
                    <p>
                        Three groups of students from <a href="#" style="color: rgba(77, 178, 236, 0.99);">University of Pharmacy</a>  were granted prize after winning the competitin, 
                        amounting USD  1,500 in total. Be noted that KINAL was founded by Pharmacist Doctor KOK Sokkim 
                        on 18  December 1960. For more than half a century, KINAL is the symbol of the effective pain-killer.
                    </p>

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
                        <a href="/media/ppmandconfirel">The Group PPM/Confirel announces the launch of KEM</a>
                    </div>
                    <div class="next-side">
                        <span class="next-art">Next article</span> 
                        <a href="/media/launchofKEM">Launch of KEM</a>
                    </div>
                </div>
            </div>
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
<!-- End of event three section -->
      

@endsection
