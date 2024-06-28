@extends('backend.master')
@section('content')

<form  action="/admin/media/submit" method="POST" enctype="multipart/form-data" onsubmit="validation(event)">
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
        <div class="col-6">
            <div class="col-6">
                <label for="category">Category</label>
                <select name="category" class="form-control" id="category">
                    <option value="1">News</option>
                    <option value="2">Internal</option>
                    <option value="3">Social</option>
                    <option value="4">Science</option>
                    <option value="5"></option>
                </select>
            </div>
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
    <button type="button" onclick="append_image(0)"><i class="fa-regular fa-image"></i> </button>
    <button type="button" onclick="append_textbox(0)"><i class="fa-solid fa-pen-to-square"></i></button>
    <button type="submit">Submit</button>
   
</div>
 
</form>

@endsection