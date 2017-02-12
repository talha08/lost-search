<!-- modal need login -->
<div class="modal fade" id="contactAdvertiser">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            {!! Form::open(array('route' => 'postReply','method' =>'POST', 'class' => 'form-search-list') ) !!}
                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" >Send this job to yourself or a friend:</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        {!! Form::text('name', null,array('','class'=>'form-control','placeholder'=>'Your name here...', 'required')) !!}
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        {!! Form::email('email', null,array('','class'=>'form-control','placeholder'=>'Email here...', 'required')) !!}
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        {!! Form::text('phone', null,array('','class'=>'form-control','placeholder'=>'Phone here...', 'required')) !!}
                    </div>

                    <div class="form-group">
                        <label>Comment</label>
                        {!! Form::textarea('description', null,array('','class'=>'form-control','placeholder'=>'Description here...', 'required')) !!}
                    </div>
                    {!!  Form::token() !!}
                    {!! Form::hidden('post_id', $found->id) !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-theme">Send</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div><!-- end modal  need login -->
</div><!--end body-content -->