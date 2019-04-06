<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/transitions.css">
    <link rel="stylesheet" href="/assets/css/flags.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/prettyPhoto.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/assets/css/scrollbar.css">
    <link rel="stylesheet" href="/assets/css/chartist.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    @yield('styles')
</head>
<body class="tg-home tg-homeone">

<!--************************************
        Wrapper Start
*************************************-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    <header id="tg-header" class="tg-header tg-haslayout">
        <div class="tg-topbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


                        @if(Auth::guest())
                            <ul class="tg-navcurrency">
                                <li><a href="#" data-toggle="modal" data-target="#tg-modalselectcurrency">Register</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#tg-modalpriceconverter">Login</a></li>
                            </ul>
                            @else
                            <div class="dropdown tg-themedropdown tg-userdropdown">
                                <a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
                                    <span class="tg-userdp"><img src="/profilephoto/{{Auth::user()->file}}" style="height: 40px;width: 40px" alt="image description"></span>
                                    <span class="tg-name">Hi! {{Auth::user()->name}}</span>
                                    <span class="tg-role">User</span>
                                </a>
                                <ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="icon-chart-bars"></i>
                                            <span>Insights</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard-profile-setting.html">
                                            <i class="icon-cog"></i>
                                            <span>Profile Settings</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">
                                            <i class="icon-layers"></i>
                                            <span>My Ads</span>
                                        </a>
                                        <ul>
                                            <li><a href="dashboard-myads.html">All Ads</a></li>
                                            <li><a href="dashboard-myads.html">Featured Ads</a></li>
                                            <li><a href="dashboard-myads.html">Active Ads</a></li>
                                            <li><a href="dashboard-myads.html">Inactive Ads</a></li>
                                            <li><a href="dashboard-myads.html">Sold Ads</a></li>
                                            <li><a href="dashboard-myads.html">Expired Ads</a></li>
                                            <li><a href="dashboard-myads.html">Deleted Ads</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="dashboard-postanad.html">
                                            <i class="icon-layers"></i>
                                            <span>Dashboard Post Ad</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">
                                            <i class="icon-envelope"></i>
                                            <span>Offers/Messages</span>
                                        </a>
                                        <ul>
                                            <li><a href="dashboard-offermessages.html">Offer Received</a></li>
                                            <li><a href="dashboard-offermessages.html">Offer Sent</a></li>
                                            <li><a href="dashboard-offermessages.html">Trash</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="dashboard-payments.html">
                                            <i class="icon-cart"></i>
                                            <span>Payments</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard-myfavourites.html">
                                            <i class="icon-heart"></i>
                                            <span>My Favourite</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard-privacy-setting.html">
                                            <i class="icon-star"></i>
                                            <span>Privacy Settings</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-exit"></i>
                                            <span>Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>

                            @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="tg-navigationarea">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <strong class="tg-logo"><a href="index-2.html"><img src="/assets/images/logo.png" alt="company logo here"></a></strong>
                        <a class="tg-btn" href="dashboard-postanad.html">
                            <i class="icon-bookmark"></i>
                            <span>post an ad</span>
                        </a>
                        <nav id="tg-nav" class="tg-nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home V1</a></li>
                                            <li><a href="indexv2.html">Home V2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="javascript:void(0);">Listings</a>
                                        <ul class="sub-menu">
                                            <li><a href="adlistinggrid.html">Ad Grid</a></li>
                                            <li><a href="adlistinglist.html">Ad Listing</a></li>
                                            <li><a href="addetail.html">Listing Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Dashboard</a>
                                        <ul class="sub-menu">
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="dashboard-myads.html">Dashboard My Ads</a></li>
                                            <li><a href="dashboard-myfavourites.html">Dashboard Favorites</a></li>
                                            <li><a href="dashboard-offermessages.html">Dashboard Offer Message</a></li>
                                            <li><a href="dashboard-payments.html">Dashboard Payment</a></li>
                                            <li><a href="dashboard-postanad.html">Dashboard Post Ad</a></li>
                                            <li><a href="dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
                                            <li><a href="dashboard-profile-setting.html">Dashboard Profile Setting</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="aboutus.html">About</a></li>
                                            <li><a href="contactus.html">Contact Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0);">News</a>
                                                <ul class="sub-menu">
                                                    <li><a href="newsgrid.html">News grid</a></li>
                                                    <li><a href="newslist.html">News list</a></li>
                                                    <li><a href="newsdetail.html">News detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="404error.html">404 Error</a></li>
                                            <li><a href="comingsoon.html">Coming Soon</a></li>
                                            <li><a href="packages.html">Packages</a></li>
                                            <li><a href="loginsignup.html">Login/Register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
