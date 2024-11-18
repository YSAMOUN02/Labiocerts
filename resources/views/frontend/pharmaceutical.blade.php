@extends('frontend.master')
@section('content')
 <!-- Service one -->
 <section>

<div class="one-service tenzero container-width">
    <div class="grid-serviceone">
        <div class="pharma-title tenzero-four scrollable p-txt">
            <h1>Pharmaceutical Testing</h1>
            <p>Would you need test results to prove your product conformance with defined specifications?
                Would you need to check whether your materials are good enough for production or distribution?
            </p>
            <div class="service-one00">
                <img src="{{('/assets/image/service-one00.jpg')}}" alt="">
            </div>
            <p>
                Our laboratory can support you in identifying key parameter for a decision in regards of z
                product quility and according to Phamacopeia.
            </p>

            <div class="physico">
                <div class="coveragetest-image">
                    <img src="{{('/assets/image/service-one01.jpg')}}" alt="">
                </div>
                <ul class="coveragetest-text">
                    <div class="coreverage-textdetail">
                        <h5>Coverage of testing service:</h5>
                    </div>
                    <li>Physico-chemical testing</li>
                    <li>Microbiological testing</li>
                    <li>Organoleptic evaluation</li>
                    <li>Packaging Testing</li>
                    <li>Stability Programs</li>
                    <li>Method Development & Validation</li>
                </ul>
            </div>
            <div class="consult-text p-txt">
                <p>Please consult with out team to determine what you need to analyze for the microbiological quality of
                    your
                    product which may be one of the followings.
                </p>    
            </div>
            <div class="physico">
                <div class="microbiological-img">
                    <img src="{{('/assets/image/service-one02.jpg')}}" alt="">
                </div>
                <ul class="microbiological-text">
                    <li>Non-aqueous preparations for oral use</li>
                    <li>Aqueous preparation for oral use </li>
                    <li>Rectal use</li>
                    <li>Oromucosal use, Gingival use, Cutaneous use, Nasal use, Auricular use</li>
                    <li>Vaginal use</li>
                    <li>Transdermal patches (limits for one patch including adhesive layer and backing)</li>
                    <li>Inhalation use(special requirements apply to liquid preparation for nebulization)</li>
                </ul>
            </div>
            <div class="physico">
                <div class="physico-img">
                    <img src="{{('/assets/image/service-one03.jpg')}}" alt="">
                </div>
                <div class="physico-text p-txt">
                    <p>We also offer physico-chemical testing service for the pharmaceutical products as follows:</p>
                <ul class="microbiological-text">
                    <li>Capsule and tablet</li>
                    <li>Liquid preparation for oral use</li>
                    <li>Rectal prepations</li>
                </ul>
                    
                </div>
            </div>
            <div class="physico-detail  p-txt">
                <p>Labiocert provide a one-stop service for testing a wide range of products, from raw materials to
                    finished products.
                    With our existing laboratory located in Chom Chao, Phnom Penh and internationally recognized
                    partner laboratories,
                    we are please to support you in quality analysis and related consultancy.
                </p>    
            </div>
            <div class="serive-onebtn">
                <a href="/service/pharmaceutical/quote" class="btn1 btn-color btn-size btn-sizes">
                    <span class="serviceone-btn">GET A QUOTE</span>
                </a>  
                <a href="/service/pharamaceutial/testparameter" class="btn1 btn-color btn-size btn-sizes">
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
                    <a href="/welcomelabiocert">Welcome to Labiocert</a>
                </div>
            </div>
        </div>
        <div class="adversting fixed ads-service">
            <div class="last-new">
                <span class="lastnew">LASTEST NEWS</span>
            </div>
            <div class="lastnew-detail">
            @if(!empty($collection_lastest))
            @foreach($collection_lastest as $item)
                <div class="img-launchnew ">
                    <a href="/media/page={{$item->id}}" class="img-lastnew"><img src="/assets/uploads/{{$item->image}}"  alt=""></a>
                    <a href="/media/page={{$item->id}}" class="text-lastnew">{{ Str::limit($item->title, 40) }}</a>
                </div>
            @endforeach
            @endif

            </div>
        </div>
    </div>
</div>

</section>
<!-- End of Service one -->


@endsection
