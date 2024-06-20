@extends('frontend.master')
@section('content')


    <!-- Group PPM Section -->
    <section>

<div class="group-section tenzero container-width">
    <div class="ppm-section scrollable">
        <div class="ppm-text">
            <h1>The Group PPM/Confirel announces the launch of KEM</h1>
            <p>The Group PPM/Confirel announces the launch if KEM, a plant complex produced 
                in Kampot that is good for health, containing more than 50 natural and living probiotics.
            </p>
            <p>After seven years of research, the Group PPM/Confirel is broadening its range of health and wellbeing products with KEM,
                 a vegetable complex whose base is the juice from the fruit of the Morinda Citrifolia, containing more than 50 natural
                 and living probiotics.
            </p>
            <p>The Norinda Citrifolia is a shrub that has been used for 
                centuries in traditional Indian pharmacopeia. The fruit's 
                juice is known to improve the body's natural defenses, it's 
                general tone and vitality, as well as sleeping patterns and general moods.It also
                helps to fight cellular aging pain and inflammation. 
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
        <div class="ads-group fixed ads-service">
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
<!-- End of Group PPM Section -->
  
@endsection