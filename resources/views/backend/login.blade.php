<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


        <link
        rel="shortcut icon"
        href="{{URL('assets/image_backend/download (1).png')}}"
        type="image/x-icon"
    />


    <link rel="stylesheet" href="{{URL('assets/css/backend.css')}}">
    <title>Labiocer-Login</title>
  </head>
  <body>
    @if(Session::has('sucess'))
    <div class="message-box  sucess">
        <span>{{Session::get('sucess')}}</span>
    </div>
@elseif(Session::has('fail'))
    <div class="message-box fail">
        <span>{{Session::get('fail')}}</span>
    
    </div>

@endif

    <!-- Login Bar -->
    <main>
        <div class="container-login">
            <div class="login-bar">
                <img src="/assets/image_backend/Logo-Labiocert.png" alt="">

                <div class="inner-login">
                    <center><Span>Login</Span></center>
                    <form action="/admin/login/submit" method="POST">
                        @csrf
                        <label for="" class="mt-3">Username Or Email</label>
                        <input type="text" name="name_email" class="form-control" placeholder="...">
                        <label for="" class="mt-3">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="***">
                        <small>remember me</small>
                        <input name="remember" type="checkbox">
                        <br>
                        <button>Login</button>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>