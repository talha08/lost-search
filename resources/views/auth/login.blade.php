@extends('layouts.default')
@section('content')
@include('includes.title')

 <!-- body-content -->
<div class="body-content clearfix" >

    <div class="block-section bg-color4">
        <div class="container">
            <div class="panel panel-md">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">



                            <!-- buttons top -->
                            <p><a href="{!! route('login/fb') !!}" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Login with Facebook</a></p>
                            <p><a href="{!! route('login/gp') !!}" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Login with Google</a></p>
                            <!-- end buttons top -->

                            <div class="white-space-10"></div>
                            <p class="text-center"><span class="span-line">OR</span></p>

			    Email: talha@mail.com Password: a
                            @include('includes.alert')
                            <!-- form login -->
                            {!! Form::open(array('route' => 'login', 'method' => 'post')) !!}
                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus','required')) !!}
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text','required')) !!}
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="checkbox flat-checkbox">
                                                <label>
                                                    <input name="remember" type="checkbox" checked>
                                                    <span class="fa fa-check"></span>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 text-right">
                                            <a data-toggle="modal" href="#myModal2"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group no-margin">
                                    {!! Form::submit('Log in', array('class' => 'btn btn-theme btn-lg btn-t-primary btn-block', 'type'=>'submit')) !!}
                                </div>
                            {!! Form::close() !!}
                            <!-- form login -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="{!! route('user.create') !!}" class="link-white"><strong>Create an account free</strong></a></div>
        </div>
    </div>





    {{--<!-- box bottom -->--}}
    {{--<div class="block-section bg-color2">--}}
        {{--<div class="container text-center">--}}
            {{--<i class="fa fa-mobile-phone fa-5x box-icon"></i>--}}
            {{--<h2 class=""> Find jobs with your phone</h2>--}}

            {{--<p>Download the JobPlanet app from the</p>--}}
            {{--<a href="#" class="btn btn-theme btn-default"><i class="fa fa-android bordered-right dark"></i> Android</a>--}}
            {{--<span class="space-inline-10"></span>--}}
            {{--<a href="#" class="btn btn-theme btn-default"><i class="fa fa-apple bordered-right dark"></i> Iphone</a>--}}
        {{--</div>--}}
    {{--</div><!-- end box bottom -->--}}





<!-- Modal For Forgot Pass (reset) -->
<div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Forgot Password ?</h4>
                <small class="font-bold">Recover Your account with your email</small>
            </div>
            <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                {!! Form::open(array('action' => 'RemindersController@postEmail', 'method' => 'post')) !!}
                {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off')) !!}
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@stop

@section('style')
@stop

@section('script')
@stop
