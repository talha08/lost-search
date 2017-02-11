@extends('layouts.default')
@section('content')
@include('includes.alert')
@include('includes.title')

<div class="body-content clearfix" >
    <div class="bg-color1 block-section line-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Headline</th>
                            <th>Society</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($founds as $found)
                            <tr>
                                <td>{!! $found->id !!}</td>
                                <td> <a data-toggle="modal" style="color: teal;" data-target="#myModal_{{$found->id}}" >{!!  str_limit($found->title,30) !!}</a></td>
                                <td>{!! $found->id !!}</td>
                                <td>
                                    <a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('post.edit',$found->id)!!}"  style="margin-right: 3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn"  data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $found->id!!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </div>
</div>
</div><!--end body-content -->





    <!-- Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {!! Form::open(array('route' => array('post.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
                    <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                    {!! Form::submit('Yes, Delete', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@stop


@section('style')

    {!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

    {{--<style>--}}

    {{--.modal-dialog  {width:75%;}--}}
    {{--</style>--}}

@stop

@section('script')

    {!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}


    //for Datatable
    <script type="text/javascript">

        $(document).ready(function() {
            $('#datatable').dataTable();
        });
    </script>



    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            /* do not add datatable method/function here , its always loaded from footer -- masiur */
            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('post.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });

        });
    </script>


@stop
