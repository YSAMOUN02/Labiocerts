@extends('backend.master')
@section('content')

@if(Session::has('sucess'))
<div class="message-box sucess">
    <span>{{Session::get('sucess')}}</span>
</div>
@elseif(Session::has('fail'))
<div class="message-box fail">
    <span>{{Session::get('fail')}}</span>

</div>

@endif
<!-- alert confirm for user aware -->
<div class="alert-confirm " id="delect_slide">
  <form action="/admin/media/slide/delete/submit" method="POST">
      @csrf
    <span>Are you sure?</span>
    <input type="text" class="d-none" name="id" id="delete_slide_id">
    <div class="alert-co    nfirm-btn mt-3">
      <button type="submit " class="btn-success">Yes</button>
      <button class="btn-danger" type="button" onclick="fade_alert('#delect_slide')">
        No
      </button>
    </div>
  </form>
</div>
<div class="container-slider">
    <div class="slide_tool">
        <div class="d-flex">
          <h2 id="slide_no"> 
      
            Slide No 1
           
      
          </h2>
          <small class="text-danger">Recomend file  400x500px. Allow file ( JPG,PNG,GIF,WEBP ) size <= 1MB</small>
        </div>
    </div>

    <div class="slide-style">
  
        <div id="carouselExampleControls"  class="carousel   " data-bs-ride="carousel">
            <div class="carousel-inner">
              @if (!$slide->isEmpty())
              @foreach ($slide as $key => $item)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                  <img src="/assets/slide_uploads/{{ $item->name }}" class="d-block w-100" alt="Slide {{ $item->id }}">
                </div>
              @endforeach
            @else
              <p>No slides available.</p>
            @endif
       
           
            </div>
            <button onclick="refresh_id(0)" class="carousel-control-prev " style="background-color: rgba(0, 0, 0, 0.285)" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon " aria-hidden="true"></span>
              <span class="visually-hidden ">Previous</span>
            </button>
            <button onclick="refresh_id(1)"   class="carousel-control-next"  style="background-color: rgba(0, 0, 0, 0.285)" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
    </div>
    <div class="slide_tool">
        @if (!$slide->isEmpty())
          <button onclick="delete_value({{$item->id}}, '#delete_slide_id' , '#delect_slide')"><i class="fa-regular fa-trash-can"></i></button>
 
        <button onclick="browse_to_link()">
          <i class="fa-solid fa-pen-to-square"></i>
          <form action="/admin/media/slide/update/submit" id="slide_form" method="post" enctype="multipart/form-data" class="d-none">
            @csrf
            <input type="text" id="slide_id" name="id">
            <input type="file" name="update_thumbnail" id="slide_change" onchange="file_check('#slide_change','#slide_form')" class="d-none">
          </form>
        </button>
        @endif
        <button onclick="add_slide()"> <i class="fa-solid fa-square-plus"></i>
          <form action="/admin/media/slide/submit" id="form_slide_add" method="post" enctype="multipart/form-data" class="d-none">
            @csrf
            <input type="file" name="update_thumbnail" id="slide_change_add" onchange="file_check('#slide_change_add','#form_slide_add')" class="d-none">
          </form>
        </button>
    </div> 
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#carouselExampleControls').carousel({
          interval: false
        });
      });
  
      var array = @json($slide);
      console.log(array);
      var id = array[0].id;
      var temp = 0;
      const length = array.length;
      function refresh_id(i){
        // negative
        if(i == 0){
          temp--;
          if(temp < 0){
            id = array[length-1].id;
            temp = length-1;
       
          }
          else{
            id = array[temp].id;
        
          }
        }
        // positive
        else if(i == 1){
          temp++;
          if(temp > length-1){
            id = array[0].id;
            temp = 0;
      
          }else{

            id = array[temp].id;
          }


        }

        document.querySelector('#slide_no').innerHTML = `<h2>Slide No ${temp+1} </h2>`;
      }
      function browse_to_link(){
        var tt = document.querySelector('#slide_id').value = id;
        // var tt = document.querySelector('#slide_id').value;
        console.log(tt);
        document.querySelector('#slide_change').click();
      
      }
 

      // Add Slide 
      function add_slide(){
        
        document.querySelector('#slide_change_add').click();
      }
  

      function file_check(input_file,form){
       
       var fileName = document.querySelector(input_file).files[0].name;
       var fileSize = document.querySelector(input_file).files[0].size;
 
       var extension = fileName.split('.').pop();
       if(extension == 'jpg'  || extension == 'JPG'  || extension == 'png'|| extension == 'PNG' || extension == 'gif' || extension == 'GIF' || extension == 'webp' || extension == 'WEBP'){
             if (fileSize > 1_048_576) {
               alert("Accept file below 1MB.");
             
             } else {

               document.querySelector(form).submit();
             }

       }
       else{
         alert("File Not Allow. Pleas choose file (JPG, GIF, PNG).");
       }

   
     }
</script>
@endsection