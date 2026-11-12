@extends('backend.master')
@section('title')
    Dashboard Admin
@endsection

@section('content')
@if(Session::has('sucess'))
<div class="message-box  sucess">
    <span>{{Session::get('sucess')}}</span>
</div>
@elseif(Session::has('fail'))
<div class="message-box fail">
    <span>{{Session::get('fail')}}</span>

</div>

@endif

@endsection
