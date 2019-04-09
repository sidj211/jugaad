@extends('layouts.sitemaster')

@section('content')
    <!--************************************
            Home Slider Start
    *************************************-->
    <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
        <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
            <figcaption>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-bannercontent">
                                <h1>Make your Jugaad.</h1>
                                <h2>Search from Awesome Verified Ads and much more!</h2>
                                <form class="tg-formtheme tg-formbannersearch"  files="true">
                                    <fieldset>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-bullhorn"></i>
                                            <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                                        </div>

                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-layers"></i>
                                            <div class="tg-select">
                                                <select>
                                                    <option value="none">Select Category</option>
                                                    <option value="none">Mobiles</option>
                                                    <option value="none">Electronics</option>
                                                    <option value="none">Vehicles</option>
                                                    <option value="none">Bikes</option>
                                                    <option value="none">Animals</option>
                                                    <option value="none">Furniture</option>
                                                    <option value="none">toys</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button class="tg-btn" type="button">Search Now</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </figcaption>
        </figure>
    </div>
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Categories Search Start
        *************************************-->
        <section class="tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
                        <div class="tg-categoriessearch">
                            <div class="tg-title">
                                <h2><span>Seach Materials shared by students with</span> Trending Categories</h2>
                            </div>
                            <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-08.png" alt="image description"></figure>
                                        <h3>Mobiles</h3>
                                    </div>
                                </div>
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-09.png" alt="image description"></figure>
                                        <h3>Electronics</h3>
                                    </div>
                                </div>
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-10.png" alt="image description"></figure>
                                        <h3>Vehicles</h3>
                                    </div>
                                </div>
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-11.png" alt="image description"></figure>
                                        <h3>Bikes</h3>
                                    </div>
                                </div>
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-12.png" alt="image description"></figure>
                                        <h3>Animals</h3>
                                    </div>
                                </div>
                                <div class="tg-category">
                                    <div class="tg-categoryholder">
                                        <figure><img src="/assets/images/icons/img-13.png" alt="image description"></figure>
                                        <h3>Furniture</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Categories Search End
        *************************************-->
        <!--************************************
                Featured Ads Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <div class="tg-title">
                                <h2>Featured Ads</h2>
                            </div>
                            <div class="tg-description">
                                <p>Over  Featured Ads</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-ads">

                        {{--@foreach($featuredAds as $featuredproduct)
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <span class="tg-themetag tg-featuretag">featured</span>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-01.jpg" alt="image description"></a>
                                    <span class="tg-photocount">See 18 Photos</span>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Mobiles</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">{{ $featuredAds->title}}</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>{{ $featuredAds}}</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach--}}
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-btnbox">
                            <a class="tg-btn" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Featured Ads End
        *************************************-->
        <!--************************************
                Latest Posted Ads Start
        *************************************-->
        <section class="tg-sectionspace tg-bglight tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <div class="tg-title">
                                <h2>Latest Posted Ads</h2>
                            </div>
                            <div class="tg-description">
                                <p>Over 10,56,432 New Ads</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-ads tg-adsvtwo">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <span class="tg-themetag tg-featuretag">featured</span>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-09.jpg" alt="image description"></a>
                                    <span class="tg-photocount">See 29 Photos</span>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Vehicles</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Ei pad pro for sale</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>$200</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-10.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Furniture</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Classic car in low price</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>on call</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-11.jpg" alt="image description"></a>
                                    <span class="tg-photocount">See 3 Photos</span>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Mobiles</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Set of 03 chairs</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>$125</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <span class="tg-themetag tg-featuretag">featured</span>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-12.jpg" alt="image description"></a>
                                    <span class="tg-photocount">See 18 Photos</span>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Mobiles</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Smartphone for sale</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>$160</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-13.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Furniture</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Set of chair for sale</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>on call</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="tg-ad tg-verifiedad">
                                <figure>
                                    <a href="javascript:void(0);"><img src="/assets/images/ads/img-14.jpg" alt="image description"></a>
                                    <span class="tg-photocount">See 7 Photos</span>
                                </figure>
                                <div class="tg-adcontent">
                                    <ul class="tg-productcagegories">
                                        <li><a href="javascript:void(0);">Electronics</a></li>
                                    </ul>
                                    <div class="tg-adtitle">
                                        <h3><a href="javascript:void(0);">Eye catching blue parrot for sale</a></h3>
                                    </div>
                                    <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                    <div class="tg-adprice"><h4>on call</h4></div>
                                    <address>44-46 abc Road, Manchester</address>
                                    <div class="tg-phonelike">
                                        <a class="tg-btnphone" href="javascript:void(0);">
                                            <i class="icon-phone-handset"></i>
                                            <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                        </a>
                                        <span class="tg-like"><i class="fa fa-heart"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-btnbox">
                            <a class="tg-btn" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                Latest Posted Ads End
        *************************************-->
        <!--************************************
                News Article Start
        *************************************-->
        <section class="tg-sectionspace tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-sectionhead">
                            <div class="tg-title">
                                <h2>News Articles</h2>
                            </div>
                            <div class="tg-description">
                                <p>Stay Updated With News</p>
                            </div>
                        </div>
                    </div>
                    <div class="tg-posts">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
                            <div class="tg-post">
                                <figure>
                                    <span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
                                    <a href="javascript:void(0);"><img src="/assets/images/post/img-01.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-postcontent">
                                    <ul class="tg-postcategories">
                                        <li><a href="javascript:void(0);">Lifestyle</a></li>
                                        <li><a href="javascript:void(0);">Entertainment</a></li>
                                    </ul>
                                    <div class="tg-posttitle">
                                        <h3><a href="javascript:void(0);">All I Need To Know I Learned In Kindergarten</a></h3>
                                    </div>
                                    <ul class="tg-postmetadata">
                                        <li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
                                        <li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
                                    </ul>
                                    <div class="tg-description">
                                        <p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
                            <div class="tg-post">
                                <figure>
                                    <a href="javascript:void(0);"><img src="/assets/images/post/img-02.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-postcontent">
                                    <ul class="tg-postcategories">
                                        <li><a href="javascript:void(0);">Fashion</a></li>
                                        <li><a href="javascript:void(0);">Trade</a></li>
                                    </ul>
                                    <div class="tg-posttitle">
                                        <h3><a href="javascript:void(0);">Applause For A Great Teacher</a></h3>
                                    </div>
                                    <ul class="tg-postmetadata">
                                        <li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
                                        <li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
                                    </ul>
                                    <div class="tg-description">
                                        <p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tg-verticaltop">
                            <div class="tg-post">
                                <figure>
                                    <span class="tg-themetag tg-bookmarktag"><i class="icon-bookmark"></i></span>
                                    <a href="javascript:void(0);"><img src="/assets/images/post/img-03.jpg" alt="image description"></a>
                                </figure>
                                <div class="tg-postcontent">
                                    <ul class="tg-postcategories">
                                        <li><a href="javascript:void(0);">Trade</a></li>
                                        <li><a href="javascript:void(0);">Business</a></li>
                                    </ul>
                                    <div class="tg-posttitle">
                                        <h3><a href="javascript:void(0);">Books Are Food For The Brain</a></h3>
                                    </div>
                                    <ul class="tg-postmetadata">
                                        <li>By: <a href="javascript:void(0);">Terisa Wallick</a></li>
                                        <li><i class="icon-bubble"></i><a href="javascript:void(0);">15642</a></li>
                                    </ul>
                                    <div class="tg-description">
                                        <p>Consectetur adipicing elit sed eiusmod temporie incidint ut labore et dolore magna enim ad minim veniam, quis nostrud... <a href="javascript:void(0);">read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-btnbox">
                            <a class="tg-btn" href="javascript:void(0);">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--************************************
                News Article End
        *************************************-->

    </main>


    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('select[name="Category"]').on('change',function(){
                var CategoryID = jQuery(this).val();
                if(CategoryID)
                {
                    jQuery.ajax({
                        url : 'subcategory/getsubcategories/'+CategoryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="subcategory_id"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="subcategory_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="subcategory_id"]').empty();
                }
            });
        });
    </script>

@endsection
