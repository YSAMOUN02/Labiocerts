@extends('frontend.master')
@section('content')
 <!-- Location section -->
 <section>

<div class="l-cation">
    <div class="location-section container-width">
        <div class="our-location">

        <div class="location-text ">
            <h1>Profile Video</h1>
        </div>
        <div  class="location-mapp">
            {{-- Iframe ? --}}

            <iframe id="video_container" width="100%" height="500" src="https://www.youtube.com/embed/fyzgEFreOtM?si=Y5gqD3pFn6AhNBEb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <div class="c-section tenzero">


    </div>

    </div>
</div>

</section>
<!-- End of Location section -->
 @endsection
