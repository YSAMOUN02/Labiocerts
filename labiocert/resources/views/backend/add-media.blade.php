@extends('backend.master')
@section('content')

<form  action="/admin/media/submit" method="POST">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="col-6">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <label for="">Thumbnail</label>
        <div class="col-6">
            <input type="file" name="file1" onchange="loadFile3(event)" id="clearimage3" class="form-control">
        </div>
        <div class="col-6">
            <button type="button" onclick="clearimagethumbnail()" class="trash-button">Clear Thumbnail<i  class="fa-solid fa-trash"></i></button>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-6 thumbnail">
            <img width="100%"  src="" id="output3" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <textarea class="textarea" name="" id="" rows="4"></textarea>
        </div>
    </div>
    <button class="btn btn-success" type="submit">Submit</button>
</form>
@endsection