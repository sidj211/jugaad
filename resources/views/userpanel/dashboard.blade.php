@extends('layouts.userpanel')

@section('content')

    <!--************************************
				Dashboard Banner Start
		*************************************-->
    <div class="tg-dashboardbanner">
        <h1>Dashboard</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Main</a></li>
            <li class="tg-active">Dashboard</li>
        </ol>
    </div>
    <!--************************************
            Dashboard Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Dashboard Alerts Start
        *************************************-->
  {{--      <div class="tg-dbsectionspace tg-haslayout tg-alertexamples">
            <div class="tg-alert alert alert-info fade in">
                <p><strong>info: </strong>Event Details submitted,it will be live once verified!</p>
                <div class="tg-anchors">
                    <a class="tg-btndoaction" href="/newsfeed">Event Page</a>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
            </div>

        </div>--}}
        <!--************************************
                Dashboard Alerts End
        *************************************-->
        <!--************************************
                Statistics Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout tg-statistics">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="tg-dashboardbox tg-statistic">
                        <figure><img src="/assets/images/icons/img-32.png" alt="image description"></figure>
                        <div class="tg-contentbox">
                            <h2>{{$adcount}}</h2>
                            <h3>Total Ad Posted</h3>
                            <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="tg-dashboardbox tg-statistic">
                        <figure><img src="/assets/images/icons/img-33.png" alt="image description"></figure>
                        <div class="tg-contentbox">
                            <h2>0{{$activecount}}</h2>
                            <h3>Featured Ads</h3>
                            <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="tg-dashboardbox tg-statistic">
                        <figure><img src="/assets/images/icons/img-34.png" alt="image description"></figure>
                        <div class="tg-contentbox">
                            <h2>04</h2>
                            <h3>Inactive Ads</h3>
                            <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="tg-dashboardbox tg-statistic">
                        <span class="tg-badge">7</span>
                        <figure><img src="/assets/images/icons/img-35.png" alt="image description"></figure>
                        <div class="tg-contentbox">
                            <h2>45706</h2>
                            <h3>Offers / Messages</h3>
                            <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Statistics End
        *************************************-->
        <!--************************************
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <!--************************************
                        Activity Start
                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>My Activity Log</h2>
                        </div>
                        <div class="tg-dashboardholder tg-myactivitylog tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul class="tg-activitylog">
                                <li>
                                    <h3>You Logged In Via Mobile</h3>
                                    <time datetime="2017-08-08">02 Minutes Ago</time>
                                </li>
                                <li>
                                    <h3>You Liked <a href="javascript:void(0);">Samsung Galaxy S5</a></h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Updated Your Profile Photo</h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Posted A Job - Carpenter Required</h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                                <li>
                                    <h3>You Subscribed <a href="javascript:void(0);">Basic Package</a></h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                                <li>
                                    <h3>You Logged In Via Mobile</h3>
                                    <time datetime="2017-08-08">02 Minutes Ago</time>
                                </li>
                                <li>
                                    <h3>You Liked <a href="javascript:void(0);">Samsung Galaxy S5</a></h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Updated Your Profile Photo</h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Posted A Job - Carpenter Required</h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                                <li>
                                    <h3>You Subscribed <a href="javascript:void(0);">Basic Package</a></h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                                <li>
                                    <h3>You Logged In Via Mobile</h3>
                                    <time datetime="2017-08-08">02 Minutes Ago</time>
                                </li>
                                <li>
                                    <h3>You Liked <a href="javascript:void(0);">Samsung Galaxy S5</a></h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Updated Your Profile Photo</h3>
                                    <time datetime="2017-08-08">01 Day Ago</time>
                                </li>
                                <li>
                                    <h3>You Posted A Job - Carpenter Required</h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                                <li>
                                    <h3>You Subscribed <a href="javascript:void(0);">Basic Package</a></h3>
                                    <time datetime="2017-08-08">03 Days Ago</time>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--************************************
                        Activity End
                *************************************-->
                <!--************************************
                        Approved Ads Start
                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Recent Approved Ads</h2>
                        </div>
                        <div class="tg-dashboardholder tg-approvedads tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul class="tg-approvedads">
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-01.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Brand new lenovo laptop i5 for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-02.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Samsung galaxy s5 for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-03.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Honda civic for sale urgent</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-04.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>18 - 55 used macro lense for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-01.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Brand new lenovo laptop i5 for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-02.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Samsung galaxy s5 for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-03.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>Honda civic for sale urgent</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                                <li>
                                    <figure><a href="javascript:void(0);"><img src="/assets/images/ads/thumbnail/img-04.jpg" alt="image description"></a></figure>
                                    <div class="tg-adcontent">
                                        <span class="tg-adverified">Verified Ad</span>
                                        <h3>18 - 55 used macro lense for sale</h3>
                                        <time datetime="2017-08-08">01 Day Ago</time>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--************************************
                        Approved Ads End
                *************************************-->
                <!--************************************
                        Total Views Start
                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Total Views</h2>
                            <form class="tg-formtheme tg-formthemesearch">
                                <fieldset>
										<span class="tg-select">
											<select>
												<option>Select Ad</option>
												<option>Select Ad</option>
												<option>Select Ad</option>
											</select>
										</span>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tg-dashboardholder tg-totalviews">
                            <div id="tg-viewchart" class="tg-viewchart"></div>
                        </div>
                    </div>
                </div>
                <!--************************************
                        Total Views End
                *************************************-->
            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->
        {{--<!--************************************
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <!--************************************
                        Offers/Messages Start
                *************************************-->
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 tg-lgcolwidthfull">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Offers/Messages</h2>
                        </div>
                        <div class="tg-dashboardholder tg-offersmessages">
                            <ul>
                                <li>
                                    <div class="tg-verticalscrollbar tg-dashboardscrollbar">
                                        <div class="tg-ad tg-dotnotification">
                                            <figure><img src="/assets/images/ads/thumbnail/img-01.jpg" alt="image description"></figure>
                                            <h3>Brand new lenovo laptop i5 for sale</h3>
                                        </div>
                                        <div class="tg-ad tg-dotnotification">
                                            <figure><img src="/assets/images/ads/thumbnail/img-02.jpg" alt="image description"></figure>
                                            <h3>Samsung galaxy s5 for sale</h3>
                                        </div>
                                        <div class="tg-ad tg-dotnotification">
                                            <figure><img src="/assets/images/ads/thumbnail/img-03.jpg" alt="image description"></figure>
                                            <h3>Honda civic for sale urgent</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-04.jpg" alt="image description"></figure>
                                            <h3>18 - 55 used macro lense for sale</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-05.jpg" alt="image description"></figure>
                                            <h3>Eye Catching Parrot for sale urgent</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-06.jpg" alt="image description"></figure>
                                            <h3>Xtreme core processor with cooling gel</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-07.jpg" alt="image description"></figure>
                                            <h3>Original ei phone magnet charger</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-01.jpg" alt="image description"></figure>
                                            <h3>Brand new lenovo laptop i5 for sale</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-02.jpg" alt="image description"></figure>
                                            <h3>Samsung galaxy s5 for sale</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-03.jpg" alt="image description"></figure>
                                            <h3>Honda civic for sale urgent</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-04.jpg" alt="image description"></figure>
                                            <h3>18 - 55 used macro lense for sale</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-05.jpg" alt="image description"></figure>
                                            <h3>Eye Catching Parrot for sale urgent</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-06.jpg" alt="image description"></figure>
                                            <h3>Xtreme core processor with cooling gel</h3>
                                        </div>
                                        <div class="tg-ad">
                                            <figure><img src="/assets/images/ads/thumbnail/img-07.jpg" alt="image description"></figure>
                                            <h3>Original ei phone magnet charger</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-offerers tg-verticalscrollbar tg-dashboardscrollbar">
                                        <div class="tg-offerer tg-dotnotification">
                                            <figure><img src="/assets/images/author/img-08.jpg" alt="image description"></figure>
                                            <h3>Antoine Hibdon</h3>
                                        </div>
                                        <div class="tg-offerer tg-dotnotification">
                                            <figure><img src="/assets/images/author/img-09.jpg" alt="image description"></figure>
                                            <h3>Lissa Hier</h3>
                                        </div>
                                        <div class="tg-offerer tg-dotnotification">
                                            <figure><img src="/assets/images/author/img-10.jpg" alt="image description"></figure>
                                            <h3>Preston Kintner</h3>
                                        </div>
                                        <div class="tg-offerer tg-dotnotification">
                                            <figure><img src="/assets/images/author/img-11.jpg" alt="image description"></figure>
                                            <h3>Adolph Varley</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-12.jpg" alt="image description"></figure>
                                            <h3>Tosha Tinney</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-13.jpg" alt="image description"></figure>
                                            <h3>Lynwood Krob</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-14.jpg" alt="image description"></figure>
                                            <h3>Adan Toney</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-15.jpg" alt="image description"></figure>
                                            <h3>Susanne Foran</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-08.jpg" alt="image description"></figure>
                                            <h3>Antoine Hibdon</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-09.jpg" alt="image description"></figure>
                                            <h3>Lissa Hier</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-10.jpg" alt="image description"></figure>
                                            <h3>Preston Kintner</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-11.jpg" alt="image description"></figure>
                                            <h3>Adolph Varley</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-12.jpg" alt="image description"></figure>
                                            <h3>Tosha Tinney</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-13.jpg" alt="image description"></figure>
                                            <h3>Lynwood Krob</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-14.jpg" alt="image description"></figure>
                                            <h3>Adan Toney</h3>
                                        </div>
                                        <div class="tg-offerer">
                                            <figure><img src="/assets/images/author/img-15.jpg" alt="image description"></figure>
                                            <h3>Susanne Foran</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-chatarea">
                                        <div class="tg-messages tg-verticalscrollbar tg-dashboardscrollbar">
                                            <div class="tg-offerermessage">
                                                <figure><img src="/assets/images/author/img-16.jpg" alt="image description"></figure>
                                                <div class="tg-description">
                                                    <p>Consectetur adipisicing elit sei do eiusmod tempor incididunt labore et dolore.</p>
                                                    <div class="clearfix"></div>
                                                    <time datetime="2017-08-08">January 12th, 2011</time>
                                                </div>
                                            </div>
                                            <div class="tg-memessage tg-readmessage">
                                                <figure><img src="/assets/images/author/img-17.jpg" alt="image description"></figure>
                                                <div class="tg-description">
                                                    <p>Eiusmod tempor incididunt labore et dolore magna aliqiu enim ad minim veniam qiuisru exercitation ullamco laborisen nisi ut aliquip exea.</p>
                                                    <div class="clearfix"></div>
                                                    <p><a href="https://themeforest.net/" target="_blank">https://themeforest.net</a></p>
                                                    <div class="clearfix"></div>
                                                    <p>It that ok?</p>
                                                    <div class="clearfix"></div>
                                                    <time datetime="2017-08-08">Jun 28, 2017 09:30</time>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="tg-offerermessage">
                                                <figure><img src="/assets/images/author/img-16.jpg" alt="image description"></figure>
                                                <div class="tg-description">
                                                    <div class="clearfix"></div>
                                                    <p>Consectetur adipisicing elit sei do eiusmod tempor incididunt labore et dolore.</p>
                                                    <div class="clearfix"></div>
                                                    <time datetime="2017-08-08">January 12th, 2011</time>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="tg-memessage tg-readmessage">
                                                <figure><img src="/assets/images/author/img-17.jpg" alt="image description"></figure>
                                                <div class="tg-description">
                                                    <div class="clearfix"></div>
                                                    <p>Eiusmod tempor incididunt labore et dolore magna aliqiu enim ad minim veniam qiuisru exercitation ullamco laborisen nisi ut aliquip exea.</p>
                                                    <div class="clearfix"></div>
                                                    <p><a href="https://themeforest.net/" target="_blank">https://themeforest.net</a></p>
                                                    <div class="clearfix"></div>
                                                    <p>It that ok?</p>
                                                    <div class="clearfix"></div>
                                                    <time datetime="2017-08-08">Jun 28, 2017 09:30</time>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tg-replaybox">
                                            <textarea class="form-control" name="reply" placeholder="Type Here &amp; Press Enter"></textarea>
                                            <div class="tg-iconbox">
                                                <i class="icon-thumbs-up"></i>
                                                <i class="icon-thumbs-down"></i>
                                                <i class="icon-smile"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--************************************
                        Offers/Messages End
                *************************************-->
                --}}{{--<!--************************************

                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthfull">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Todo Task List</h2>
                        </div>
                        <div class="tg-verticalscrollbar tg-dashboardscrollbar tg-todotasklist">
                            <ul>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todoone" type="checkbox" name="todolist" value="one">
                                        <label for="tg-todoone">Consectetur adipisicing elit sed do eiusmod lokatns eima tempor incididunt ut labore</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todotwo" type="checkbox" name="todolist" value="two">
                                        <label for="tg-todotwo">Ut enim ad minim veniam quis nostrud sheisam</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todothree" type="checkbox" name="todolist" value="three" checked>
                                        <label for="tg-todothree">Exercitation ullamco laboris lokamna</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todofour" type="checkbox" name="todolist" value="four">
                                        <label for="tg-todofour">Aisi ut aliquip ex ea commodo consequat</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todofive" type="checkbox" name="todolist" value="five">
                                        <label for="tg-todofive">Duis aute irure dolor sola to hokama</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todosix" type="checkbox" name="todolist" value="six" checked>
                                        <label for="tg-todosix">Reprehenderit in voluptate velit esse cillum</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todoseven" type="checkbox" name="todolist" value="seven">
                                        <label for="tg-todoseven">Excepteur sint occaecat lokstanshie</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todoeight" type="checkbox" name="todolist" value="eight">
                                        <label for="tg-todoeight">Cupidatat non proident sunt in culpa milake na shiet</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todonine" type="checkbox" name="todolist" value="nine">
                                        <label for="tg-todonine">Consectetur adipisicing elit sed do eiusmod lokatns eima tempor incididunt ut labore</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todoten" type="checkbox" name="todolist" value="ten">
                                        <label for="tg-todoten">Ut enim ad minim veniam quis nostrud sheisam</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todoeleven" type="checkbox" name="todolist" value="eleven">
                                        <label for="tg-todoeleven">Exercitation ullamco laboris lokamna</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todotwelve" type="checkbox" name="todolist" value="twelve">
                                        <label for="tg-todotwelve">Aisi ut aliquip ex ea commodo consequat</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todothirteen" type="checkbox" name="todolist" value="thirteen">
                                        <label for="tg-todothirteen">Duis aute irure dolor sola to hokama</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todofourteen" type="checkbox" name="todolist" value="fourteen">
                                        <label for="tg-todofourteen">Reprehenderit in voluptate velit esse cillum</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todofifteen" type="checkbox" name="todolist" value="fifteen">
                                        <label for="tg-todofifteen">Excepteur sint occaecat lokstanshie</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="tg-checkbox">
                                        <input id="tg-todosixteen" type="checkbox" name="todolist" value="sixteen">
                                        <label for="tg-todosixteen">Cupidatat non proident sunt in culpa milake na shiet</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>--}}{{--

            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->--}}
    </main>
    <!--************************************
            Main End
    *************************************-->



    @endsection