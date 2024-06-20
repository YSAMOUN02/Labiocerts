@extends('frontend.master');
@section('content')
    <!-- Our Services -->         
<section>
     <div class="ourservices container-width">
                <div class="services-title">
                    <h1>OUR SERVICES</h1>
                </div>
                <div class="services-detail grid-service ">
                    <div class="service-one serviceone-title">
                        <a class="s-img" href="service-one.html" style="text-decoration: none;" >
                            <img src="{{URL('assets/image/service-one.jpg')}}" alt="">
                            <h4>Pharmaceutical Testing</h4>
                        </a>    
                    </div>
                    <div class="service-two serviceone-title">
                        <a class="s-img" href="service-two.html" style="text-decoration: none;">
                            <img src="{{URL('assets/image/service-two.jpg')}}" alt="">
                            <h4>Food and Feed Testing</h4>
                        </a>   
                    </div>
                    <div class="service-three serviceone-title">
                        <a class="s-img" href="service-three.html" style="text-decoration: none;">
                            <img src="{{URL('assets/image/service-three.jpg')}}" alt="">
                            <h4>Water and Wastewater Testing</h4>
                        </a>   
                    </div>
                </div>
            </div>
</section>   

@endsection
  