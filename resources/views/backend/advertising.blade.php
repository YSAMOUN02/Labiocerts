@extends('backend.master')
@section('content')
<div class="category-info">
    <form action="">
        <div class="row">
            <div class="col-6">
                <label for="">Advertising</label>
                <input type="file" accept="image/*" onchange="loadFile2(event)" class="form-control">
            </div>
            <div class="col-6">
                <label for="">Link</label>
                <input type="text" class="form-control">
            </div>
            
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <button class="btn-success">Add</button>
            </div>
         </div>
      </div>
    </form>
  <div class="preview-logo mt-4">
    <small class="text-danger">Recomend Imag for web size 200x200</small>
    <img width="200px" height="200px" style="object-fit: contain;" alt="Preview File" id="output2"/>
  </div>
  <table class="mt-2">
    <tr>
        <th>Image</th>
        <th>Link</th>
        <th>Viewer</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><img width="200px" height="150px" style="object-fit: contain;" src="/public/assets/image/allimg2.jpg" alt=""></td>
        <td><a href="">https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded</a></td>
        <td>52</td>
        <td>
            <a href="#"><button class="btn-primary">Update</button></a>
            <a href="#"><button class="btn-danger">Delete</button></a>
        </td>
    </tr>
    <tr>
        <td><img width="200px" height="150px" style="object-fit: contain;" src="/public/assets/image/allimg2.jpg" alt=""></td>
        <td><a href="">https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded</a></td>
        <td>64</td>
        <td>
            <a href="#"><button class="btn-primary">Update</button></a>
            <a href="#"><button class="btn-danger">Delete</button></a>
        </td>
    </tr>
    <tr>
        <td><img width="200px" height="150px" style="object-fit: contain;" src="/public/assets/image/allimg2.jpg" alt=""></td>
        <td><a href="">https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded</a></td>
        <td>163</td>
        <td>
            <a href="#"><button class="btn-primary">Update</button></a>
            <a href="#"><button class="btn-danger">Delete</button></a>
        </td>
    </tr>
  </table>
</div>

@endsection