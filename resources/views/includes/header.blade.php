<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>{!! $title !!} - {!! Config::get('customConfig.names.siteName')!!}</title>

                <!-- Bootstrap core CSS -->
        {!! Html::style('css/bootstrap.min.css') !!}

                <!--Icon-fonts css-->
        {!! Html::style('font-awesome/css/font-awesome.css') !!}

                <!-- Toastr style -->
        {!! Html::style('css/plugins/toastr/toastr.min.css') !!}

                <!-- Gritter -->
        {!! Html::style('js/plugins/gritter/jquery.gritter.css') !!}

                <!-- Animate -->
        {!! Html::style('css/animate.css') !!}

                <!-- Custom styles for this template -->
        {!! Html::style('css/style.css') !!}

        @yield('style')

</head>