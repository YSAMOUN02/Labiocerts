@extends('backend.master')
@section('content')
  <!-- alert confirm for user aware -->
  <div class="alert-confirm " id="delect_user">
    <form action="/admin/user/delete/submit" method="POST">
        @csrf
      <span>Are you sure?</span>
      <input type="text" class="d-none" name="id" id="user_id">
      <div class="alert-confirm-btn mt-3">
        <button type="submit " class="btn-success">Yes</button>
        <button class="btn-danger" type="button" onclick="fade_alert('#delect_user')">
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
<table >
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Create Date</th>
        <th scope="col">Modify Date</th>
        <th scope="col">Create By</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @if(!empty($user))
            @foreach ($user as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td> {{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}
                    </td>
                    <td> {{ \Carbon\Carbon::parse($item->updated_at)->format('d-m-Y') }}
                    <td>{{$item->created_by}}</td>
                    <td>
                        <a href="/admin/user/update/id={{$item->id}}"><button class="btn-primary"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></button></a>
                        <button type="button" onclick="delete_value({{$item->id}} ,'#user_id', '#delect_user' )" class="btn-danger btn-delete-category" >
                            <i class="fa-solid fa-trash" style="color: #ffffff;"></i>
                        </button>
                    
                    </td>
                </tr>
            @endforeach
        @endif
     
     
    </tbody>
  </table>


@endsection