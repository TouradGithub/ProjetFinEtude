@php

@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('frontassets/assets/images/logo/favicon-icon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontassets/assets/images/logo/favicon-icon.png')}}" type="image/x-icon">
    <title>front </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/select2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/range-slider.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('frontassets/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontassets/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{asset('frontassets/assets/images/logo/logo.png')}} alt=""></a></div>

          </div>
          <div class="left-side-header col ps-0 d-none d-md-block">

          </div>
          <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
            <ul class="nav-menus">



              <li class="onhover-dropdown">

                </li>
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <g>
                        <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg></a></li>
              <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                <div class="media profile-media">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg>
                </div>
                @auth
                <ul class="profile-dropdown onhover-show-div">
                    <li><a href="{{ route('front.logout') }}"><i data-feather="log-in"> </i><span> Deconexion</span></a></li>
                </ul>
                @endauth

              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">slkflk</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>

        <div class="page-body">
          <div class="container-fluid">
            <br><br><br><br>
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Femmes</h3>
                </div>

              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid product-wrapper">
            <div class="product-grid">
              <div class="feature-products">
                <div class="row m-b-10">
                  <div class="col-md-3 col-sm-2 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a></div>
                    <div class="d-none-productlist filter-toggle">
                      <h6 class="mb-0">Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6>
                    </div>
                    <div class="grid-options d-inline-block">
                      <ul>
                        <li><a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                        <li><a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                        <li><a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                        <li><a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-10 text-end">
                    <div class="select2-drpdwn-product select-options d-inline-block">

                    </div>
                  </div>
                </div>


                        <div class="row">
                  <div class="col-md-3">

                        <div class="row">
                            <div class="col-md-3">

                    <div class="pro-filter-sec">
                      <div class="product-sidebar">
                        <div class="filter-section">
                            <div class="card">
                                <div class="card-header">
                                  <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                                </div>
                                <form action="{{ route('front.filter') }}" method="POST">
                                    @csrf
                                <div class="left-filter">
                                  <div class="card-body filter-cards-view animate-chk">
                                    <div class="product-filter">
                                      <div class="checkbox-animated mt-0">
                                        <label class="d-block" for="edo-ani5">
                                          <input class="checkbox_animated" id="edo-ani5" name="enfant" value="1" type="checkbox" data-original-title="" title="">Enfant
                                        </label>
                                        <label class="d-block" for="edo-ani6">
                                          <input class="checkbox_animated" id="edo-ani6" name="disponible" value="1"  type="checkbox" data-original-title="" title="">Disponible
                                        </label>
                                        <br>
                                        <p>Etat:</p>
                                          <input type="radio" id="css" name="etat" value="12H">
                                          <label for="html">12H</label>

                                          <input type="radio" id="javascript" name="etat" value="24H">
                                          <label for="css">24H</label>
                                        <br>

                                        <p> language:</p>
                                         <input type="radio" id="html" name="lang" value="english">
                                          <label for="html">english</label><br>
                                          <input type="radio" id="css" name="lang" value="francais">
                                          <label for="css">francais</label><br>
                                          <input type="radio" id="javascript" name="lang" value="arabic">
                                          <label for="javascript">arabic</label>

                                        <br><br>
                                        <div class="product-filter pb-0">
                                            <h6 class="f-w-600">Price</h6>
                                            <input id="u-range-03" type="text">
                                            <h6 class="f-w-600">New Products</h6>
                                          </div>
                                      </div>
                                    </div>

                               </div>
                                </div>
                              </div>
                        </div>
                      </div>
                      <div class="product-search">

                          <div class="form-group m-0">
                          <button type="submit" class="btn btn-success">filter</button>
                            </div>
                            {{-- <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i> --}}
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-wrapper-grid">
                <div class="row">
                    @foreach ($femmes as $item)
                    <div class="col-xl-3 col-sm-6 xl-4">
                        <div class="card">
                        <div class="product-box">
                            <div class="product-img">
                            <img class="img" src="{{ asset('fammes/'.$item->image) }}" style="width: 100%;height: 100%;" alt="">
                            <div class="product-hover">
                                <ul>
                                    @if ($item->disponible==1 )
                                       <li><a href="{{ route('front.demande',$item->id) }}"><i class="icon-plus"></i></a></li>
                                    @endif
                                <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16">
                                    <i class="icon-eye"></i></a>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter16">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <div class="product-box row">
                                    <div class="product-img col-lg-6"><img class="img-fluid" src="{{ asset('fammes/'.$item->image) }}" alt=""></div>
                                    <div class="product-details col-lg-6 text-start"><a href="product-page.html">
                                        <h4>{{ $item->nom }}                                    </h4></a>

                                        <div class="product-view">
                                        <h6 class="f-w-600">
                                            Disponible:  @if ($item->disponible==1)
                                            Oui
                                        @else
                                            No
                                        @endif
                                        </h6>
                                        </div>
                                        <div class="product-size">
                                            {{-- <ul>
                                                <li>
                                                Salaire: {{ $item->salaire }}
                                                </li>
                                                <li>
                                                enfant:
                                                    @if ($item->enfant==1)
                                                    Oui
                                                @else
                                                    No
                                                @endif

                                                </li>
                                                <li>
                                                    etat:
                                                    {{ $item->etat }}
                                                </li>
                                            </ul>
                                            <ul>
                                                <li>
                                                Age: {{ $item->age }}
                                                </li>
                                                <li>
                                                enfant:
                                                {{ $item->lang }}



                                                </li>
                                                <li>
                                                    adresse:
                                                    {{ $item->adresse }}
                                                </li>
                                            </ul> --}}
                                            <table >
                                                <tbody>
                                                    <tr>
                                                        <th>Information</th>
                                                        <th>Femme domicile</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Salaire</td>
                                                        <td>{{ $item->salaire }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bébé</td>
                                                        <td>
                                                            @if ($item->enfant == 1)
                                                                Oui
                                                            @else
                                                                No
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Etat</td>
                                                        <td>{{ $item->etat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td>{{ $item->age }}</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Adresse</td>
                                                        <td>{{ $item->addrsse }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>

                                    </div>
                                    </div>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="product-details">

                                <a href="product-page.html">

                                <h4>{{ $item->nom }}                                       </h4></a>
                            <p>Disponible:  @if ($item->disponible==1)
                                Oui
                            @else
                                No
                            @endif
                            </p>

                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach







                </div>
              </div>

            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Nouakchott Sud     37441384</p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('frontassets/assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('frontassets/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('frontassets/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- scrollbar js-->
    <script src="{{asset('frontassets/assets/js/scrollbar/simplebar.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/scrollbar/custom.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('frontassets/assets/js/config.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('frontassets/assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/range-slider/rangeslider-script.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/touchspin/vendors.min.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/touchspin/touchspin.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/touchspin/input-groups.min.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/select2/select2-custom.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/product-tab.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('frontassets/assets/js/script.js')}}"></script>
    <script src="{{asset('frontassets/assets/js/theme-customizer/customizer.js')}}"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
