<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfancyIT | Login </title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/plugins/bootstrapSocial/bootstrap-social.css') !!}
</head>
<body class="gray-bg">
<div class="loginColumns animated fadeInDown">
    <div class="row">
        <div class="col-md-6">
            <h2 class="font-bold">Welcome to InfancyIT</h2>
            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>
        </div>
        <div class="col-md-6">
            <div class="ibox-content">
                <div class="panel-heading">
                    <h2 class="text-center m-t-10"><strong> Sign In</strong> </h2>
                </div>
                @include('includes.alert')
                {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => 'form-horizontal m-t-40')) !!}
                <div class="form-group ">
                    {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus')) !!}
                </div>
                <div class="form-group ">
                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text')) !!}
                </div>
                <div class="form-group m-t-30">
                    <div class="col-sm-5">
                        <label class="cr-styled">
                            <input name="remember" type="checkbox" checked>
                            <i class="fa"></i>
                            Remember me
                        </label>
                    </div>
                    <div class="col-sm-7 text-right">
                        <a data-toggle="modal" href="#myModal2"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                    <br>
                </div>
                {!! Form::submit('Log in', array('class' => 'btn btn-primary block full-width m-b', 'type'=>'submit')) !!}


                <div class="ibox-content">
                    <h4 class="text-center"><b> OR</b></h4>
                    <a href="{!! route('login/fb') !!}" class="btn btn-block btn-social btn-facebook" >
                        <span class="fa fa-facebook"></span> Sign in with Facebook
                    </a>

                    <a href="{!! route('login/gp') !!}" class="btn btn-block btn-social btn-google" >
                        <span class="fa fa-google"></span> Sign in with Google
                    </a>
                </div>



                <p class="text-muted text-center">
                    <small>Do not have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{!! route('user.create') !!}">Create an account</a><br><br>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright &copy; InfancyIT
        </div>
        <div class="col-md-6 text-right">
            <small> &copy; 2015 - <?php echo date("Y") ?></small>
        </div>
    </div>
</div>
<!-- Modal For reset -->
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
<!-- End of Modal -->
<!-- Mainly scripts -->
{!! Html::script('js/jquery-2.1.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
</body>
</html>