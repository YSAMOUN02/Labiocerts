@extends('backend.master')
@section('content')
<!-- alert confirm for user aware -->
<div class="alert-confirm " id="delete_logo_client">
    <form action="/admin/logo_client/delete/submit" method="POST" >
        @csrf
      <span>Are you sure?</span>
      <input type="text" class="d-none" name="id" id="logo_client_id">
      <div class="alert-co    nfirm-btn mt-3">
        <button type="submit " class="btn-success">Yes</button>
        <button class="btn-danger" type="button" onclick="fade_alert('#delete_logo_client')">
          No
        </button>
      </div>
    </form>
  </div>

  @if(Session::has('sucess'))
  <div class="message-box sucess">
      <span>{{Session::get('sucess')}}</span>
  </div>
  @elseif(Session::has('fail'))
  <div class="message-box fail">
      <span>{{Session::get('fail')}}</span>
  </div>
  @endif
<div class="category-info">
    <form action="/admin/client/logo/add/submit"  method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="">Logo client</label>
               
                @if(!empty($preview_logo))
                    <input type="file" name="thumbnail" accept="image/*" onchange="loadFile(event)" class="form-control">
                    <input type="text" name="old_thumbnail" value="{{$preview_logo->thumbnail}}" class="d-none">
                    <input type="text" name="id" value="{{$preview_logo->id}}" class="d-none">
                @else
                    <input type="file" name="thumbnail" accept="image/*" required onchange="loadFile(event)" class="form-control">
                    <input type="text" name="old_thumbnail" value=""  class="d-none">
                @endif
            </div>
            <div class="col-6">
                <label for="">Link</label>
                
                @if(!empty($preview_logo))
                <input type="text" name="link" required class="form-control" value="{{$preview_logo->link}}">
                @else
                <input type="text" name="link" required class="form-control">
                @endif
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn-success"  name="action" value="add" type="submit">Add</button>
                @if(!empty($preview_logo))
                <button class="btn-primary" name="action" value="update" type="submit">Update</button>
                @endif
            </div>
         </div>
      </div>
    </form>
  <div class="preview-logo mt-4">
    <small class="text-danger">Recomend Imag for web size 200x200</small>

    @if(!empty($preview_logo))
        <img width="200px" height="200px" src="/assets/uploads_logo/{{$preview_logo->thumbnail}}" style="object-fit: contain;" alt="Preview File" id="output"/>
    @else
        <img width="200px" height="200px" style="object-fit: contain;" alt="Preview File" id="output"/>
    @endif
  
  </div>
  <table class="mt-2">
    <tr>
        <th>Image</th>
        <th>Link</th>
        <th>Action</th>
    </tr>
    @foreach ($all_logo as $item)
        <tr>
            <td><img  width="150px"  src="/assets/uploads_logo/{{$item->thumbnail}}" alt=""></td>
            <td><a target="_blank" href="{{$item->link}}">{{$item->link}}</a></td>
            <td>
                <a href="/admin/logoClient/{{$item->id}}"><button class="btn-primary">Select</button></a>
                <button class="btn-danger" onclick="delete_logo_client({{$item->id}})" type="button">Delete</button>
            </td>
        </tr>
    @endforeach
    

  </table>
@endsection