@extends('backend.master')
@section('content')
@if(Session::has('success'))
<div class="message-box sucess">
    <span>{{Session::get('sucess')}}</span>
</div>
@elseif(Session::has('fail'))
<div class="message-box fail">
    <span>{{Session::get('fail')}}</span>

</div>

@endif
<!-- alert confirm for user aware -->
  <div class="alert-confirm " id="delect_media">
    <form action="/admin/media/delete/submit" method="POST">
        @csrf
      <span>Are you sure?</span>
      <input type="text" class="d-none" name="id" id="media_id">
      <div class="alert-co    nfirm-btn mt-3">
        <button type="submit " class="btn-success">Yes</button>
        <button class="btn-danger" type="button" onclick="fade_alert('#delect_media')">
          No
        </button>
      </div>
    </form>
  </div>
<table class="mt-2">
   <thead>
    <tr>
        <th>No</th>
        <th>Thumbnail</th>
        <th>Title</th>
        <th>Category</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
   </thead>
   <tbody>
    @php
    $no = 1;
@endphp
@foreach ($data as $item)
    <tr>
        @php 
              $image = DB::table('image_box')
            ->where('post_id', $item->id)
            ->select('name')
            ->first();
            // dd($image);
        @endphp
        <td>{{$no}}</td>
        <td>
            @if ($image)
            <img width="100px" height="100px" style="object-fit: contain;" src="{{ asset('assets/uploads/'. $image->name) }}" alt="Image media"></td>
            @else

            <img src="" alt="No Thumbnail">
            @endif
   
        <td>{{$item->title}}</td>
        <td>
            @if ($item->category_id != 0) 
               
                {{$item->categorys->category_name}}
            @else 
            {{$item->category_id}}
               
            @endif
        </td>
        <td>{{$item->date}}</td>
        <td>
            @if($item->status == 1)
                <div class="active">Active</div>
            @else
                <div class="inactive">Inactive</div>
            @endif
        </td>
        <td>
            <a href="/admin/media/update/{{$item->id}}"><button class="btn-primary">Update</button></a>
            <button onclick="delete_media({{$item->id}})" class="btn-danger">Delete</button>
        </td>
    </tr>
    @php
    $no ++;
    @endphp
    @endforeach
   </tbody>
  </table>
@endsection