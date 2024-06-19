@extends('backend.master')
@section('content')
<div class="category-info">
    <div class="row">
     <div class="col-2">
         <label for="">Service Category</label>
         <input type="text" class="form-control" placeholder="No">
     </div>
     <div class="col-8">
         <label for=""></label>
         <input type="text" class="form-control" placeholder="Service Category">
     </div>
     <div class="col-2">
        <label for=""></label>
        <select name="" id="" class="form-control">
            <option value="">Active</option>
            <option value="">Inactive</option>
        </select>
    </div>

    </div>
    <div class="row mt-3">
        <div class="col-12">
            <button class="btn-success">Add</button>
        </div>
     </div>
 </div>
<div class="view-servce">
<table class="mt-4">
   <tr>
       <th>No</th>
       <th>Service Title</th>
       <th>Status</th>
       <th>Action</th>
   </tr>
   <tr>
       <td>1</td>
       <td>Pharmaceutical Testing</td>
       <td>
           <div class="active">Active</div>
       </td>
       <td>
           <a href="/admin/service/category">
               <button class="btn-primary">
                   Category
               </button>
           </a>
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
   <tr>
       <td>2</td>
       <td>Food and Feed Testing</td>
       <td>
           <div class="inactive">Inactive</div>
       </td>
       <td>
           <a href="/admin/service/category">
               <button class="btn-primary">
                   Category
               </button>
           </a>
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
   <tr>
       <td>3</td>
       <td>Water and Wastewater Testing</td>
       <td>
           <div class="active">Active</div>
       </td>
       <td>
           <a href="/admin/service/category">
               <button class="btn-primary">
                   Category
               </button>
           </a>
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
</table>

</div>
@endsection