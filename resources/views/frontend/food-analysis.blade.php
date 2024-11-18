@extends('frontend.master')
@section('content')
<!-- Food Analysis -->
<section>
    @php
    $service2 = $services->where('no', 2)->first();
    @endphp
    @if($service2)
    <div class="food-analysis tenzero container-width">
        <div class="tbl-food">
            <div class="f-text">
                <h1>{{ $service2->title }}</h1>
                <ol>
                    @foreach(explode("\n", $service2->reference) as $reference)
                    @if(!empty(trim($reference)))
                    <li>{!! nl2br(e(trim($reference))) !!}</li>
                    @endif
                    @endforeach
                </ol>
            </div>
            <table class="la-table ftable">
                <tbody class="ftbl-txt">
                    @php
                    $sorted_categories = $services_category->where('service_id', $service2->id)->sortBy('no');
                    @endphp
                    @foreach($sorted_categories as $service_category)
                    <tr>
                        <td><strong>{{ $service_category->no }}</strong></td>
                        <td colspan="3"><strong>{{ $service_category->title_category }}</strong></td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameters</td>
                        <td>Duration Analysis</td>
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
            <article>
                <div class="reference-food">
                    <h6>Reference :</h6>
                    <ul>
                        <li>1. ISO : International Organization for Standardization</li>
                        <li>2. AOAC : Association of official analytical chemists</li>
                        <li>3. EP 10.0: Pharmacopiea european 10.0</li>
                        <li>4. Ministry of agriculture, forestry and fisheries, December 2020 </li>
                        <li>5. Codex alimentarius commision</li>
                    </ul>
                    <div class="service-f-analysis">
                        <p>For more details regarding test method, please refere to Customer Service</p>
                        <h6>CONTACT US:</h6>
                        <p>Name: Ms.Khon Somaly (Customer service)</p>
                        <p>Tel: 017 594 243 / 093 594 243</p>
                        <p>Telegram: 093 594 243</p>
                        <p>Email: info@labiocert.com</p>
                    </div>
                </div>
            </article>
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
        @endif
    </div>
</section>
<!-- End of food analysis -->
@endsection