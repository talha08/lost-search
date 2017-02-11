   <!-- modal Advanced search -->
    <div class="modal fade" id="modal-advanced" >
        <div class="modal-dialog ">
            <div class="modal-content">
                {!! Form::open(array('route' => 'foundAdvancedSearch','method' =>'GET', 'class' => 'form-search-list') ) !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Advanced Search</h4>
                    </div>


                    <div class="modal-body">

                        <div class="form-group">
                            <label>Type</label>
                            {!! Form::select('type', ['all' => 'All Types', 'lost' => 'Lost', 'found'=> 'Found'], null, ['class' => 'form-control','placeholder' => 'Select a Type...','required' =>'required']) !!}
                        </div>


                        <div class="form-group">
                        <label>Title</label>
                           {!!Form::text('title', '',array('class' => 'form-control','placeholder' =>  'Title goes here ....', 'required'))!!}
                        </div>

                        <div class="form-group">
                        <label>Place</label>
                            {!!Form::text('lost_place', '',array('class' => 'form-control','placeholder' =>  'Lost/Found Place ....', 'required'))!!}
                        </div>


                        <div class="form-group">
                             <label>Date</label>
                             {!!Form::text('lost_date', '',array('class' => 'form-control','id'=>'datepicker','placeholder' =>  'Lost/Found Time...', 'required'))!!}
                        </div>

                        {{--<div class="white-space-10"></div>--}}
                         {{--<div class="row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Date</label>--}}
                                    {{--{!!Form::text('lost_date', '',array('class' => 'form-control','id'=>'datepicker','placeholder' =>  'Lost/Found Time...', 'required'))!!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label>Time</label>--}}
                                   {{--{!!Form::text('lost_time', '',array('class' => 'form-control','id'=>'timepicker3','placeholder' =>  'Lost/Found Time...', 'required'))!!}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success btn-theme">Search</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div><!-- end modal forgot password -->






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