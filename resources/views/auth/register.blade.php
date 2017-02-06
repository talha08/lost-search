<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfancyIT | Sign Up </title>

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
                    <h2 class="text-center m-t-10"><strong>Sign Up</strong> </h2>
                </div>
                @include('includes.alert')
                {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => 'form-signin')) !!}

                <div class="form-group ">
                        {!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name', 'autofocus')) !!}
                </div>

                <div class="form-group ">
                        {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus')) !!}
                </div>

                <div class="form-group ">
                        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
                </div>

                <div class="form-group ">
                        {!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) !!}
                </div>

                {!! Form::submit('Log in', array('class' => 'btn btn-primary block full-width m-b', 'type'=>'submit')) !!}


                <div class="ibox-content">
                    <h4 class="text-center"><b> OR</b></h4>
                    <a href="{!! route('login/fb') !!}" class="btn btn-block btn-social btn-facebook" >
                        <span class="fa fa-facebook"></span> Sign up with Facebook
                    </a>

                    <a href="{!! route('login/gp') !!}" class="btn btn-block btn-social btn-google" >
                        <span class="fa fa-google"></span> Sign up with Google
                    </a>
                </div>




                <p class="text-muted text-center">
                    <small>Already have an account?</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{!! route('login') !!}">Login</a><br><br>
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


<!-- End of Modal -->

</body>
</html>