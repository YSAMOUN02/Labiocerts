@extends('frontend.master')
@section('content')
<!-- Media Center -->
 <section class="ptx-5"> 
        <div class="mediacenter-section ">
            <div class="media-text">
                <div class="media-title container-width">
                    <h2>MEDIA CENTER</h2>
                </div>
                <div class="media-image container-width">
                    
                    
        @if(count($popular_media) > 0)
                            <div class="media-ff">
                                <a href="/media/page={{$popular_media[0]->id}}">
                                    <img class="mediaf-own" src="/assets/uploads/{{$popular_media[0]->image}}" alt="main image">
                                    <div class="overlay">{{$popular_media[0]->title}} <p>{{$popular_media[0]->created_at}}</p></div>
                                </a>
                            </div>
                    <div class="group-media-ff">
                        @php
                            $media_state = 0;    
                        @endphp
                        @foreach($popular_media as $item)
                            @if($media_state == 0)
                                @php
                                $media_state = 1;    
                                @endphp
                            @else
                            <a href="/media/page={{$item->id}}">
                                <div class="right_box_media">
                                
                                    <img src="/assets/uploads/{{$item->image}}" alt="">
                                    <div class="overlay"><span>{{$item->title}}</span><p>{{$item->created_at}}</p></div>
                                
                                </div>
                            </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
            <div class="all-detail tenzero container-width">
                <div class="alldetail-text" >
                    @if(!empty($collection))
                        @foreach($collection as $item_category)
                          @if(count($item_category->media) > 0)
                            <div class="post-by-category">
                         
                                    <div class="category">
                                        <div class="category-text">
                                            {{$item_category->category_name}}
                                        </div>
                                        <div class="category-line"></div>
                                    </div>
                            
                            
                            </div>

                                <div class="post-by-category">
                                    @php
                                    $count_media_by_category =0;
                                    $div_add = 0;
                                    @endphp
                                    @foreach ($item_category->media as $item)
                                       
                                   
                                            <div class="box-media">
                                           
                                                <div class="news_box">
                                                    <a href="/media/page={{$item->id}}">
                                                        <div class="image">
                                                        <img src="/assets/uploads/{{$item->image->name}}" alt="Image Media">
                                                        </div>
                                                        <div class="text">
                                                            <div class="date"><i class="fa-solid fa-calendar-days"></i>&ensp;<small>02-07-2024 </small></div>
                                                            <div class="inner-text">
                                                                <span>{{ Str::limit($item->title, 60) }}</span>
                                                            </div>
                                                        </div>
                                                 </a>
                                                </div>
                                          
                                            </div>
                                   
                                            @php
                                            $count_media_by_category ++;
                                            @endphp
                                    @endforeach

                                    @php    
                                 
                                        if($count_media_by_category < 4){
                                            $div_add = 4 - $count_media_by_category;
                                        }
                                        elseif($count_media_by_category < 8){
                                            $div_add = 8 - $count_media_by_category;
                                        }
                                    @endphp
                                    @if($div_add != 0)
                                        @for($i = 0; $i <= $div_add ; $i++ )
                                            <div class="box-media">
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            @endif
                        @endforeach
                  
                    @endif

     

                    @if(!empty($collection_no_category))
                            @if(count($collection_no_category) != 0)
                                <div class="post-by-category">
                            
                                        <div class="category">
                                            <div class="category-text">
                                                Order Article
                                            </div>
                                            <div class="category-line"></div>
                                        </div>
                                
                                </div>
                        @endif
                    <div class=" post-by-category">
                        @php
                        $count_media_by_all_news =0;
                        $div_add_all_news = 0;
                        @endphp
                        @foreach ($collection_no_category as $item)
                           
                       

                        {{-- <div class="box-media">
                                           
                            <div class="news_box">
                                <a href="/media/page={{$item->id}}">
                                    <div class="image">
                                    <img src="/assets/uploads/{{$item->image->name}}" alt="Image Media">
                                    </div>
                                    <div class="text">
                                        <div class="date"><i class="fa-solid fa-calendar-days"></i>&ensp;<small>02-07-2024 </small></div>
                                        <div class="inner-text">
                                            <span>{{ Str::limit($item->title, 60) }}</span>
                                        </div>
                                    </div>
                             </a>
                            </div>
                      
                        </div> --}}
                                <div class="box-media">
                      
                                    <div class="news_box">
                                        <a href="/media/page={{$item->id}}">
                                            <div class="image">
                                          
                                                <img src="/assets/uploads/{{$item->image}}" alt="Image Media">
                                            </div>
                                            <div class="text">
                                            <div class="inner-text">
                                                <span>{{ Str::limit($item->title,60) }}</span>
                                
                                            </div>
                                            </div>
                                        </a>
                                        </div>
                            
                                </div>
                                @php
                                $count_media_by_all_news ++;
                          
                                @endphp
                        @endforeach
                        @php    
                                 
                        if($count_media_by_all_news < 4){
                            $div_add_all_news = 4 - $count_media_by_all_news;
                        }
                        elseif($count_media_by_all_news < 8){
                            $div_add_all_news = 8 - $count_media_by_all_news;
                        }
                        @endphp
                        @if($div_add_all_news != 0)
                            @for($i = 0; $i <= $div_add_all_news ; $i++ )
                                <div class="box-media">
                                </div>
                            @endfor
                        @endif
                        </div>
                        @endif
            </div>
        </div>
    </section>
    <!-- End of Media Center-->
@endsection
{{-- $collection_no_category --}}