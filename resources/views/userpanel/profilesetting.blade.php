@extends('layouts.userpanel')

@section('content')

    <!--************************************
				Dashboard Banner Start
		*************************************-->
    <div class="tg-dashboardbanner">
        <h1>Profile Settings</h1>
        <ol class="tg-breadcrumb">
            <li><a href="javascript:void(0);">Home</a></li>
            <li><a href="javascript:void(0);">Dashboard</a></li>
            <li class="tg-active">Profile Setting</li>
        </ol>
    </div>

    <!--************************************
            Dashboard Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">

        @if(Session::has('message'))
            <div class="tg-alert alert alert-info fade in">
                <p><strong>info: </strong>Profile photo updated successfully.</p>
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


                        <!--************************************
                                Activity Start
                        *************************************-->
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Profile Photo</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <form method="post" action="/updatephoto" enctype="multipart/form-data" files="true">
                                        {{csrf_field()}}
                                        <label class="tg-fileuploadlabel" for="tg-photogallery">
                                            <span>Drop files anywhere to upload</span>
                                            <span>Or</span>
                                            <span class="tg-btn">Select Files</span>
                                            <span>Maximum upload file size: 500 KB</span>
                                            <input id="tg-photogallery" class="tg-fileinput" type="file" name="file">
                                        </label>

                                        <br>
                                        <button class="tg-btn" type="submit">Update</button>

                                    </form>

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
                                    <h2>Profile Detail</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group success">
                                        <input type="text" name="username" class="form-control" placeholder="{{Auth::user()->name}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="{{Auth::user()->email}}">
                                    </div>

                                    {{--first and last name fields--}}
                                   {{-- <div class="form-group">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name*">
                                    </div>--}}
                                    <div class="form-group">
                                        <input type="text" name="phonenumber" class="form-control" placeholder="{{Auth::user()->contact}}">
                                    </div>
                                    <button class="tg-btn" type="button">Update</button>
                                </div>
                            </div>
                        </div>
                        <!--************************************
                                Approved Ads End
                        *************************************-->
                        <!--************************************
                                Approved Ads Start
                        *************************************-->
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Change Password</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <div class="form-group">
                                        <input type="password" name="currentpassword" class="form-control" placeholder="Current Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm New Password">
                                    </div>
                                    <button class="tg-btn" type="button">Change Now</button>
                                </div>
                            </div>
                        </div>
                        <!--************************************
                                Approved Ads End
                        *************************************-->


            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->

    @endsection