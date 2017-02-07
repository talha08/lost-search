@extends('layouts.default')
@section('content')


        <!-- body-content -->
<div class="body-content clearfix" >

    <div class="bg-color2">
        <div class="container">
            <div class="col-md-3 col-sm-3">

                <div class="block-section text-center ">
                    <img src="assets/theme/images/people/4.jpg" class="img-rounded" alt="">
                    <div class="white-space-20"></div>
                    <h4>{!! $user->name !!}</h4>
                    <div class="white-space-20"></div>
                    <ul class="list-unstyled">
                        <li><a href="#">{!! $user->email !!}</a></li>
                    </ul>
                    <div class="white-space-20"></div>
                    <a href="#" class="btn  btn-line soft btn-theme btn-pill btn-block">Post a Lost or Found?</a>
                    <a href="#" class="btn  btn-line soft  btn-theme btn-pill btn-block">Your Notification</a>
                </div>
            </div>


            <div class="col-md-9 col-sm-9">
                <!-- Block side right -->
                <div class="block-section box-side-account">
                    <h3 class="no-margin-top">Change Password</h3>
                    <hr/>
                    <div class="row">
                        <div class="col-md-7">
                            @include('includes.alert')
                            {!! Form::open(array('route' => 'password.doChange', 'class' => 'form-horizontal')) !!}
                                <div class="form-group">
                                    <label>New Password</label>
                                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password','required')) !!}
                                </div>
                                <div class="form-group">
                                    <label>Re-type New Password</label>
                                    {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password','required')) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Change Password', array('class' => 'btn btn-theme btn-t-primary')) !!}
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div><!-- end Block side right -->
            </div>



        </div>
    </div>
</div><!--end body-content -->




@stop

@section('style')
@stop

@section('script')
@stop
