
<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('asset/user/img/fahaha.ico')}}">
    <!-- Font awesome -->
    <link href="{{asset('asset/user')}}/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('asset/user')}}/css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('asset/user')}}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{url('asset/user')}}/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{url('asset/user')}}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{url('asset/user')}}/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{{url('asset/user')}}/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="{{url('asset/user')}}/css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('asset/user')}}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('asset/user')}}/css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body style="background-color: #F0F0F0">
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>
    <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header" style="background-color: white">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container" style="width: 100%">
        <div class="row">
          <div class="col-md-12" style="padding: 0">
            <div class="aa-header-top-area">

                <img width="100%" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2023/Hoisach_mainbanner_Header_1263x60.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <img src="{{asset('asset/user/img/fahaha.png')}}" alt="" width="200px" style="cursor: pointer" onclick="location.href= '/' ">

              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox" style="display: flex">


                <a class="aa-cart-link" href="#">
                    <span class="fa fa-shopping-basket"></span>
                    <span class="aa-cart-title">Giỏ hàng</span>
                    <span class="aa-cart-notify">2</span>
                  </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{asset('asset/user')}}/img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{asset('asset/user')}}/img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                </div>
              </div>
              <div class="aa-user">
                <a class="aa-cart-link" data-toggle="modal" data-target="#login-modal" href="" >
                    <span class="fa fa-solid fa-user"></span>
                    <span class="aa-cart-title">Đăng nhập</span>
                </a>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="{{url('product/search')}}" method="post">
                    @csrf
                  <input type="text" name="search" id="" placeholder="Bạn muốn tìm sách gì">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>


              <!-- / search box -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">


            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>


