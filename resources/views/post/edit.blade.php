@extends('layouts.default')
@section('content')
@include('includes.title')


        <!-- body-content -->
<div class="body-content clearfix" >

    {{--<div class="bg-color2 block-section line-bottom">--}}
    {{--<div class="container">--}}
    {{--<h1 class="text-center no-margin">Post a Job</h1>--}}
    {{--</div>--}}
    {{--</div>--}}

    <div class="bg-color1 block-section line-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <!-- form post a job -->
                    {!!Form::model($found,['route' => ['post.update',$found->id], 'method' => 'put' ])!!}
                    <div class="form-group">
                        <label>Category</label>
                        {!!Form::select(' is_lost', $is_lost, null ,array('class' => 'select2', 'autofocus', 'required'))!!}
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        {!!Form::text('title', null,array('class' => 'form-control','placeholder' =>  'Title goes here ....'))!!}
                    </div>

                    <div class="form-group">
                        <label>Lost/Found Place</label>
                        {!!Form::text('lost_place', null,array('class' => 'form-control','placeholder' =>  'Lost/Found Place ....'))!!}
                    </div>
                    <div class="form-group">
                        <label>Lost/Found Date</label>
                        {!!Form::text('lost_date', null,array('class' => 'form-control','id'=>'datepicker','placeholder' =>  'Lost/Found Date...'))!!}
                    </div>


                    <div class="form-group">
                        <label>Lost/Found Time</label>
                        {!!Form::text('lost_time',null,array('class' => 'form-control','id'=>'timepicker3','placeholder' =>  'Lost/Found Time...'))!!}
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        {!!Form::textarea('description', null,array('class' => 'form-control','placeholder' =>  'Description goes here .....'))!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('file', 'Photo Upload :', array('class' => 'control-label')) !!} <br>
                        {!! Form::file('file[]', array('id' =>'choose', 'multiple'=>true)) !!}
                    </div><br/>
                    <div id="uploadPreview"></div><br><br>


                    <p>Applications will be emailed to: <a href="#">your@email.com</a> – <a href="#">change email</a></p>

                    <div class="form-group ">
                        <button class="btn btn-t-primary btn-theme">Continue</button>
                    </div>


                    {!! Form::close() !!}
                            <!-- end form post a job -->
                </div>
            </div>
        </div>
    </div>
</div><!--end body-content -->


@stop

@section('style')

    {!! Html::style('assets/timepicker/bootstrap-datepicker.min.css') !!}
    {!! Html::style('assets/summernote/summernote.css') !!}
    {!! Html::style('assets/timepicker/bootstrap-timepicker.min.css') !!}
    {!! Html::style('assets/select2/select2.css') !!}

    <style>
        #uploadPreview img {
            height: 64px;
        }
    </style>


    @stop


    @section('script')


    {!! Html::script('assets/timepicker/bootstrap-timepicker.min.js') !!}
    {!! Html::script('assets/summernote/summernote.min.js') !!}
    {!! Html::script('assets/timepicker/bootstrap-datepicker.js') !!}
    {!! Html::script('assets/select2/select2.min.js') !!}

            <!--photo upload-->



    <script type="text/javascript">

        jQuery(document).ready(function() {

            // Select2
            jQuery(".select2").select2({
                width: '100%'
            });


            $('.summernote').summernote({
                height: 200,                 // set editor height

                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor

                focus: true                 // set focus to editable area after initializing summernote
            });


            // Date Picker
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker2').datepicker();

            // Time Picker
            jQuery('#timepicker3').timepicker({minuteStep: 15});


        });

    </script>

@stop