@yield('content')



    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-footerbar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
                        <div class="tg-newsletter">
                            <h2>Signup For Newsletter:</h2>
                            <form class="tg-formtheme tg-formnewsletter">
                                <fieldset>
                                    <i class="icon-envelope"></i>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email here">
                                    <button type="button">Signup Now</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="tg-footerinfo">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
                        <div class="tg-widget tg-widgetsearchbylocations">
                            <div class="tg-widgettitle">
                                <h3>Search By Locations:</h3>
                            </div>
                            <div class="tg-widgetcontent">
                                <ul>
                                    <li><a href="javascript:void(0);">-  Aberdeen</a></li>
                                    <li><a href="javascript:void(0);">-  Armagh</a></li>
                                    <li><a href="javascript:void(0);">-  Bangor</a></li>
                                    <li><a href="javascript:void(0);">-  Bath</a></li>
                                    <li><a href="javascript:void(0);">-  Belfast</a></li>
                                    <li><a href="javascript:void(0);">-  Birmingham</a></li>
                                    <li><a href="javascript:void(0);">-  Bradford</a></li>
                                    <li><a href="javascript:void(0);">-  Brighton and Hove</a></li>
                                    <li><a href="javascript:void(0);">-  Bristol</a></li>
                                    <li><a href="javascript:void(0);">-  Cambridge</a></li>
                                </ul>
                                <ul>
                                    <li><a href="javascript:void(0);">-  Canterbury</a></li>
                                    <li><a href="javascript:void(0);">-  Cardiff</a></li>
                                    <li><a href="javascript:void(0);">-  Carlisle</a></li>
                                    <li><a href="javascript:void(0);">-  Chester</a></li>
                                    <li><a href="javascript:void(0);">-  Chichester</a></li>
                                    <li><a href="javascript:void(0);">-  City of London</a></li>
                                    <li><a href="javascript:void(0);">-  Coventry</a></li>
                                    <li><a href="javascript:void(0);">-  Derby</a></li>
                                    <li><a href="javascript:void(0);">-  Dundee</a></li>
                                    <li><a href="javascript:void(0);">View All</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="tg-widget tg-widgettext">
                            <div class="tg-widgetcontent">
                                <strong class="tg-logo"><a href="javascript:void(0);"><img src="/assets/images/logof.png" alt="image description"></a></strong>
                                <div class="tg-description">
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua anii ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo aute irurel in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                                </div>
                                <div class="tg-followus">
                                    <strong>Follow Us:</strong>
                                    <ul class="tg-socialicons">
                                        <li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                    <ul class="tg-appsnav">
                                        <li><a href="javascript:void(0);"><img src="/assets/images/apps-01.png" alt="image description"></a></li>
                                        <li><a href="javascript:void(0);"><img src="/assets/images/apps-02.png" alt="image description"></a></li>
                                    </ul>
                                </div>
                                <nav class="tg-footernav">
                                    <ul>
                                        <li><a href="javascript:void(0);">Listing Policy</a></li>
                                        <li><a href="javascript:void(0);">Terms of Use</a></li>
                                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                        <li><a href="javascript:void(0);">Mobiles Policy</a></li>
                                        <li><a href="javascript:void(0);">Change Currency</a></li>
                                        <li><a href="javascript:void(0);">Sitemap</a></li>
                                        <li><a href="javascript:void(0);">News</a></li>
                                    </ul>
                                </nav>
                                <span class="tg-copyright">2017 All Rights Reserved &copy; Classified PRO</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Theme Modal Box Start
*************************************-->
<div id="tg-modalselectcurrency" class="modal fade tg-thememodal tg-modalselectcurrency" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Change Currency</strong>
            </div>
            <form class="tg-formtheme tg-formselectcurency">
                <fieldset>
                    <div class="form-group">
                        <div id="tg-flagstrapone" class="tg-flagstrap" data-input-name="country"></div>
                    </div>
                    <div class="form-group">
                        <button class="tg-btn" type="button">Change Now</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<div id="tg-modalpriceconverter" class="modal fade tg-thememodal tg-modalpriceconverter" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">

            </div>
            <div class="tg-logingarea">
                <h2>Login Now</h2>
                <form class="tg-formtheme tg-formloging" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <fieldset>


                        <div class="form-group row">


                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="E-mail"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">


                            <div class="col-md-12">
                                <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Theme Modal Box End
*************************************-->
<script src="/assets/js/vendor/jquery-library.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="/assets/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
<script src="JS/responsivethumbnailgallery.html"></script>
<script src="/assets/js/jquery.flagstrap.min.js"></script>
<script src="/assets/js/backgroundstretch.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.vide.min.js"></script>
<script src="/assets/js/jquery.collapse.js"></script>
<script src="/assets/js/scrollbar.min.js"></script>
<script src="JS/chartist.min.html"></script>
<script src="/assets/js/prettyPhoto.js"></script>
<script src="/assets/js/jquery-ui.js"></script>
<script src="/assets/js/countTo.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/gmap3.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>