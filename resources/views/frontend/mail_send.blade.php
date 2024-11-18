<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- LINK CSS  --}}
    <link rel="stylesheet" href="{{URL('assets/css/style.css')}}">

    {{-- ICON WEBSITE --}}
    <link
    rel="shortcut icon"
    href="/assets/image_backend/download (1).png"
    type="image/x-icon"
  />
    <title>Labiocert</title>
    <style>
        *{
            margin: 0;
            box-sizing: border-box;
        }
        .main_mail{
            width: 100%

        }

    </style>
</head>
<body>

    <main class="main_mail">
        <img width="250px" src="http://127.0.0.1:8000/assets/image/img1.jpg" alt="">
        <h3>This is the mail from Labiocert.</h3><br>
        <h4>THe System has recieved quote request from client.</h4><br>
        <p>Please Check in your System </p><br>
        <p>From Email : {{$mailData['emailAddress']}}</p><br>
        <p>Client Name : {{$mailData['fullName']}}</p>
        <p>Company : {{$mailData['companyName']}}</p>
        <p>Server No: {{$mailData['industrySelector']}}</p>
        <p>Phone : {{$mailData['contactNumber']}}</p>
        <p>Client Name : {{$mailData['fullName']}}</p>
        <p>Description</p>
        <textarea name="" id="" cols="30" rows="10">{{$mailData['inquiry']}}</textarea>
    </main>

    
</body>
</html>