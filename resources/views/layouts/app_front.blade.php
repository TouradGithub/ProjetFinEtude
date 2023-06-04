@php

@endphp
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/cust-fonts.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/fontawsome.min.css">
    <link rel="stylesheet" type="text/css" href="https://nafezly.com/css/responsive-font.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <style type="text/css">
        *{
          direction: rtl;
          text-decoration: none!important;
        }
        p{
          display: inline-block;

        }
        .main-box-styles {
            background: #fff;
            width: 100%;
            box-shadow: 0px 0px 10px #ddd;
        }
        .menu-link.active .menu-div{
            background: #2196f3!important;
            color: #fff!important;
        }
        .menu-link:not(.active):hover .menu-div{
          background:  #18D535!important;
        }
        .row{
          margin: 0px;
        }
        .main{
          opacity: 0;
          min-height: 60vh;
        }
        .optimize-fonts *{
          font-family: 'naskh',sans-serif!important;
        }
        .optimize-fonts * {
          line-height: 1.9;
        }
        .optimize-fonts img{
          cursor: pointer;
          text-align: center!important;
          display: inline-block;
        }

        .optimize-fonts blockquote ,.optimize-fonts blockquote *{
          text-align: center;
        }

        .optimize-fonts a{
          color: #2196f3;
        }
        .optimize-fonts a.btn{
          color: #fff;
        }
        .optimize-fonts ,
        .optimize-fonts h1,
        .optimize-fonts h2,
        .optimize-fonts h3,
        .optimize-fonts h4,
        .optimize-fonts h5,
        .optimize-fonts h6,
        .optimize-fonts h1 *,
        .optimize-fonts h2 *,
        .optimize-fonts h3 *,
        .optimize-fonts h4 *,
        .optimize-fonts h5 *,
        .optimize-fonts h6 *{
          font-family: 'kufi-arabic',sans-serif!important;
        }
        a{
          color: #333;
        }
        .fancybox__container , .fancybox__container *{
          direction: ltr;
        }
    </style>
  </head>
  <body>

    @if($errors->any())
    <div class="col-12" style="position: absolute;top: 80px;left: 10px;">
        {!! implode('', $errors->all('<div class="alert-click-hide alert alert-danger alert alert-danger col-9 col-xl-3 rounded-0 mb-1" style="position: fixed!important;z-index: 11;opacity:.9;left:25px;cursor:pointer;" onclick="$(this).fadeOut();">:message</div>')) !!}
      </div>
    @endif


    <div class="col-12 p-0">
      <div class="container px-2 py-5 p-md-5 my-0 my-md-5 ">



        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('frontlogin') }}">Login </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('frontregister') }}">SinUp</a>
                </li>

              </ul>

            </div>
          </nav>


        <div class="col-12 p-0 text-center">
          <img src="" style="width:150px;border-radius:50%;" class="d-inline-block">
        </div>
        <div class="col-12 py-3">
          <h1 class="font-5  text-center">Les fammes</h1>
            <div class="col-12 px-0 d-flex justify-content-center pt-2 pb-2" style="direction: ltr;flex-wrap: wrap;">
              {{-- /// --}}
            </div>

            @yield('content')
        </div>
      </div>
    </div>

    <!-- <script src="https://unpkg.com/vue@next"></script> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $('a[href="' + window.location.href.split('?')[0] + '"] div,a[href="' + window.location.href.split('?')[0] + '"],a[href="' + window.location.href + '"] div,a[href="' + window.location.href + '"]').addClass('active');
        setTimeout(function(){
          $('.main').css({'opacity':'1'});
          $('.loading-overlay').fadeOut(200);
        },1200);

        Fancybox.bind("[data-fancybox]", {
          // Your options go here
        });
        Fancybox.bind(".optimize-fonts img", {

        });

    </script>
  </body>
</html>
