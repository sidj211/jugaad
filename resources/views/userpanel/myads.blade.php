@extends('layouts.userpanel')
@section('content')

    <!--************************************
				Dashboard Banner Start
		*************************************-->
    <div class="tg-dashboardbanner">
        <h1>My Ads</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li class="tg-active">My Ads</li>
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
                Section Start
        *************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <form class="tg-formtheme tg-formdashboard">
                    <fieldset>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>My Ads</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <nav class="tg-navtabledata">
                                        <ul>
                                            <li class="tg-active"><a href="_.html">All Ads (50)</a></li>
                                            <li><a href="_.html">Featured (12)</a></li>
                                            <li><a href="javascript:void(0);" data-category="active">Active</a></li>
                                            <li><a href="javascript:void(0);" data-category="inactive">Inactive</a></li>
                                            <li><a href="javascript:void(0);" data-category="sold">Sold</a></li>
                                            <li><a href="javascript:void(0);" data-category="expired">Expired</a></li>

                                        </ul>
                                    </nav>
                                    <div class="tg-otherfilters">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left">
                                                <div class="form-group tg-sortby">
                                                    <span>Sort by:</span>
                                                    <div class="tg-select">
                                                        <select>
                                                            <option>Most Recent</option>
                                                            <option>Most Recent</option>
                                                            <option>Most Recent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-magnifier"></i>
                                                    <input type="search" name="search" class="form-control" placeholder="Search Here">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
                                        <thead>
                                        <tr>
                                            <th>
														<span class="tg-checkbox">
															<input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
															<label for="tg-checkedall"></label>
														</span>
                                            </th>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Featured</th>
                                            <th>Ad Status</th>
                                            <th>Price &amp; Location</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($ads as $ad)

                                            @if($ad->status == 0)
                                                <tr data-category="inactive">
                                                    <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adthree" type="checkbox" name="myads" value="myadthree">
															<label for="tg-adthree"></label>
														</span>
                                                    </td>
                                                    <td data-title="Photo"><img src="/assets/images/thumbnail/img-08.jpg" alt="image description"></td>
                                                    <td data-title="Title">
                                                        <h3>{{$ad->title}}</h3>
                                                        <span>Ad ID: {{$ad->id}}</span>
                                                    </td>
                                                    <td data-title="Category">{{$ad->subcategory->name}}</td>
                                                    @if($ad->featured == 1)
                                                    <td data-title="Featured">Yes</td>
                                                    @else
                                                    <td data-title="Featured">No</td>
                                                    @endif
                                                    <td data-title="">
                                                        <span class="tg-adstatus tg-adstatusinactive">Inactive</span>
                                                        <em>Under Review</em>
                                                    </td>
                                                    <td data-title="Price &amp; Location">
                                                        <h3>{{$ad->price}}/- Rs </h3>
                                                        <address>On call</address>
                                                    </td>
                                                    <td data-title="Date">
                                                        <time datetime="2017-08-08">{{$ad->created_at->diffForHumans()}}</time>
                                                        @if($ad->status == 1)
                                                        <span>Published</span>
                                                        @else
                                                        <span>Under Review</span>
                                                            @endif
                                                    </td>
                                                    <td data-title="Action">
                                                        <div class="tg-btnsactions">
                                                            <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i data-toggle="modal" data-target=".test" class="fa fa-eye"></i></a>
                                                            <a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i data-toggle="modal" data-target=".tg-categorymodal" class="fa fa-pencil"></i></a>
                                                            <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @elseif($ad->status == 1)
                                                <tr data-category="active">
                                                    <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
                                                    </td>
                                                    <td data-title="Photo"><img src="/assets/images/thumbnail/img-06.jpg" alt="image description"></td>
                                                    <td data-title="Title">
                                                        <h3>A+ HP probook 6560b core i3 2nd generation</h3>
                                                        <span>Ad ID: ng3D5hAMHPajQrM</span>
                                                    </td>
                                                    <td data-title="Category"><span class="tg-adcategories">Laptops &amp; PCs</span></td>
                                                    <td data-title="Featured">Yes</td>
                                                    <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusactive">active</span></td>
                                                    <td data-title="Price &amp; Location">
                                                        <h3>$200</h3>
                                                        <address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
                                                    </td>
                                                    <td data-title="Date">
                                                        <time datetime="2017-08-08">Jun 27, 2017</time>
                                                        <span>Published</span>
                                                    </td>
                                                    <td data-title="Action">
                                                        <div class="tg-btnsactions">
                                                            <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                                            <a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
                                                            <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @elseif($ad->status == 2)
                                                <tr data-category="sold">
                                                    <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adfour" type="checkbox" name="myads" value="myadfour">
															<label for="tg-adfour"></label>
														</span>
                                                    </td>
                                                    <td data-title="Photo"><img src="/assets/images/thumbnail/img-09.jpg" alt="image description"></td>
                                                    <td data-title="Title">
                                                        <h3>A+ HP probook 6560b core i3 2nd generation</h3>
                                                        <span>Ad ID: ng3D5hAMHPajQrM</span>
                                                    </td>
                                                    <td data-title="Category">Laptops &amp; PCs</td>
                                                    <td data-title="Featured">Yes</td>
                                                    <td data-title="Ad Status"><span class="tg-adstatus tg-adstatussold">sold</span></td>
                                                    <td data-title="Price &amp; Location">
                                                        <h3>$200</h3>
                                                        <address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
                                                    </td>
                                                    <td data-title="Date">
                                                        <time datetime="2017-08-08">Jun 27, 2017</time>
                                                        <span>Published</span>
                                                    </td>
                                                    <td data-title="Action">
                                                        <div class="tg-btnsactions">
                                                            <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                                            <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @else
                                                <tr data-category="expired">
                                                    <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adseven" type="checkbox" name="myads" value="myadseven">
															<label for="tg-adseven"></label>
														</span>
                                                    </td>
                                                    <td data-title="Photo"><img src="/assets/images/thumbnail/img-12.jpg" alt="image description"></td>
                                                    <td data-title="Title">
                                                        <h3>A+ HP probook 6560b core i3 2nd generation</h3>
                                                        <span>Ad ID: ng3D5hAMHPajQrM</span>
                                                    </td>
                                                    <td data-title="Category">Laptops &amp; PCs</td>
                                                    <td data-title="Featured">Yes</td>
                                                    <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusexpired">expired</span></td>
                                                    <td data-title="Price &amp; Location">
                                                        <h3>$200</h3>
                                                        <address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
                                                    </td>
                                                    <td data-title="Date">
                                                        <time datetime="2017-08-08">Jun 27, 2017</time>
                                                        <span>Published</span>
                                                    </td>
                                                    <td data-title="Action">
                                                        <div class="tg-btnsactions">
                                                            <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                                            <a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
                                                            <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endif

                                            @endforeach




