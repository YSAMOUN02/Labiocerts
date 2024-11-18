@extends('backend.master')
@section('content')

<form action="" method="POST" id="quoteForm"  class="form-container">
    @csrf
    <label class="la-name text-bold" for="fullName" >Full Name * <br></label>
    <input disabled class="in-text" type="text" name="fullName" id="fullName" required value="{{$quote->full_name}}">


    <label class="la-name" for="companyName">Company Name * <br></label>
    <input disabled  class="in-text" type="text" name="companyName" id="companyName" required value="{{$quote->company}}">

    <label class="la-name" for="companyName">Request Date <br></label>
    <input disabled   type="datetime-local" name="companyName" id="companyName" required value="{{$quote->created_at}}">

    <label class="la-name mt-4" for="industrySelector">Company Industry Selector * <br></label>
    <select disabled  class="in-text" name="industrySelector" id="industrySelector" class="industrySelector" required > 
        <option value="{{$quote->service}}">{{$quote->service}}</option>
      
    </select> <br>


    <label class="la-name " for="contactNumber">ContactNumber *<br></label>
    <input disabled class="in-text" type="tel" id="contactNumber" name="contactNumber" required value="{{$quote->phone}}"> <br>


    <label class="la-name" for="emailAddress">Email Address * <br></label>
    <input disabled  class="in-text" type="email" id="emailAddress" name="emailAddress" required value="{{$quote->email}}"><br>


    <label class="la-name" for="inquiry">Inquiry <br></label>
    <textarea disabled  class="in-text" name="inquiry"  id="inquiry" class="inquiry" required >{{$quote->remark}}</textarea><br>
    
    <a href="/admin/quote/view"><button type="button" class="btn btn-danger float_corner"> <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></button></a>

</form>

@endsection

