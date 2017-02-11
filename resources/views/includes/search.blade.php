{!! Form::open(array('route' => 'foundSearch','method' =>'GET', 'class' => 'form-search-list') ) !!}
<div class="row">
    <div class="col-sm-5 col-xs-6 ">
        <div class="form-group">
            <label class="color-white">What</label>
            {!! Form::text('keyword', null,array('','class'=>'form-control','placeholder'=>'Content Name...','required')) !!}
        </div>
    </div>

    <div class="col-sm-5 col-xs-6 ">
        <div class="form-group">
            <label class="color-white">Where</label>
            {!! Form::text('location', null,array('','class'=>'form-control','placeholder'=>'city, province, or region...', 'required')) !!}
        </div>
    </div>
    <div class="col-sm-2 col-xs-12 ">
        <div class="form-group">
            <label class="hidden-xs">&nbsp;</label>
            {!! Form::submit('Search', array('class' => 'btn btn-block btn-theme  btn-success')) !!}
        </div>
    </div>
</div>
<p class="text-right"><a href="#modal-advanced" data-toggle="modal" class="link-white">Advanced Search</a></p>
{!! Form::close() !!}