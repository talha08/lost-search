@extends('layouts.default')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="vote-item">
                        @include('includes.alert')

                        {!! Form::open(array('route' => 'password.doChange', 'class' => 'form-horizontal')) !!}

                        <div class="form-group">
                            {!! Form::label('password', 'New Password*', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-4">
                                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password','required')) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Confirm Password*', array('class' => 'col-md-2 control-label')) !!}
                            <div class="col-md-4">
                                {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password','required')) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                {!! Form::submit('Reset Password', array('class' => 'btn btn-primary')) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop