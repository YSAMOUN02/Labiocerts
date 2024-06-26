@extends('backend.master')
@section('content')
<table class="mt-2">
    <tr>
        <th>Thumbnail</th>
        <th>Title</th>
        <th>Category</th>
        <th>Date</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach ($data as $item)
        <tr>
            @php
                  $image = DB::table('image_box')
                ->where('post_id', $item->id)
                ->select('name')
                ->first();
                // dd($image);
            @endphp
            <td>
                @if ($image)
                <img width="100px" height="100px" style="object-fit: contain;" src="{{ asset('assets/uploads/'. $image->name) }}" alt="Image media"></td>
                @else

                <img src="" alt="No Thumbnail">
                @endif
       
            <td>{{$item->title}}</td>
            <td>{{$item->category}}</td>
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
                <a href="#"><button class="btn-danger">Delete</button></a>
            </td>
        </tr>
    @endforeach
  


  </table>
@endsection