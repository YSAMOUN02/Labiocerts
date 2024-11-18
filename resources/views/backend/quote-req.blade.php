@extends('backend.master')
@section('content')
    <!-- alert confirm for user aware -->
    <div class="alert-confirm " id="delect_quote">
        <form action="/admin/quote/delete" method="POST">
            @csrf
          <span>Are you sure?</span>
          <input type="text" class="d-none" name="id" id="quote_id">
          <div class="alert-confirm-btn mt-3">
            <button type="submit " class="btn-success">Yes</button>
            <button class="btn-danger" type="button" onclick="fade_alert('#delect_quote')">
              No
            </button>
          </div>
        </form>
      </div>

      @if(Session::has('sucess'))
      <div class="message-box  sucess">
          <span>{{Session::get('sucess')}}</span>
      </div>
     @elseif(Session::has('fail'))
      <div class="message-box fail">
          <span>{{Session::get('fail')}}</span>
      
      </div>
  
    @endif
<div class="category-info ">
  <form action="/admin/quote/mail/change" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <h2>Mail Distination</h2>
            @if(!empty($web_info))
             <input type="email" name="email" value="{{$web_info->quote_reciever}}" class="form-control" >
            @else
            <input type="email" name="email" value="" class="form-control" >
            @endif
            </div>
        <div class="col-6"></div>

    </div>
  
</div>  
<div class="row mt-1"><div class="col-12"><button type="submit" class="btn btn-primary">Change</button></div></div>
  </form>
<div class="row mt-3" >
  <div class="col-12">
    <h2>Requested Quote</h2>
    <a href="/admin/quote/mark/all"><button class="btn btn-primary">Mark All Read</button></a>
    <table id="table-quote" class="mt-3">
        <thead>
            <tr class="">
                <th>Id</th>
                <th>From Email</th>
                <th>Service</th>
                <th>Contact Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <tbody>
                @if(!empty($quote))
                  
                    @foreach ($quote as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->service}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                           @if($item->state == 0) 
                            <button class="btn btn-warning"><i class="fa-solid fa-envelope-circle-check"></i></button>
                            @else 
                            <button class="btn btn-success"><i class="fa-solid fa-envelope-circle-check"></i></button>
                            @endif
                        </td>
                        <td>
                            {{-- <button class="btn btn-danger"><i class="fa-solid fa-trash" style="color: #ffffff;"></i></button> --}}
                       
                            
                            <button type="button" onclick="delete_value({{$item->id}} ,'#quote_id', '#delect_quote' )" class="btn-danger btn-delete-category" >
                                <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                            </button>



                            <a href="view/quote_no={{$item->id}}"><button class="btn btn-primary"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></button></a>
                        </td>
                    </tr>
                      
                    @endforeach

                @endif
  
            
            </tbody>
        </thead>
    </table>
  </div>
</div>

<div class="pagination_box">
    <nav aria-label="...">
        <ul class="pagination">
        @if($page == 1)

        @else
        <li class="page-item ">
            <a style="text-decoration: none; " href="/admin/quote/view/page=1"><span class="page-link">First</span></a>
          </li>
        @endif
        @if($all_page > 1)
            @if($page > 4)
              <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-4}}">{{$page-4}}</a></li>
              <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-3}}">{{$page-3}}</a></li>
              <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-2}}">{{$page-2}}</a></li>
              <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-1}}">{{$page-1}}</a></li>  
            @elseif($page == 4)
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-3}}">{{$page-3}}</a></li>
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-2}}">{{$page-2}}</a></li>
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-1}}">{{$page-1}}</a></li>
            @elseif($page == 3)
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-2}}">{{$page-2}}</a></li>
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-1}}">{{$page-1}}</a></li>
            @elseif($page == 2)
                <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$page-1}}">{{$page-1}}</a></li>
            @elseif($page == 1)

            @endif
            @php
                $page_show = $page+10;    
                if($page_show > $all_page){
                    $page_show = $all_page;
                }
            @endphp
            @for($i = $page ; $i <= $page_show ;$i++)
               
                @if($page == $i)
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{$page}}</span>
                    </li>
                @else 
                    <li class="page-item"><a class="page-link" href="/admin/quote/view/page={{$i}}">{{$i}}</a></li>
                @endif
            @endfor
        @endif
        @if($page != $all_page)
            <li class="page-item">
            <a class="page-link" href="/admin/quote/view/page={{$all_page}}">Last</a>
          </li>
        @else
          
        @endif
        </ul>
      </nav>


      
   
</div>
@endsection