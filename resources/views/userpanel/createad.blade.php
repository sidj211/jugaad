@extends('layouts.userpanel')


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>




    <div class="tg-dashboardbanner">
        <h1>Profile Settings</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li class="tg-active">Post an Ad</li>
        </ol>
    </div>

    <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <form class="tg-formtheme tg-formdashboard" method="POST" action="/frontend" files="true" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <fieldset>
                        <div class="tg-postanad">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Ad Detail</h2>
                                    </div>




                                    <div class="tg-dashboardholder">
                                        <div class="form-group text-center">
                                            <a href="#" class="tg-btn" data-toggle="modal" data-target=".tg-categorymodal">Select Category Here</a>
                                        </div>
                                        <div class="form-group">
                                            <ol class="tg-categorysequence">
                                                <li>Electronics</li>
                                                <li>Air Conditioners</li>
                                                <li>Daikin <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">(Change)</a></li>
                                            </ol>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control" placeholder="Enter Ad Title*">
                                            <input type="hidden" name="subcategory_id" id="subcat" class="subcat form-control" >

                                        </div>
                                        <div class="form-group tg-priceformgroup">

                                            <input type="text" name="price" class="form-control" placeholder="Price*">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number*">
                                        </div>
                                        <label class="tg-fileuploadlabel" for="tg-photogallery">
                                            <span>Drop files anywhere to upload</span>
                                            <span>Or</span>
                                            <span class="tg-btn">Select Files</span>
                                            <span>Maximum upload file size: 500 KB</span>
                                            <input id="tg-photogallery" class="tg-fileinput" type="file" name="photo_id[]" multiple>
                                        </label>

                                        {{--photo gallery--}}
                                        {{--<div class="tg-horizontalthemescraollbar tg-profilephotogallery">
                                            <ul>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/thumbnail/img-01.jpg" alt="image description">
                                                        <i class="icon-trash"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure class="tg-activephoto">
                                                        <img src="/assets/images/thumbnail/img-02.jpg" alt="image description">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/thumbnail/img-02.jpg" alt="image description">
                                                        <i class="icon-trash"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure class="tg-activephoto">
                                                        <img src="/assets/images/thumbnail/img-04.jpg" alt="image description">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure class="tg-activephoto">
                                                        <img src="/assets/images/thumbnail/img-05.jpg" alt="image description">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/thumbnail/img-01.jpg" alt="image description">
                                                        <i class="icon-trash"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure class="tg-activephoto">
                                                        <img src="/assets/images/thumbnail/img-02.jpg" alt="image description">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/thumbnail/img-02.jpg" alt="image description">
                                                        <i class="icon-trash"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure>
                                                        <img src="/assets/images/thumbnail/img-04.jpg" alt="image description">
                                                        <i class="icon-trash"></i>
                                                    </figure>
                                                </li>
                                                <li>
                                                    <figure class="tg-activephoto">
                                                        <img src="/assets/images/thumbnail/img-05.jpg" alt="image description">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </figure>
                                                </li>
                                            </ul>
                                        </div>--}}
                                        <div class="form-group">
                                            <br>
                                            <br>
                                            <button type="submit" class="tg-btn">Post Ad</button>
                                        </div>
                                    </div>



                                </div>
                            </div>
                           {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Enable Offers/Messages</h2>
                                    </div>
                                    <div class="tg-dashboardholder">
                                        <div class="tg-checkbox">
                                            <input id="tg-enablemessages" type="checkbox" name="enablemessages" value="on">
                                            <label for="tg-enablemessages">Enable offers/messages option in this Post</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tg-dashboardbox tg-contactdetail">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Contact Detail</h2>
                                    </div>
                                    <div class="tg-dashboardholder">
                                        <div class="form-group">
                                            <strong>I’m a:</strong>
                                            <div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="usertype" value="same user" checked>
														<label for="tg-sameuser">Same User</label>
													</span>
                                                <span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="usertype" value="someone else">
														<label for="tg-someoneelse">Someone Else</label>
													</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="lastname" class="form-control" placeholder="Last Name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone*">
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-select">
                                                <select>
                                                    <option>Select Country</option>
                                                    <option>Select Country</option>
                                                    <option>Select Country</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-select">
                                                <select>
                                                    <option>Select State</option>
                                                    <option>Select State</option>
                                                    <option>Select State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-select">
                                                <select>
                                                    <option>Select City</option>
                                                    <option>Select City</option>
                                                    <option>Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="fa fa-crosshairs"></i>
                                            <input type="text" name="enteraddress" class="form-control" placeholder="Enter Address">
                                        </div>
                                        <div class="tg-checkbox">
                                            <input id="tg-agreetermsandrules" type="checkbox" name="agreetermsandrules" value="on">
                                            <label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
                                        </div>

                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->
    </main>

    <!--************************************
        Theme Modal Box Start
*************************************-->
    <div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog tg-thememodaldialog" role="document">
            <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content tg-thememodalcontent">
                <div class="tg-title">
                    <strong>Select Category</strong>
                </div>
                <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel">
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
                <ul class="tg-subcategories">
                    <li>
                        <div class="tg-title">
                            <strong>Electronics</strong>
                        </div>
                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul class="subcategories">
                                <li><p class="ssubcategories" >Dishwashers</p></li>

                                <li><p class="ssubcategories">Freezers</p></li>
                                <li><p class="ssubcategories">Fridge Freezers</p></li>
                                <li><p class="ssubcategories">Fans</p></li>
                                <li><p class="ssubcategories">Air Conditioners</p></li>
                                <li><p class="ssubcategories">Water Dispenser</p></li>
                                <li><p class="ssubcategories">Microwave Ovens</p></li>
                                <li><p class="ssubcategories">Refrigerators</p></li>
                                <li><p class="ssubcategories">Hair Dryers</p></li>
                                <li><p class="ssubcategories">Washing Machine</p></li>
                                <li><p class="ssubcategories">dolor in reprehenderit</p></li>
                                <li><p class="ssubcategories">in voluptate velit esse</p></li>
                                <li><p class="ssubcategories">Dishwashers</p></li>
                                <li><p class="ssubcategories">Freezers</p></li>
                                <li><p class="ssubcategories">Fridge Freezers</p></li>
                                <li><p class="ssubcategories">Fans</p></li>
                                <li><p class="ssubcategories">Air Conditioners</p></li>
                                <li><p class="ssubcategories">Water Dispenser</p></li>
                                <li><p class="ssubcategories">Microwave Ovens</p></li>
                                <li><p class="ssubcategories">Refrigerators</p></li>
                                <li><p class="ssubcategories">Hair Dryers</p></li>
                                <li><p class="ssubcategories">Washing Machine</p></li>
                                <li><p class="ssubcategories">dolor in reprehenderit</p></li>
                                <li><p class="ssubcategories">in voluptate velit esse</p></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="tg-title">
                            <strong>Air Conditioners</strong>
                        </div>
                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul>
                                <li>Voltas</li>
                                <li>Samsung</li>
                                <li>Daikin</li>
                                <li>LG</li>
                                <li>Whirlpool</li>
                                <li>Videocon</li>
                                <li>Blue Star</li>
                                <li>Hitachi</li>
                                <li>Haier</li>
                                <li>General</li>
                                <li>dolor in reprehenderit</li>
                                <li>in voluptate velit esse</li>
                                <li>Voltas</li>
                                <li>Samsung</li>
                                <li>Daikin</li>
                                <li>LG</li>
                                <li>Whirlpool</li>
                                <li>Videocon</li>
                                <li>Blue Star</li>
                                <li>Hitachi</li>
                                <li>Haier</li>
                                <li>General</li>
                                <li>dolor in reprehenderit</li>
                                <li>in voluptate velit esse</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--************************************
            Theme Modal Box End
    *************************************-->
    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('.ssubcategories').on('click',function(){
            var value = $(this).val();
                $('#subcat').val(1);
                $('.tg-categorymodal .close').click();

            });
        });
    </script>


@endsection
