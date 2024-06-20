@extends('backend.master')
@section('content')
<div class="view-servce">
    <div class="category-info">
       <div class="row">
        <div class="col-6">
            <label for="">Service Category Title</label>
            <input type="text" disabled  class="form-control">
        </div>
        <div class="col-6">
            <label for="">Status</label>
            <select name="" id="" class="form-control" disabled>
                <option value="">Active</option>
            </select>
        </div>
       </div>
    </div>

    <div class="category-info">
        <form action="">
            <div class="row">
                <div class="col-2">
                    <label for="">Add Parameter</label>
                    <input type="text" class="form-control" placeholder="No">
                </div>
                <div class="col-4">
                    <label for=""></label>
                    <input type="text" class="form-control" placeholder="Parameter">
                </div>
                <div class="col-3">
                   <label for=""></label>
                   <input type="text" class="form-control" placeholder="Duration Analysis">
               </div>
               <div class="col-3">
                   <label for=""></label>
                   <input type="text" class="form-control" placeholder="Method">
               </div>
               </div>
               <div class="row mt-3">
                   <div class="col-12">
                       <button class="btn-success">Add</button>
                   </div>
                </div>
        </form>
     </div>
    
    <table class="mt-4">
        <tr>
            <th>No</th>
            <th>Parameter</th>
            <th>Duration Analysis</th>
            <th>Method</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Test Parameter</td>
            <td>7Days</td>
            <td>
                NF ISO 7932
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
        <tr>
            <td>2</td>
            <td>Analysis Fees For Food </td>
            <td>30days</td>
            <td>
                ISO 14189
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
        <tr>
            <td>3</td>
            <td>Physico-Chemical Analysis</td>
            <td>8days</td>
            <td>
                ISO/TS 27265
            </td>
            <td>
       
                <a href="">
                    <button class="btn-primary" >
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