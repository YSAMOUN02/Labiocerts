@extends('backend.master')
@section('content')
<form action="/media/category/add/submit" method="post">
    @csrf
    <div class="category-info">
        <div class="row">
         <div class="col-2">
             <label for="">Category Order</label>
             <input type="text" class="form-control" name="no" placeholder="No" autocomplete="off">
         </div>
         <div class="col-6">
            <label for="">Category Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
        </div>
    
            
         <div class="col-4">
            <label for=""></label>
            <select  id="" class="form-control" name="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn-success">Add</button>
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
    
            <a href="">
                <button class="btn-primary">
                    Update
                </button>
            </a>
            <a href="">
                <button class="btn-danger">
                    Delete
                </button>
            </a>
        </td>
 
    </tr>   

    @endforeach
 
</table>
@endsection