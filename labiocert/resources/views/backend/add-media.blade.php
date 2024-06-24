@extends('backend.master')
@section('content')

<form  action="/admin/media/submit" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="col-6">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <small class="text-danger">Double tap to remove image</small><br>
            <small>First Image is Thumbnail</small>
        
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input">
                <div class="input-child">
                    
                    <input type="text" name="state" class="d-none" id="state">
                </div>
            </div>
        </div>
    </div>
   

<div class="add-image">
    <button type="button" onclick="append_image()"><i class="fa-regular fa-image"></i> </button>
    <button type="button" onclick="append_textbox()"><i class="fa-solid fa-pen-to-square"></i></button>
    <button type="submit">Submit</button>
   
</div>
 
</form>

@endsection