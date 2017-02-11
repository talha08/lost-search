<!-- modal need login -->
<div class="modal fade" id="need-Login">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >You must login to create new Post</h4>
            </div>
            <div class="modal-footer text-center">
                <a href="{!! route('login') !!}" class="btn btn-default btn-theme" >Login</a>
                <a href="{!! route('user.create') !!}" class="btn btn-success btn-theme">Create account (it's free)</a>
            </div>

        </div>
    </div>
</div>
<!-- end modal  need login -->