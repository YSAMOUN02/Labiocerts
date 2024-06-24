@extends('backend.master')
@section('content')
<div class="category-info">

<form action="/admin/service/submit" method="POST">
    @csrf
    <div class="row">
       
     <div class="col-2">
         <label for="id">No</label>
         <input type="text" name="no" class="form-control" placeholder="No">
     </div>
     <div class="col-8">
         <label for="service">Service</label>
         <input type="text" name="service" id="service" class="form-control" placeholder="service">
     </div>
  
   
     <div class="col-2">
        <label for="status"></label>
        <select name="status" id="status" class="form-control">
            <option selected value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>

    </div>

    <div class="row">
        <div class="col-12">
            <input type="text" name="reference" class="form-control" placeholder="Reference" >

        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <button type="submit" class="btn-success" >Add</button>
        </div>
     </div>
 </div>
   
</form>
<div class="view-servce">
<table class="mt-4">
   <tr>
       <th>No</th>
       <th>Service Title</th>
       <th>Reference</th>
       <th>Status</th>
       <th>Action</th>
   </tr>
   <!-- <tr>
       <td>1</td>
       <td>Pharmaceutical Testing</td>
       <td></td>
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
       <td></td>
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
   </tr> -->
   <tr>
       <!-- <td>3</td>
       <td>Water and Wastewater Testing</td>
       <td></td>
       <td>
           <div class="active">Active</div>
       </td> -->
       <!-- <td>
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
       </td> -->
    
   </tr>
   <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->title }}</td>
                <td>{{ $service->reference }}</td>
                <td>{{ $service->status }}</td>
                <td>
                <a href="/admin/service/category">
               <button class="btn-primary">
                   Category
               </button>
                </a>
               
                    <!-- Update Button -->
                    <form action="/admin/service/{{ $service->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary update-btn">Update</button>
                    </form>

                    <!-- Update Form (Initially hidden) -->
                    <form class="update-form" action="/admin/service" method="POST" style="display: none;">
                        @csrf
                        @method('PUT')
                        <input type="text" name="title" value="{{ $service->title }}" required>
                        <input type="text" name="reference" value="{{ $service->reference }}" required>
                        <select name="status" required>
                            <option value="Active" {{ $service->status == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Inactive" {{ $service->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary cancel-btn">Cancel</button>
                    </form>

                    <!-- Delete Form -->
                    <form action="/admin/service/{{ $service->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?');">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
</table>

</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const updateButtons = document.querySelectorAll('.update-btn');
    const cancelButtons = document.querySelectorAll('.cancel-btn');

    updateButtons.forEach(button => {
        button.addEventListener('click', function() {
            const updateForm = this.closest('td').querySelector('.update-form');
            updateForm.style.display = 'block';
            this.style.display = 'none';
        });
    });

    cancelButtons.forEach(button => {
        button.addEventListener('click', function() {
            const updateForm = this.closest('.update-form');
            updateForm.style.display = 'none';
            updateForm.closest('td').querySelector('.update-btn').style.display = 'inline';
        });
    });
});
</script>
@endsection
