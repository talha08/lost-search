@extends('layouts.default')
@section('content')
        <!-- body-content -->
<div class="body-content clearfix" >

    <!-- box simple static -->
    <div class="block-section bg-color1" style="background: #eeeeee;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 page-content col-thin-right">
                    <div class="inner inner-box ads-details-wrapper">
                        <h2> {!! $found->title !!}
                            {{--<small class="label label-default adlistingtype">Company ad</small>--}}
                        </h2>
                        <span class="info-row"> <span class="date"><i class=" icon-clock"> </i> {!! $found->user->created_at->toFormattedDateString() !!} </span> - <span class="item-location"><i class="fa fa-map-marker"></i> {!! $found->lost_place !!} </span> </span>
                        <div class="ads-image">
                            <h1 class="pricetag">{!! $found->is_lost !!}</h1>
                            <ul class="bxslider">
                                @foreach($found->attachments as $file)
                                {!! Html::image($file->image, 'alt',array( 'width' => 620, 'height' => 413 )) !!}
                                @endforeach
                            </ul>
                            <div id="bx-pager">
                                @foreach($found->attachments as $file)
                                <a class="thumb-item-link" data-slide-index="0" href="#"><img src="{!! URL::asset($file->icon) !!}" alt="img"/></a>
                                @endforeach
                             </div>
                        </div>



                        <div class="Ads-Details">
                            <h5 class="list-title"><strong>Details</strong></h5>
                            <div class="row">
                                <div class="ads-details-info col-md-8">
                                    <p>{!! $found->description !!}</p>
                                </div>
                                <div class="col-md-4">
                                    <aside class="panel panel-body panel-details">
                                        <ul>
                                            <li>
                                                <p class=" no-margin "><strong>Type:</strong> &nbsp; {!! $found->is_lost !!} </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Location:</strong>&nbsp;{!! $found->lost_place  !!} </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Time:</strong>&nbsp;{!! $found->lost_time  !!} </p>
                                            </li>
                                            <li>
                                                <p class="no-margin"><strong>Date:</strong>&nbsp;{!! $found->lost_date !!} </p>
                                            </li>
                                        </ul>
                                    </aside>
                                    <div class="ads-action">
                                        <ul class="list-border">
                                            <li><a href="#"> <i class=" fa fa-user"></i> More ads by User </a></li>
                                            <li><a href="#"> <i class=" fa fa-heart"></i> Save ad </a></li>
                                            <li><a href="#"> <i class="fa fa-share-alt"></i> Share ad </a></li>
                                            <li><a href="#reportAdvertiser" data-toggle="modal"> <i class="fa icon-info-circled-alt"></i> Report abuse </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="content-footer text-left">
                                <a class="btn  btn-default" data-toggle="modal" href="#contactAdvertiser"><i class=" icon-mail-2"></i> Send a message </a>
                                <a class="btn  btn-info"><i class=" icon-phone-1"></i>{!! $found->user->phone !!} </a>
                            </div>

                            <div class="content-footer text-left">

                                @if(Auth::user() && $found->user->id == Auth::user()->id)
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                   Replies From User
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <?php $cnt = 1; ?>
                                                @foreach($found->replies as $reply)
                                                    <p style="background: honeydew"><b>Comment- <?php echo $cnt; $cnt++;?></b></p>
                                                    <p>Name: {!! $reply->name !!}</p>
                                                    <p>Email: {!! $reply->email !!}</p>
                                                    <p>Phone: {!! $reply->phone !!}</p>
                                                    <p>Comment: {!! $reply->description !!}</p>
                                                     <hr><br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-3  page-sidebar-right">
                    <aside>
                        <div class="panel sidebar-panel panel-contact-seller">
                            <div class="panel-heading">Contact Seller</div>
                            <div class="panel-content user-info">
                                <div class="panel-body text-center">
                                    <div class="seller-info">
                                        <h3 class="no-margin">{!! $found->user->name !!}</h3>
                                        <p>Location: <strong>New York</strong></p>
                                        <p> Joined: <strong>{!! $found->user->created_at->toFormattedDateString() !!}</strong></p>
                                    </div>
                                    <div class="user-ads-action">
                                        <a href="#contactAdvertiser" data-toggle="modal" class="btn   btn-default btn-block"><i class=" icon-mail-2"></i> Send a message </a>
                                        <a class="btn  btn-info btn-block"><i class=" icon-phone-1"></i> {!! $found->user->phone !!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel sidebar-panel">
                            <div class="panel-heading">Safety Tips for Buyers</div>
                            <div class="panel-content">
                                <div class="panel-body text-left">
                                    <ul class="list-check">
                                        <li> Meet seller at a public place</li>
                                        <li> Check the item before you buy</li>
                                        <li> Pay only after collecting the item</li>
                                    </ul>
                                    <p><a class="pull-right" href="#"> Know more <i class="fa fa-angle-double-right"></i> </a></p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
    </div>
    <!-- end box simple static -->




        @include('includes.reply')


</div>
<!--end body-content -->
@stop

@section('style')
    {!! Html::style('front/assets/css/style.css') !!}
    {!! Html::style('front/assets/css/style1.css') !!}
    {!! Html::style('front/assets/plugins/bxslider/jquery.bxslider.css') !!}

@stop

@section('script')
    {!! Html::script('front/assets/plugins/bxslider/jquery.bxslider.min.js') !!}
    {!! Html::script('front/assets/js/owl.carousel.min.js') !!}

    <script>
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager'
        });
    </script>
    {!! Html::script('front/assets/js/script.js') !!}
@stop
