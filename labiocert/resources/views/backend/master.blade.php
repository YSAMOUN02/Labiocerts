<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Icon  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/backend.css" />

    <link
      rel="shortcut icon"
      href="/assets/image_backend/download (1).png"
      type="image/x-icon"
    />

    <title>Labiocert -Backend Dashboard</title>
  </head>
  <body>
    <!-- Main aside bar -->
    <main>
      <div class="container-fluid">
        <button id="menu-mobile" onclick="fade_in_nav()">   <i  class="fa-solid fa-bars"></i></button>
     
        <!-- alert confirm for user aware -->
        <div class="alert-confirm">
          <form action="">
            <span>Are you sure?</span>
            <div class="alert-co    nfirm-btn mt-3">
              <button class="btn-success">Yes</button>
              <button class="btn-danger" type="button" onclick="fade_alert()">
                No
              </button>
            </div>
          </form>
        </div>

        <!-- alert confirm for user aware Logout -->
        <div class="alert-confirm-logout" >
            <form action="">
              <span>Are you sure?</span>
              <div class="alert-confirm-btn mt-3">
                <button class="btn-success">Yes</button>
                <button class="btn-danger" type="button" onclick="close_alert_logout()">
                  No
                </button>
              </div>
            </form>
          </div>
        <div class="minimize">
          <button onclick="minimize()">
            <i class="fa-solid fa-compress"></i>
          </button>
        </div>
        <div class="nav">
          <div class="click-left">
            <button onclick="maximize()">
              <i class="fa-solid fa-caret-left"></i>
            </button>
          </div>
          <div class="click-left-mobile">
            <button onclick="fade_nav()">
              <i class="fa-solid fa-caret-left"></i>
            </button>
          </div>
          <div class="logo">
            <img src="/assets/image_backend/Logo-Labiocert.png" alt="" />
          </div>
          <div class="list-nav">
            <ul>
              <li>
                <span class="padded"><a href="/admin">Dashboard</a></span>
              </li> 
              <li>
                <span class="padded"><a href="/admin/service">Service </a></span>
              </li>
              <li>
                <span class="padded"
                  ><a href="/admin/quote/view"
                    >Quote Request
                    <div class="quote_req">1</div></a
                  ></span
                >
              </li>
              <li onclick="drop_down_media()">
                <span class="padded">Media Post</span
                ><i id="media_icon" class="fa-solid fa-caret-down"></i>
                <ul id="media-manage">
                  <li class="fade1">
                    <span class="padded"><a href="">Add Media</a></span>
                  </li>
                  <li class="fade2">
                    <span class="padded"><a href="">View Media</a></span>
                  </li>
                </ul>
              </li>
              <li>
                <span class="padded"><a href="#">Website info</a></span>
              </li>
              <li onclick="drop_down_logo_user()">
                <span class="padded">User Management</span
                ><i id="user-manage_icon" class="fa-solid fa-caret-down"></i>
                <ul id="user-manage">
                  <li class="fade1">
                    <span class="padded"><a href="">Add User</a></span>
                  </li>
                  <li class="fade2">
                    <span class="padded"><a href="">View User</a></span>
                  </li>
                </ul>
              </li>
              <li onclick="drop_down_logo_client()">
                <span class="padded"><a href="/admin/logoClient">Logo Clients</a></span>
              </li>
              <li onclick="drop_down_ads()">
                <span class="padded"><a href="/admin/advertising">Advertising</a></span
                >
              </li>
              <li onclick="alert_logout()"><span class="padded">Logout</span></li>
            </ul>
          </div>
        </div>
        <!-- End Aside Bar -->

        <!-- Main-body-dashbaord -->
        <div class="body">
          <div class="title">
            <span>Dashboard Admin</span>
          </div>
          <div class="body-box">


              @yield('content')
          </div>
        </div>
      </div>
      <!--End Main-body-dashbaord -->
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="{{URL('assets/script_backend.js')}}"></script>
  </body>
</html>
