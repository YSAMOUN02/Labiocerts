@extends('frontend.master')
@section('content')


    <!-- Physi-analysis -->
    <section>
        @php 
            $service3  = $services->where('no', 3)->first(); 
        @endphp 
    if($service3)
    <div class="p-analysis tenzero container-width">
        <div class="panalysis-txt">
            <div class="physiana-text">
                <h1>{{ $service3->title }}</h1>
                <ol>
                    @foreach(explode("\n", $service3->reference) as $reference)
                    @if(!empty(trim($reference)))
                    <li>{!! nl2br(e(trim($reference))) !!}</li>
                    @endif
                    @endforeach
                </ol>
               
            </div>
            <table class="la-table ptbl">
                <tbody class="ptbl-txt">
                    @php 
                    $sorted_categories = $services_category->where('service_id', $service3->id)->sortBy('no');
                    @endphp
                    @foreach($sorted_categories as $service_category)
                    <tr>
                        <td><strong>{{ $service_category->no }}</strong></td>
                        <td colspan="3"><strong>{{ $service_category->title_category }}</strong></td>
                    </tr>
                    <tr>
                        <td>N<sup>o</sup></td>
                        <td>Parameters</td>
                        <td>Durations Analysis</td>
                        <td>Method</td>
                    </tr>
                    @php
                    $sorted_parameter = $services_parameter->sortBy('no');
                    @endphp
                    @foreach($sorted_parameter as $service_parameter)
                    @if($service_parameter->service_category_id == $service_category->id)
                    <tr>
                        <td>{{ $service_parameter->no }}</td>
                        <td>{{ $service_parameter->title_parameter }}</td>
                        <td>{{ $service_parameter->duration }}</td>
                        <td>{{ $service_parameter->method }}</td>
                    </tr>
                    @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
            <div class="reference-phy">
                <h6 style="font-weight: bold;">Reference:</h6>
                <p> USP 44: United States Pharmacopeia 44, 2021</p>
                <p> EP 10.0 : European Pharmacopoeia, 2019</p>
                <p> TAS: THAI AGRICULTURAL STANDARD</p>
                <p> FAO : Food and Agriculture Organization</p>
                <p> EAS : EAST AFRICAN STANDARD</p>
                <p> KS : KENYA STANDARD</p>
                <p> FSSAI 2019 : Food Safety and Standards Authority of India</p>
                <p> IS : Indian Standard</p>
                <p> ISO: International Organization for Standardization</p>
                <p> AOAC : Association of official analytical chemists</p>
                <p> ASEAN : Association of Southeast Asian Nations</p>
                <p> FDA US : The United States Food and Drug Administration</p>
                <p> For more details regarding test method, please refer to</p>
                <p>Customer Service</p>
            </div>
            <div class="contact-phy">
                <h6 style="font-weight: bold;">CONTACT US:</h6>
                <p>Name: Ms.Khon Somaly(Customer service)</p>
                <p>Tel: 017 594 243/ 093 594 243</p>
                <p>Telegram: 093 594 243</p>
                <p>Email: info@Labiocert.com</p>
            </div>
        </div>
        <aside>
            <div class="adversting fixed ads-service">
                <div class="last-new">
                    <span class="lastnew">LASTEST NEWS</span>
                </div>
                <div class="lastnew-detail">
                    <div class="img-khmernew ">
                        <a href="Eventone.html" class="img-lastnew"><img src="{{URL('/assets/image/allimg1.jpg')}}" alt=""></a>
                        <a href="Eventone.html" class="text-lastnew">New year and double birthday</a>
                    </div>
                    <div class="img-launchnew ">
                        <a href="Eventtwo.html" class="img-lastnew"><img src="{{URL('/assets/image/allimg2.jpg')}}" alt=""></a>
                        <a href="Eventtwo.html" class="text-lastnew">Launch of KEM</a>
                    </div>
                    <div class="img-kinal ">
                        <a href="Eventthree.html" class="img-lastnew"><img src="{{URL('/assets/image/allimg3.jpg')}}" alt=""></a>
                        <a href="Eventthree.html" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                    </div>
                </div>
            </div>
        </aside>
        
    </div>
</section>
    <!-- End of Physi-analysis -->


@endsection