{{--for deleted condition--}}
                                       {{-- <tr data-category="deleted">
                                            <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adten" type="checkbox" name="myads" value="myadten">
															<label for="tg-adten"></label>
														</span>
                                            </td>
                                            <td data-title="Photo"><img src="/assets/images/thumbnail/img-15.jpg" alt="image description"></td>
                                            <td data-title="Title">
                                                <h3>A+ HP probook 6560b core i3 2nd generation</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category">Laptops &amp; PCs</td>
                                            <td data-title="Featured">Yes</td>
                                            <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusdeleted">deleted</span></td>
                                            <td data-title="Price &amp; Location">
                                                <h3>$200</h3>
                                                <address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
                                            </td>
                                            <td data-title="Date">
                                                <time datetime="2017-08-08">Jun 27, 2017</time>
                                                <span>Published</span>
                                            </td>
                                            <td data-title="Action">
                                                <div class="tg-btnsactions">
                                                    <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                                    <a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
                                                    <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>--}}


                                        </tbody>
                                    </table>
                                    <nav class="tg-pagination">

                                        {{$ads->links('vendor.pagination.custom')}}
                                       {{-- <ul>
                                            <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li class="tg-active"><a href="#">5</a></li>
                                            <li>...</li>
                                            <li><a href="#">10</a></li>
                                            <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>--}}
                                    </nav>
                                </div>
                            </div>
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
            Main End
    *************************************-->
    <div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog tg-thememodaldialog" role="document">
            <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content tg-thememodalcontent">
                <div class="tg-title">
                    <strong>Edit Ad</strong>
                </div>
                <div class="tg-dashboardholder">

                    <div class="form-group">
                        <ol class="tg-categorysequence">
                            <li id="selcat">Not selected</li>
                            <li id="selsubcat">Not selected</li>
                            <li id="selsubccat">Not selected <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">(Cannot Change)</a></li>
                        </ol>
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Enter Ad Title*" readonly>
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
                    {{--<label class="tg-fileuploadlabel" for="tg-photogallery">
                        <span>Drop files anywhere to upload</span>
                        <span>Or</span>
                        <span class="tg-btn">Select Files</span>
                        <span>Maximum upload file size: 500 KB</span>
                        <input id="tg-photogallery" class="tg-fileinput" type="file" name="photo_id[]" multiple>
                    </label>--}}

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
                        <button type="submit" class="tg-btn">Edit Ad</button>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="modal fade tg-thememodal tg-categorymodal test" tabindex="-1" role="dialog">
        <div class="modal-dialog tg-thememodaldialog" role="document">
            <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content tg-thememodalcontent">
                <div class="tg-title">
                    <strong>Edit Ad</strong>
                </div>
                <div class="tg-dashboardholder">

                    <div class="form-group">
                        <ol class="tg-categorysequence">
                            <li id="selcat">Not selected</li>
                            <li id="selsubcat">Not selected</li>
                            <li id="selsubccat">Not selected <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">(Cannot Change)</a></li>
                        </ol>
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Enter Ad Title*" readonly>
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
                    {{--<label class="tg-fileuploadlabel" for="tg-photogallery">
                        <span>Drop files anywhere to upload</span>
                        <span>Or</span>
                        <span class="tg-btn">Select Files</span>
                        <span>Maximum upload file size: 500 KB</span>
                        <input id="tg-photogallery" class="tg-fileinput" type="file" name="photo_id[]" multiple>
                    </label>--}}

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
                        <button type="submit" class="tg-btn">Edit Ad</button>
                    </div>
                </div>



            </div>
        </div>
    </div>
    @endsection