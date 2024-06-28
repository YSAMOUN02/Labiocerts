@extends('frontend.master')
@section('content')


    <!-- Group PPM Section -->
    <section>

<div class="group-section tenzero container-width">
    <div class="ppm-section scrollable">
        <h2>{{$media_header->title}}</h2>
       
            @if(!empty($mergedData))
                @foreach($mergedData as $item)

                @if($item->type == 'text')
                    {{-- TEXT --}}
                   @php
                        echo($item->description);
                   @endphp
           
                @else
                    <img src="/assets/uploads/{{$item->image}}"  alt="">

              
                @endif
        
            @endforeach
            @endif


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
                @if(!empty($collection_lastest))
                @foreach($collection_lastest as $item)
                <div class="img-khmernew ">
                    <a href="/media/page={{$item->id}}" class="img-lastnew"><img src="/assets/uploads/{{$item->image}}"  alt=""></a>
                    <a href="/media/page={{$item->id}}" class="text-lastnew">{{ Str::limit($item->title, 70) }}</a>
                </div>
               
                @endforeach
                @else
                <div class="media-ff">
                    <h2>No Data</h2>
                </div>
                @endif
            </div>
       
            <div class="ads">
                <a href="">
                    <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec300c.jpg" alt="ads">
                </a>
            </div>
        </div>
    </aside>
   
    </div>
</div>
        
</section>
<!-- End of Group PPM Section -->
  
@endsection