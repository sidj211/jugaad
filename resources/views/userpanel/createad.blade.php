@extends('layouts.userpanel')


@section('content')
    <style>


    </style>
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

        @if(Session::has('message'))
            <div class="tg-alert alert alert-info fade in">
                <p><strong>info: </strong> Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="tg-anchors">
                    <a class="tg-btndoaction" href="#">Do Action Now</a>
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                </div>
            </div>

            @endif
        <!--************************************
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <div class="col-lg-12">

                            <div class="tg-postanad">
                                <form method="POST" action="/frontend" files="true" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
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
                                                        <li id="selcat">Not selected</li>
                                                        <li id="selsubcat">Not selected</li>
                                                        <li id="selsubccat">Not selected <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">(Change)</a></li>
                                                    </ol>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="title" class="form-control" placeholder="Enter Ad Title*">
                                                    <input type="hidden" name="subcategory_id" id="subcat" class="subcat form-control" >
                                                    <input type="hidden" name="subccategory_id" id="subccat" class="subcat form-control" >

                                                </div>
                                                <div class="form-group tg-priceformgroup">

                                                    <input type="text" name="price" class="form-control" placeholder="Price*">
                                                </div>
                                                <div class="form-group">
                                                    <textarea type="text" name="description" class="form-control" placeholder="Description*"></textarea>
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

                                </form>

                                <form method="POST" action="/createevent" files="true" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="tg-dashboardbox tg-contactdetail">
                                        <div class="tg-dashboardboxtitle">
                                            <h2>News/Events Detail</h2>
                                        </div>
                                        <div class="tg-dashboardholder">
                                            <div class="form-group">

                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control" placeholder="Event/News Title*">
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" name="description" class="form-control" placeholder="Description*"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="contact" class="form-control" placeholder="Contact Details*">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control" placeholder="Event Location">
                                            </div>
                                            <div class="form-group" >
                                                <label>

                                                    <span class="tg-btn">Select Photo</span>

                                                    <input id="tg-photogallery" class="tg-fileinput" type="file" name="file" >
                                                </label>

                                            </div>

                                            <div class="form-group">
                                                <br>

                                                <button type="submit" class="tg-btn">Submit</button>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>

                </div>


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
                    @foreach($categories as $category)
                    <div class="tg-category" value="{{$category->id}}">
                        <div class="tg-categoryholder">
                            <figure><img src="http://placehold.it/167x125" alt="image description"></figure>
                            <h3>{{$category->name}}</h3>
                        </div>
                    </div>
                    @endforeach
                </div>
                <ul class="tg-subcategories">
                    <li>
                        <div class="tg-title">
                            <strong>Electronics</strong>
                        </div>
                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul id="subcategories">
                                <li class="ssubcategories"><p >Dishwashers</p></li>


                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="tg-title">
                            <strong>Air Conditioners</strong>
                        </div>
                        <div class=" tg-verticalscrollbar tg-dashboardscrollbar">
                            <ul class="subcategories2" id="ssss" >
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
            jQuery('.tg-category').on('click',function(){
                var value = $(this).attr("value");
                var selcat = $(this).text();
                if(value)
                {
                    jQuery.ajax({
                        url : 'subcategory/'+value,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            $('#selcat').text(selcat)
                            // clearing the <ul> tag here
                            jQuery('#subcategories').empty();
                            //putting the value with for loop
                            jQuery.each(data, function(key,value){
                                $('#subcategories').append(' <li ><button class="btn btn-success ssubcategories"  value="'+key+'" >'+value+'</button></li>');
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

    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('#subcategories').on('click','.ssubcategories',function(){
                alert('hello');
                var value = $(this).attr("value");
                var selsubcat = $(this).text();
                $('#subcat').val(value);
                alert(selsubcat)
                if(value)
                {
                    jQuery.ajax({
                        url : 'subccategory/'+value,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            $('#selsubcat').text(selsubcat)
                            // clearing the <ul> tag here
                            jQuery('#ssss').empty();
                            //putting the value with for loop
                            jQuery.each(data, function(key,value){
                                $('#ssss').append(' <li><button class="subccategories btn btn-default" value="'+key+'" >'+value+'</button></li>');
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

    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('#ssss').on('click','.subccategories',function(){
                alert('hello');
                var value = $(this).attr("value");
                var selsubccat = $(this).text();
                $('#subccat').val(value);
                alert(selsubccat)
                $('#selsubccat').text(selsubccat);

            });


        });
    </script>



@endsection
