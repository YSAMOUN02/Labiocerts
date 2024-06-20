@extends('frontend.master')
@section('content')
<!-- Event Two Section-->
<section>
    <div class="eventtwo-section tenzero container-width">
        <div class="event-two ">
            <div class="launch-text scrollable ">
                <div class="launch-detial ">
                    <h1>Launch of KEM</h1>
                    <h5>March 4, 2020</h5>
                    <p> 
                        The Group PPM/Confirel announces the launch of KEM, a plant complex produced in Kampot that is good for health, containing more than 50 natural and living probiotics.
                    </p>
                    <p>
                        After seven years of research, the Group PPM/Confirel is broadening its range of health and wellbeing products with KEM, a vegetable complex whose base is the juice from the fruit of the Morinda Citrifolia, 
                        containing more than 50 natural and living probiotics.
                    </p>
                    <p>
                        The Morinda Citrifolia is a shrub that has been used for centuries in traditional Indian pharmacopeia. The fruit’s juice is known to improve the body’s natural defenses, its general tone and vitality, as well as 
                        sleeping patterns and general moods. It also helps to fight cellular aging, pain and inflammation.
                    </p>
                    <p>
                        Thanks to a unique manufacturing process designed by Confirel, the juice of Morinda Citrifolia, starting from a stock solution, will ferment naturally in the open air in Kampot Province and become enriched with natural, living probiotics.
                    </p>
                    <p>
                        Lauded for their positive effects on the digestive process, the strengthening of the immune system and on counteracting stress, probiotics work alongside the Morinda Citrifolia juice to offer, through KEM, a powerful wellness product.
                    </p>
                    <p>
                        During the first usage of a bottle of KEM, the adding of two packets of organic palm sugar Thnot allows the reactivation
                        of the natural, living probiotics to give them an optimal level of effectiveness.
                    </p>
                    <p>
                        « Taken at least 10 days per month, KEM, which is rich in serotonin precursors, improves natural defenses and the strength of the body. Thanks to its positive impact on the synthesis of melatonin, KEM also improves sleep and mood. At the same time, KEM stimulates the production of T 
                        lymphocytes and, therefore, fights aging. It also acts against pain and participates 
                        in the rebalancing of the intestinal microbiata, » says Dr. Dominique Gormand of PPM/Confirel.
                    </p>
                    <p>
                        An initial clinical study performed in a hospital with 57 immunodeficient partients, between the ages of 21 and 69, who were
                        suffering from inflammatory pains, digestive problems or other allergic symptoms and from difficulty sleeping, showed positive results
                        from KEM on their principal symptoms by the seventh day. That effectiveness increased and persisted in the long term, as shown by the results after one
                        month of treatment.
                    </p>
                    <p>
                        These results allow us to highlight that taking KEM regularly helps to relieve patients’ symptoms linked to 
                        serious diseases and to achieve a notable improvement in their quality of life.
                    </p>
                    <p>
                        « This study is still in the process of evaluating the long term improvement to quality of life of the patients taking KEM on a regular basis, » explains Dr. Gormand.
                    </p>
                    <p>
                        « By creating, with KEM, a new product certified organic by Ecocert International SA using the natural resources of Cambodia, Confirel – which this year is celebrating its fifteenth anniversary – shows again that reasonable exploitation of the country’s natural resources combined with innovation offers new outlets for local products and promotes rural development, » says Dr. Hay Ly Eang, the founder and president of PPM/Confirel.
                    </p>
                    <p>
                        With KEM, PPM/Confirel expands its line of health and wellness products made in Cambodia, which include, among others, organic palm sugar with a low glycemic index and infusions of Kampot pepper and natural plant inflorescence.
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
                        <a href="/media/kinal">KINAL is the symbol of the effective pain killer</a>
                    </div>
                    <div class="next-side">
                        <span class="next-art">Next article</span> 
                        <a href="/media/newyear">New year and double birthday</a>
                    </div>
                </div>
            </div>
            <aside>
                <div class="ads-eventtwo fixed ads-service">
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
<!-- End of event two section -->
      

@endsection