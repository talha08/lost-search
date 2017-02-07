@extends('layouts.default')
@section('content')


        <!-- body-content -->
<div class="body-content clearfix" >

    <div class="block-section bg-color4">
        <div class="container">
            <div class="panel panel-md">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">

                            @include('includes.alert')


                                    <!-- buttons top -->
                            <p><a href="{!! route('login/fb') !!}" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Register with Facebook</a></p>
                            <p><a href="{!! route('login/gp') !!}" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Register with Google</a></p>
                            <!-- end buttons top -->

                            <div class="white-space-10"></div>
                            <p class="text-center"><span class="span-line">OR</span></p>


                            <!-- form Sign up -->
                            {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}
                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name', 'autofocus')) !!}
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) !!}
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
                                </div>
                                <div class="form-group">
                                    <label>Re-type Password</label>
                                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) !!}
                                </div>
                                <div class="white-space-10"></div>
                                <div class="form-group no-margin">
                                    {!! Form::submit('Register', array('class' => 'btn btn-theme btn-lg btn-t-primary btn-block', 'type'=>'submit')) !!}
                                </div>
                            {!! Form::close() !!}
                             <!-- end of form Sign up -->




                        </div>
                    </div>
                </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Already a member? &nbsp; <a href="{!! route('login') !!}" class="link-white"><strong>Log In with your free account.</strong></a></div>
        </div>
    </div>

    <div class="block-section bg-color2">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <i class="fa fa-question fa-5x box-icon"></i>
                    <h2 class=""> Why create an account?</h2>
                    <hr/>
                    <p><i class="fa fa-check"></i> Manage, create and delete your job alerts</p>
                    <p><i class="fa fa-check"></i> Access your saved jobs and notes from any computer</p>

                </div>
            </div>
        </div>
    </div>

</div>
<!--end body-content -->



@stop

@section('style')
@stop

@section('script')
@stop
