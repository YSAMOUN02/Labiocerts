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

                <div class="coverage-service">
                    <div class="coverageservice-img wel-img">
                        <img src="{{URL('/assets/image/relevant.jpg')}}" alt="">
                    </div>
                    <div class="relevan-text mt-4">

                        <h5>Relevant Products</h5>
                        <ul class="ulrelevant co-li">
                            <li>Pharmaceuticals</li>
                            <li>Foods and feeds</li>
                            <li>Water and wastewater</li>
                        </ul>
                    </div>
                </div>
                <div class="button-container">
                 
                    <div class="face-btn">
                        <button class="facebook-button">
                            <a href="https://www.facebook.com/share/1FQji8RHDQ/" target="_blank" id="share-facebook">
                                <i class="fa-brands share-face fa-facebook-f" style="color: #ffffff;"></i>
                                Facebook
                            </a>
                        </button>
                    </div>
                    {{-- <div class="print-btn">
                        <button class="print-button" onclick="window.print()">
                            <i class="fa-solid share-print fa-print" style="color: #ffffff;"></i>
                            Print
                        </button>
                    </div> --}}

                </div>
                {{-- <div class="block-row">
                    <div class="previous-side">
                        <span class="pre-art">Previous article</span> <br>
                        <a href="/service/foodtesting">Food and Feed Testing</a>
                    </div>
                    <div class="next-side">
                        <span class="next-art">Next article</span>
                        <a href="/service/pharmaceutical">Pharmaceutical Testing</a>
                    </div>
                </div> --}}
            </div>
            <aside>

            </aside>
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
<!-- End of Welcome section -->
@endsection
