@extends('layouts.default')
@section('content')


        <!-- form search area-->
<div class="container">
    <div class="row">

        <div class="col-md-2">
            <div class="container"><br>
                <div class="text-center logo">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-8">
            <!-- form search -->
            <br><br>
            <form class="form-search-list">
                <div class="row">
                    <div class="col-sm-5 col-xs-6 ">
                        <div class="form-group">
                            <label class="color-white">What</label>
                            <input class="form-control" placeholder="job title, keywords or company name" >
                        </div>
                    </div>
                    <div class="col-sm-5 col-xs-6 ">
                        <div class="form-group">
                            <label class="color-white">Where</label>
                            <input class="form-control" placeholder="city, province, or region">
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-12 ">
                        <div class="form-group">
                            <label class="hidden-xs">&nbsp;</label>
                            <button class="btn btn-block btn-theme  btn-success">Search</button>
                        </div>
                    </div>
                </div>
                <p class="text-right"><a href="#modal-advanced" data-toggle="modal" class="link-white">Advanced Search</a></p>
            </form>  <!-- form search -->
        </div>


    </div>

     @include('includes.modalsearch')
</div><!-- end form search area-->







<!-- body-content -->
<div class="body-content clearfix" >

    <div class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <!-- box listing -->
                    <div class="block-section-sm box-list-area">

                        <!-- item list -->
                        <div class="box-list">
                                <div class="item">
                                <div class="row">
                                    <div class="col-md-3 hidden-sm hidden-xs">
                                        <div class="img-item">
                                            <img src="assets/theme/images/company-logo/1.jpg" style="width:304px;height:150px;" alt="image problem, please refresh for preview">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="no-margin-top"><a href="job_details.html" class="">Backend Developer <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                                        <h5><span class="color-black">CollegeHumor</span> - <span class="color-white-mute">New York, NY 10011 (Chelsea area)</span></h5>
                                        <p class="text-truncate ">Back-end development experience in PHP 5, and a strong understanding of Object Oriented Programming within an MVC framework</p>
                                        <div>
                                            <span class="color-white-mute">16 hours ago</span> -
                                            <a href="#need-login" data-toggle="modal" class="btn btn-xs btn-theme btn-default">save job</a> -
                                            <a href="#modal-email" data-toggle="modal"  class="btn btn-theme btn-xs btn-default">email</a> -
                                            <a href="#" class="btn btn-theme btn-xs btn-default">more ...</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end item list -->
                        </div>



                        <!-- pagination -->
                        <nav >
                            <ul class="pagination pagination-theme  no-margin">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&larr;</span>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><span>...</span></li>
                                <li><a href="#">50</a></li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&rarr;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav><!-- pagination -->

                    </div><!-- end box listing -->
                </div>






                <div class="col-md-3">
                        <!-- sidebar -->
                </div>

            </div>
        </div>
    </div>



    <!-- modal need login -->
    <div class="modal fade" id="need-login">
        <div class="modal-dialog modal-md">
            <div class="modal-content">

                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >You must login to save jobs</h4>
                </div>
                <div class="modal-footer text-center">
                    <a href="#" class="btn btn-default btn-theme" >Login</a>
                    <a href="#" class="btn btn-success btn-theme">Create account (it's free)</a>
                </div>

            </div>
        </div>
    </div><!-- end modal  need login -->


    <!-- modal need login -->
    <div class="modal fade" id="modal-email">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form>
                    <div class="modal-header ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" >Send this job to yourself or a friend:</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>From my email address</label>
                            <input type="email" class="form-control "  placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>To email address</label>
                            <input type="email" class="form-control "  placeholder="Enter Email">
                        </div>

                        <div class="form-group">
                            <label>Comment (optional)</label>
                            <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
                        </div>
                        <div class="checkbox flat-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span>
                                Send a copy to my email address?
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-theme">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end modal  need login -->
</div><!--end body-content -->








@stop

@section('style')
@stop

@section('script')
@stop
