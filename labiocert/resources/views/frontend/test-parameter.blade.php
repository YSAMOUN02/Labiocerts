@extends('frontend.master')
@section('content')

<!-- Labiocert Analysis -->
<section>
    @php
    $service1 = $services->where('no', 1)->first();
    @endphp
    @if($service1)
    <div class="labiocert-analysis tenzero container-width">
        <div class="la-text">
            <h1>{{ $service1->title }}</h1>
            <ol>
                @foreach(explode("\n", $service1->reference) as $reference)
                @if(!empty(trim($reference)))
                <li>{!! nl2br(e(trim($reference))) !!}</li>
                @endif
                @endforeach
            </ol>
            <table class="la-table la-tbl">
                <tbody class="latbl-txt categories">
                    @php
                    $sorted_categories = $services_category->sortBy('no');
                    @endphp

                    @foreach($sorted_categories as $service_category)
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
        </div>
        <aside>
            <div class="advertising fixed ads-service">
                <div class="last-new">
                    <span class="lastnew">LATEST NEWS</span>
                </div>
                <div class="lastnew-detail">
                    <div class="img-khmernew">
                        <a href="/media/newyear" class="img-lastnew"><img src="{{ URL('/assets/image/allimg1.jpg') }}" alt=""></a>
                        <a href="/media/newyear" class="text-lastnew">New year and double birthday</a>
                    </div>
                    <div class="img-launchnew">
                        <a href="/media/launchofKEM" class="img-lastnew"><img src="{{ URL('/assets/image/allimg2.jpg') }}" alt=""></a>
                        <a href="/media/launchofKEM" class="text-lastnew">Launch of KEM</a>
                    </div>
                    <div class="img-kinal">
                        <a href="/media/kinal" class="img-lastnew"><img src="{{ URL('/assets/image/allimg3.jpg') }}" alt=""></a>
                        <a href="/media/kinal" class="text-lastnew">KINAL is the symbol of the effective pain-killer</a>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    @endif
</section>
<!-- End of Labiocert Analysis -->

@endsection
