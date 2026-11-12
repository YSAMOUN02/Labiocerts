@extends('frontend.master')
@section('content')

@php
    use App\Models\ServiceParameter;
    $service = $data[0]->categories[0]->mainlist;
    // dd($service);
@endphp
<!-- Labiocert Analysis -->
<section>


    <div class="labiocert-analysis tenzero container-width mb-3 ">
        <div class="la-text">

            <h1 class=" title-style-text notranslate">{{ $data[0]->categories[0]->category}}</h1>
            {{-- <ol>

                <li>
                    FPurified water		FWater for industry		FSurface water
                </li>
                <li>
                    FDrinking Water, Portable water		FGround water		FSwimming pool water
                </li>
                <li>
                    FBottled water		FWaste Water 		FFish pond water, other water
                </li>

            </ol> --}}
            <table class="la-table la-tbl notranslate">
                <tbody class="latbl-txt categories">
                    @foreach ($service  as $item)
                        <tr>
                            <td colspan="4"  class="styled-text text-center"><strong >{{$item->list_name}}</strong></td>
                        </tr>
                        @if($item->type == 'service')

                        <tr>
                            <th>No.</th>
                            <th>Parameter</th>
                            <th>Duration Analysis</th>
                            <th>Method</th>
                        </tr>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($item->sublist as $list)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$list->name}}</td>
                            <td>{{$list->duration}}</td>
                            <td >{{$list->method}}</td>
                        </tr>
                        @php
                        $no ++;
                        @endphp
                        @endforeach
                        @elseif ($item->type == 'product')
                        <tr>
                            <th>No.</th>
                            <th >Product</th>
                            <th colspan="2">Recommended Test Parameters</th>
                        </tr>
                        @php
                        $no = 1;
                     @endphp
                        @foreach ($item->sublist as $list)
                        <tr>
                            <td>{{$no}}</td>
                            <td >{{$list->name}}</td>
                            <td  colspan="2">{{$list->method}}</td>



                        </tr>
                        @php
                        $no ++;
                        @endphp
                        @endforeach

                        @else

                        <tr>
                            <th>No.</th>
                            <th colspan="2">Description</th>
                            <th >Parameter</th>
                        </tr>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($item->sublist as $list)
                        <tr>
                            <td>{{$no}}</td>
                            <td colspan="2">{{$list->method}}</td>
                            <td >{{$list->name}}</td>


                        </tr>
                        @php
                        $no ++;
                        @endphp
                        @endforeach
                        @endif

                    @endforeach
                </tbody>
            </table>

        </div>
        <aside>
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
        </aside>
    </div>

</section>
<!-- End of Labiocert Analysis -->

@endsection
