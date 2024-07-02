@extends('frontend.master')
@section('content')

<!-- Labiocert Analysis -->
<section>
    @php
    $service1 = $services->where('no', 1)->first();
    $service2 = $services->where('no', 2)->first();
    $service3 = $services->where('no', 3)->first(); 
    @endphp
    @if($service1)
    <div class="labiocert-analysis tenzero container-width">
        <div class="la-text">
            <h1>{{ $service1->title }}</h1>
            <ol>
                @foreach(explode("\n", $service1->reference) as $reference)
                @if(!empty(trim($reference)))
                <li>{!! nl2br(trim($reference)) !!}</li>
                @endif
                @endforeach
            </ol>

            <table class="la-table la-tbl">
                <tbody class="latbl-txt categories">
                    @foreach($services_category as $index => $service_category)
                    <tr>
                        <td><strong>{{ $service_category->no }}</strong></td>
                        <td colspan="3"><strong>{{ $service_category->title_category }}</strong></td>
                    </tr>
                    <tr>
                        <td>No.</td>
                        <td>Parameter</td>
                        <td>Remarks</td>
                        <td>Method</td>
                    </tr>
                    @foreach($services_parameter as $service_parameter)
                    @if($service_parameter->service_category_id == $service_category->id)
                    <tr>
                        <td>{{ $service_parameter->no }}</td>
                        <td>{{ $service_parameter->title_parameter }}</td>
                        <td>{{ $service_parameter->duration }}</td>
                        <td>{{ $service_parameter->method }}</td>
                    </tr>
                    @endif
                    @endforeach
                    @if($index < $services_category->count() -1)
                        @endif
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    @if($service2)
    <div class="labiocert-analysis tenzero container-width">
            <article>
                <div class="abbreviation-text lan-txt">
                    <h5>{{ $service2->title }}</h5>
                    <div class="abbreviation-list lan-txt">
                        @foreach(explode("\n", $service2->reference) as $reference)
                        @if(!empty(trim($reference)))
                        <p>{!! nl2br(trim($reference)) !!}</p>
                        @endif
                        @endforeach
                    </div>
                   
                   
                </div>
            </article>       
    </div>
    @endif
    @if($service3)
        <div class="labiocert-analysis ">
            <ul class="reference-text">
                <h5>{{ $service3->title}}</h5>
                <div class="abbreviation-list lan-txt">
                        @foreach(explode("\n", $service3->reference) as $reference)
                        @if(!empty(trim($reference)))
                        <li>{!! nl2br(trim($reference)) !!}</li>
                        @endif
                        @endforeach
                </div><br>
                <p>For more details regarding test method, please refer to Customer Service</p> 
            </ul>
        </div>
       
    @endif
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

</section>
<!-- End of Labiocert Analysis -->

@endsection