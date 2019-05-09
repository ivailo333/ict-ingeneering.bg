<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen"/>
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css"
    />

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Cabin for Title -->
    <link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <!-- Pacifico for Logo   -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script src="js/cookieconsent.js"></script>
</head>

<body>

<!-- BEGAIN PRELOADER -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- END PRELOADER -->
<!-- Start menu area -->
<nav class="menu">
    <a class="toggle-nav" href="#">&#9776;</a>
    <ul class="active">
        <li><a href="/">Начало</a></li>
        <li><a href="/about">За компанията</a></li>
        <li><a href="/services">Услуги и продукти</a></li>
        <li><a href="/prices">Цени</a></li>
        <li><a href="support">Поддръжка</a></li>
        <li><a href="/contact">За контакти</a></li>
    </ul>
</nav>
{{--
<div class="nav-area">
    <a id="menu-btn" href="#"><i class="fa fa-bars"></i></a>
    <nav class="main-nav" id="main-menu">
        <span class="fa fa-remove" id="close"></span>
        <ul class="main-menu">
            <li> <a href="/"><i class="fa fa-home"></i><span>Начало</span></a></li>
            <li><a href="/about"><i class="fa fa-server"></i><span>За компанията</span></a></li>
            <li><a href="/services"><i class="fa fa-hourglass"></i><span>Услуги и продукти</span></a></li>
            <li><a href="/prices"><i class="fa fa-usd"></i><span>Цени</span></a></li>
            <li><a href="/support"><i class="fa fa-certificate"></i><span>Поддръжка</span></a></li>
            <li><a href="/contact"><i class="fa fa-envelope-o"></i><span>За контакти</span></a></li>
        </ul>
    </nav>
</div> --}}
<!-- End menu area -->

<!-- Start header section -->
<header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="images/header_network-bg.jpg" alt="img">

        <div class="overlay">
            <div class="header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-top">
                                <!-- Start logo area -->
                                <div class="logo-area">
                                    <!-- Image based logo -->
                                    <a class="logo" href="/"><img height="110" width="110" src="images/logo.png"
                                                                  alt="logo"></a>
                                    <!-- Text based logo -->
                                    <!-- <a class="logo" href="index.html">App Landy.</a> -->
                                </div>
                                <!-- End logo area -->
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="header-bottom">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="header-bottom-left">
                                            <h1>{{ $text_header }}</h1>

                                            <p>{{ $paragraph }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="header-bottom-right">
                                            <!-- <img src="images/iphone-group1.png" alt="iphone grpup img"> -->
                                            <img src="images/Huawei-PON-Device-SmartAX-MA5623-Optical-Network.png"
                                                 alt="PON_device img" width="650" height="302">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->

@yield('content')

        <!-- Start footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <a href="https://www.facebook.com/%D0%98%D0%9A%D0%A2-%D0%98%D0%BD%D0%B6%D0%B5%D0%BD%D0%B5%D1%80%D0%B8%D0%BD%D0%B3-951560318368585/?modal=admin_todo_tour"
                       target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/iktingenering" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.google.com/webhp?authuser=2" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="https://www.linkedin.com/in/ivailo-halachev-94788b172/" target="_blank"><i
                                class="fa fa-linkedin"></i></a>
                </div>
                <div class="footer-text">
                    <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- Slick Slider -->
<script type="text/javascript" src="js/slick.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="js/wow.js"></script>
<!-- Off-canvas Menu -->
<script src="js/classie.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript">
    document.getElementById('payment_method').style.visibility = "hidden";
</script>
</body>

</html>