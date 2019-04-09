<!doctype html>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="/assets/css/dashboard.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link rel="stylesheet" href="/assets/css/dbresponsive.css">
    <script src="/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

    <header id="tg-dashboardheader" class="tg-dashboardheader tg-haslayout">
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
                    <li>
                        <a href="/frontend">Home</a>

                    </li>

                    <li class="menu-item-has-children">
                        <a href="/userdashboard">Dashboard</a>
                        <ul class="sub-menu">
                            <li><a href="/userdashboard">Dashboard</a></li>
                            <li><a href="/userallads">Dashboard My Ads</a></li>
                            <li><a href="#">Dashboard Favorites</a></li>
                            <li><a href="dashboard-offermessages.html">Dashboard Message</a></li>

                            <li><a href="/createpost">Dashboard Post Ad</a></li>
                            <li><a href="dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
                            <li><a href="/profilesetting">Dashboard Profile Setting</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="javascript:void(0);">News/Event Details</a>
                        <ul class="sub-menu">
                            <li><a href="aboutus.html"></a></li>
                            <li><a href="contactus.html"></a></li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">News</a>
                               {{-- <ul class="sub-menu">
                                    <li><a href="newsgrid.html">News grid</a></li>
                                    <li><a href="newslist.html">News list</a></li>
                                    <li><a href="newsdetail.html">News detail</a></li>
                                </ul>--}}
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="tg-rghtbox">
            <a class="tg-btn" href="/createpost">
                <i class="icon-bookmark"></i>
                <span>post an ad</span>
            </a>
            <div class="dropdown tg-themedropdown tg-notification">
                <button class="tg-btndropdown" id="tg-notificationdropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-alarm"></i>
                </button>
                <ul class="dropdown-menu tg-dropdownmenu" aria-labelledby="tg-notificationdropdown">
                    <li><p>Notifications will be added here.</p></li>
                    <li><p>Notifications will be added here.</p></li>
                    <li><p>Notifications will be added here.</p></li>
                    <li><p>Notifications will be added here.</p></li>
                    <li><p>Notifications will be added here.</p></li>
                    <li><p>Notifications will be added here.</p></li>
                </ul>
            </div>
        </div>
        <div id="tg-sidebarwrapper" class="tg-sidebarwrapper">
				<span id="tg-btnmenutoggle" class="tg-btnmenutoggle">
					<i class="fa fa-angle-left"></i>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="67" viewBox="0 0 20 67">
						<metadata>

						</metadata>
						<path id="bg" class="cls-1" d="M20,27.652V39.4C20,52.007,0,54.728,0,67.265,0,106.515.026-39.528,0-.216-0.008,12.32,20,15.042,20,27.652Z"/>
					</svg>
				</span>
            <div id="tg-verticalscrollbar" class="tg-verticalscrollbar">
                <strong ><a href="javascript:void(0);"><img src="/assets/images/logol2.svg" style="margin-top: 10px" alt="image description"></a></strong>
                <div class="tg-user">
                    <figure>
                        <span class="tg-bolticon"><i class="fa fa-bolt"></i></span>
                        <a href="javascript:void(0);"><img src="/profilephoto/{{Auth::user()->file}}" style="height: 50px;width: 50px" alt="image description"></a>
                    </figure>
                    <div class="tg-usercontent">
                        <h3>Hi! {{Auth::user()->name}}</h3>
                        <h4>User</h4>
                    </div>
                    <a class="tg-btnedit" href="/profilesetting"><i class="icon-pencil"></i></a>
                </div>
                <nav id="tg-navdashboard" class="tg-navdashboard">
                    <ul>
                        <li>
                            <a href="/userdashboard">
                                <i class="icon-chart-bars"></i>
                                <span> Insights</span>
                            </a>
                        </li>
                        <li>
                            <a href="/profilesetting">
                                <i class="icon-cog"></i>
                                <span>Profile Settings</span>
                            </a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">
                                <i class="icon-layers"></i>
                                <span>My Ads</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="/userallads">All Ads</a></li>
                                {{--<li><a href="dashboard-myads.html">Featured Ads</a></li>
                                <li><a href="dashboard-myads.html">Active Ads</a></li>
                                <li><a href="dashboard-myads.html">Inactive Ads</a></li>
                                <li><a href="dashboard-myads.html">Sold Ads</a></li>
                                <li><a href="dashboard-myads.html">Expired Ads</a></li>
                                <li><a href="dashboard-myads.html">Deleted Ads</a></li>--}}
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="javascript:void(0);">
                                <i class="icon-envelope"></i>
                                <span>Messages</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="dashboard-offermessages.html">Received</a></li>
                                <li><a href="dashboard-offermessages.html">Sent</a></li>
                                {{--<li><a href="dashboard-offermessages.html">Trash</a></li>--}}
                            </ul>
                        </li>

                        <li>
                            <a href="dashboard-myfavourites.html">
                                <i class="icon-heart"></i>
                                <span>My Favourites</span>
                            </a>
                        </li>
                        <li>
                            <a href="/privacysetting">
                                <i class="icon-star"></i>
                                <span>Privacy Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <i class="icon-exit"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="tg-socialandappicons">
                    <ul class="tg-socialicons">

                    </ul>
                    <ul class="tg-appstoreicons">

                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->
    @yield('content')


    <!--************************************
           Footer Start
   *************************************-->
    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <nav class="tg-footernav">
            <ul>
                <li><a href="javascript:void(0);"></a></li>
                <li><a href="javascript:void(0);"></a></li>
                <li><a href="javascript:void(0);"></a></li>
            </ul>
        </nav>
        <span class="tg-copyright">2019 All Rights Reserved &copy; Jugaad</span>
    </footer>
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->

<script src="/assets/js/vendor/jquery-library.js"></script>
<script src="/assets/js/vendor/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
<script src="/assets/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
<script src="/assets/JS/responsivethumbnailgallery.html"></script>
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