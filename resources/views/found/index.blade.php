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

                        @foreach($founds as $found)
                            <!-- item list -->
                            <div class="box-list">
                                    <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 hidden-sm hidden-xs">
                                            <div class="img-item">
                                              {!! $found->attachments->image or 'No Image' !!}
                                                {{--<img src="{!! URL::asset($found->attachments->icon or 'No Image') !!}g" style="width:304px;height:150px;" alt="image problem, please refresh for preview">--}}
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h3 class="no-margin-top"><a href="{!! route('found.show', $found->id) !!}" class="">{!! $found->title !!} <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                                            <h5><span class="color-black"></span>Location - <span class="color-white-mute">{!! $found->lost_place !!}</span></h5>
                                            <h5><span class="color-black"></span>Category - <span class="color-white-mute">{!! $found->is_lost !!}</span></h5>

                                            <div>
                                                <span class="color-white-mute">{!! $found->created_at->diffForHumans() !!}</span> -
                                                <a href="#contactAdvertiser" data-toggle="modal"  class="btn btn-theme btn-xs btn-default">email</a> -
                                                <a href="{!! route('found.show', $found->id) !!}" class="btn btn-theme btn-xs btn-default">more ...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end item list -->
                            </div>

                        @endforeach

                        <!-- pagination -->
                       <center>
                           <nav class="" >
                               <ul class="pagination pagination-theme  no-margin">
                                   {!! $founds->render() !!}
                               </ul>
                           </nav>
                       </center>
                        <!-- pagination -->

                    </div><!-- end box listing -->
                </div>






                <div class="col-md-3">
                        <!-- sidebar -->
                </div>

            </div>
        </div>
    </div>






@include('includes.reply')









@stop

@section('style')
@stop

@section('script')
@stop
