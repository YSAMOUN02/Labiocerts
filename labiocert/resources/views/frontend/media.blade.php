@extends('frontend.master')
@section('content')
<!-- Media Center -->
 <section> 
        <div class="mediacenter-section ">
            <div class="media-text">
                <div class="media-title container-width">
                    <h2>MEDIA CENTER</h2>
                </div>
                <div class="media-image container-width">
                    
                    
                    @if(!empty($collection_hero))
                        @foreach($collection_hero as $item)
                            <div class="media-ff">
                                <a href="/media/page={{$item->id}}">
                                    <img class="mediaf-own" src="/assets/uploads/{{$item->image}}" alt="main image">
                                    <div class="overlay">{{$item->title}} <p>{{$item->created_at}}</p></div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="media-ff">
                            <a href="">
                                <img class="mediaf-own" src="" alt="main image">
                                <div class="overlay"> <p></p></div>
                            </a>
                        </div>

                    @endif
                    <div class="group-media-ff">
                        <div class="right_box_media">
                            <img src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?cs=srgb&dl=pexels-jaime-reimer-1376930-2662116.jpg&fm=jpg" alt="">
                            <div class="overlay">Testion <p>25-02-2002</p></div>
                        </div>
                        <div class="right_box_media">
                            <img src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?cs=srgb&dl=pexels-jaime-reimer-1376930-2662116.jpg&fm=jpg" alt="">
                            <div class="overlay">Testion <p>25-02-2002</p></div>
                        </div> 
                    
                    </div>
                </div>
            </div>
            <div class="all-detail tenzero container-width">
                <div class="alldetail-text" >
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="category">
                                    <div class="category-text">
                                        Food
                                    </div>
                                    <div class="category-line"></div>
                                </div>
                            </div>
                        </div>
               
                        <div class="row post-by-category">
                            @if(!empty($collection))
                            @foreach ($collection as $item)
                            <div class="col-3">
                                <div class="news_box">
                                    <div class="image">
                                        <img src="/assets/uploads/{{$item->image}}" alt="Image Media">
                                    </div>
                                    <div class="text">
                                    <div class="inner-text">
                                        <span>{{ Str::limit("Lorem Ipsum is simply dummy text of the printing and typesetting when an unk", 70) }}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row">
                                <div class="col-12">
                                    <div class="media-ff">
                                        <h2 style="white-space: nowrap">No Data</h2>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>

                        <div class="row post-by-category">
                        
                            <div class="col-sm-12 col-md-4 col-lg-3 media-box-small">
                                <div class="news_box">
                                    <div class="image">
                                        <img src="https://thumbs.dreamstime.com/b/beautiful-view-nature-mountains-near-konigssee-lake-bavaria-germany-blue-sky-clouds-97444419.jpg" alt="Image Media">
                                    </div>
                                    <div class="text">
                                    <div class="inner-text">
                                        <span>{{ Str::limit("Lorem Ipsum is simply dummy text of the printing and typesetting when an unk", 70) }}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-4 col-lg-3 media-box-small">
                                <div class="news_box">
                                    <div class="image">
                                        <img src="https://thumbs.dreamstime.com/b/beautiful-view-nature-mountains-near-konigssee-lake-bavaria-germany-blue-sky-clouds-97444419.jpg" alt="Image Media">
                                    </div>
                                    <div class="text">
                                    <div class="inner-text">
                                        <span>{{ Str::limit("Lorem Ipsum is simply dummy text of the printing and typesetting when an unk", 70) }}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-4 col-lg-3 media-box-small">
                                <div class="news_box">
                                    <div class="image">
                                        <img src="https://thumbs.dreamstime.com/b/beautiful-view-nature-mountains-near-konigssee-lake-bavaria-germany-blue-sky-clouds-97444419.jpg" alt="Image Media">
                                    </div>
                                    <div class="text">
                                    <div class="inner-text">
                                        <span>{{ Str::limit("Lorem Ipsum is simply dummy text of the printing and typesetting when an unk", 70) }}</span>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End of Media Center-->
@endsection
