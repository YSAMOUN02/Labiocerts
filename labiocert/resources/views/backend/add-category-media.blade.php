@extends('backend.master')
@section('content')

        @if(Session::has('sucess'))
            <div class="message-box  sucess">
                <span>{{Session::get('sucess')}}</span>
            </div>
        @elseif(Session::has('fail'))
            <div class="message-box fail">
                <span>{{Session::get('fail')}}</span>
            
            </div>
        
        @endif
        

       <!-- alert confirm for user aware -->
       <div class="alert-confirm " id="delect_category">
        <form action="/admin/media/category/delete/submit" method="POST">
            @csrf
          <span>Are you sure?</span>
          <input type="text" class="d-none" name="id" id="category_id">
          <div class="alert-co    nfirm-btn mt-3">
            <button type="submit " class="btn-success">Yes</button>
            <button class="btn-danger" type="button" onclick="fade_alert('#delect_category')">
              No
            </button>
          </div>
        </form>
      </div>
<form action="/admin/media/category/add/submit" method="post">
    @csrf
    <div class="category-info">
        <div class="row">
         <div class="col-2">
             <label for="">Category Order</label>
             @if(!empty($update_preview))
                <input type="number" class="form-control" value="{{$update_preview[0]->order}}" name="no" placeholder="No" autocomplete="off">
                <input type="text" class="d-none" name="id" value="{{$update_preview[0]->id}}">
            @else
                @if(!empty($category))
                    @php
                        $count_record = 0;
                        $count_record = count($category);
                    @endphp
                        @if($count_record != 0)
                          <input type="number" class="form-control" value="{{$count_record+1}}" name="no" placeholder="No" autocomplete="off">
                        @else
                          <input type="number" class="form-control" value="1" name="no" placeholder="No" autocomplete="off">
                        @endif
                @endif
              
             @endif
         
         </div>
         <div class="col-6">
            <label for="">Category Name</label>
            @if(!empty($update_preview))
                <input type="text" class="form-control" name="name" value= "{{$update_preview[0]->category_name}}" placeholder="Name" autocomplete="off">
            @else
                <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
            @endif
   
        </div>
    
            
         <div class="col-4">
            <label for=""></label>
            @if(!empty($update_preview))
                <select class="form-control" name="status">
                    @if($update_preview[0]->status == 1)
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    @else
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    @endif
                </select>
            @else
                <select  id="" class="form-control" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            @endif

          
        </div>
    
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" name="action"  value="add" class="btn-success">Add</button>
                @if(!empty($update_preview))
                <button type="submit" name="action" value="update" class="btn-primary">Update</button>
                @endif
            </div>
         </div>
     </div>


</form>

<table class="mt-4">
   <tr>
    
       <th>Order</th>
       <th>Category Name</th>
       <th>Status</th>
       <th>Action</th>
   </tr>

    @foreach ($category as $item)
    <tr>
  
        <td>{{$item->order}}</td>
        <td>{{$item->category_name}}</td>
        <td>
            @if($item->status == 0)
                <div class="inactive">Inactive</div>
            @else
                <div class="active">Active</div>
            @endif
            
        </td>
        <td>
    
            <a href="/admin/media/category/id={{$item->id}}">
                <button class="btn-primary">
                    Select
                </button>
            </a>
        
                <button type="button" onclick="delete_value({{$item->id}} ,'#category_id', '#delect_category' )" class="btn-danger btn-delete-category" >
                    Delete
                </button>
    
        </td>
 
    </tr>   

    @endforeach
 
</table>

@endsection