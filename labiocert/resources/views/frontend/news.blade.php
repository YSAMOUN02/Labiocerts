@extends('frontend.master')
@section('content')
  <!-- Events Section  -->
  <section>
<div class="mediacenter-section  ">
    <div class="media-text">
        <div class="media-title">
            <h1>NEWS</h1>
        </div>
        <div class="media-image">
            <div class="media-ff">
            <a href="/media/newyear"> 
                <img class="mediaf-own" src="{{URL('/assets/image/media-f.jpg')}}" alt="">
                <div class="overlay">New year and double birthday <p>March 4, 2020</p></div>
            </a> 
            </div>
            <div class="media-s">
            <a href="/media/launchofKEM">
                <img class="medias-own" src="{{URL('/assets/image/media-s.jpg')}}" alt="">
                <div class="over">Launch of KEM <p>March 4, 2020</p></div>
            </a>
            </div>
        </div>
    </div>
    <div class="all-detail tenzero container-width">
        <div class="alldetail-text">
            <div class="kinal-detail">
                <div class="img-knl">
                    <a href="/media/kinal" class="img-media"> <img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a> 
                </div>
                <div class="knl-txt">
                    <a href="/media/kinal" style="text-decoration: none;"> <h5>KINAL is the symbol of the effective pain-killer</h5></a>  
                    <p>March 4, 2020</p>
                    <p class="knl-tt">Phnom Penh, 18 December 2013: PharmaProduct Manufacutring(PPM) celebrated the 54th Anniverary of KINAL and Awarding Ceremony to students who won the KINAL Research...</p>
                </div>
            </div>
            <div class="g-ppm">
                <div class="gppm-img">
                  <a href="/media/ppmandconfirel" class="img-media"> <img src="{{URL('/assets/image/allimg4.jpg')}}" alt=""></a> 
                </div>
                <div class="gppm-txt">
                    <a href="/media/ppmandconfirel"  style="text-decoration: none;"><h5>The Group PPM/Confirel announces the launch of KEM</h5></a>
                    <p>March 1, 2020</p>
                    <p class="knl-tt">The Group PPM/Confirel announces the launch of KEM, a plant complex produced in Kampot that is good for health, containing more than...</p>
                </div>
            </div>
        </div>
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
                    <div class="img-kinal ">
                        <a href="/media/kinal" class="img-lastnew"><img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a>
                        <a href="/media/kinal" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                    </div>
            </div>
    </div>
</div>
</section>  </div>

<!-- End of events section-->

@endsection