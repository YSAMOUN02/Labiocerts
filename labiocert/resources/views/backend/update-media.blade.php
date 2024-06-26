@extends('backend.master')
@section('content')
@php
$child = 0;   
@endphp
<form  action="/admin/media/update/submit" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-6">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{$media_header->title}}" required>
        </div>
        <div class="col-6">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
                @if($media_header->status == 0)
                <option value="0">Inactive</option>
                <option value="1">Active</option>
                @else
                <option value="1">Active</option>
                <option value="0">Inactive</option>
                @endif
        
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label for="">Publish Date</label>
            <input type="datetime-local" name="created_at" value="{{$media_header->created_at}}" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <small class="text-danger">Click Image to change Image. Double tap to remove image</small><br>
            <small>First Image is Thumbnail</small>
        
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="input">
                <div class="input-child">
                 
                
                    @foreach($mergedData as $item)

                        @if($item->type == 'text')
                            {{-- TEXT --}}
                            <div class="textBox{{$item->order}}" style="position: relative !important;">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <textarea   name="input{{$item->order}}" class="textarea" id="input{{$item->order}}" cols="30" rows="10">{{$item->data->description}}</textarea>
                                        <button class="clear-text-box" type="button" onclick="clearTextbox('textBox{{$item->order}}')"><i class="fa-solid fa-minus"></i></button>
                                    </div>
                                </div>
                            </div>
                       
                        @elseif($item->type == 'image')
              
                            {{-- Image --}}
                            <div class="inputBox{{$item->order}}">
                                <div class="row mt-3">
                                    <div class="col-6">
                                        {{-- <input type="file"  name="input_class{{$item->order}}" value="{{$item->data->name}}" onchange="loadFileDynamic(event,'output_id{{$item->order}}')" id="input_class{{$item->order}}" class="form-control d-none"> --}}
                                        <input type="text" value="{{$item->data->name}}" name="input{{$item->order}}"  id="input_class{{$item->order}}" class="d-none">
                                    </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 thumbnail">
                                            <img width="100%"  src="/assets/uploads/{{$item->data->name}}" accept="image/*" ondblclick="clearImageThumbnail('input_class{{$item->order}}' , 'input_class{{$item->order}}','inputBox{{$item->order}}')" id="output_id{{$item->order}}" alt="">
                                          
                                        </div>
                                    </div>
                            
                                </div>
                                
                        @endif
                        @php
                            $child ++;   
                        @endphp
                    @endforeach
                        </div>
                    <input type="text" name="state" value="{{$child}}" class="d-none" id="state">
                </div>
            </div>
        </div>
    </div>
   

<div class="add-image">
    <button type="button" onclick="append_image({{$child}})"><i class="fa-regular fa-image"></i> </button>
    <button type="button" onclick="append_textbox({{$child}})"><i class="fa-solid fa-pen-to-square"></i></button>
    <button type="submit">Submit</button>
   
</div>
 
</form>

@endsection