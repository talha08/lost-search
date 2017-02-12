<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{!! 'Lost! - '.$title   !!}</title>

        <!--favicon-->
        {{--{!! URL::asset('assets/theme/images/apple-touch-icon.png') !!}--}}
        {!! Html::favicon('assets/theme/images/favicon.ico') !!}
        <!-- bootstrap -->
        {!! Html::style('assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css') !!}

        <!-- Icons -->
        {!! Html::style('assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css') !!}

        <!-- lightbox -->
        {!! Html::style('assets/plugins/magnific-popup/magnific-popup.css') !!}


        <!-- Themes styles-->
        {!! Html::style('assets/theme/css/theme.css') !!}
        <!-- Your custom css -->
        {!! Html::style('assets/theme/css/theme-custom.css') !!}

        <!-- addition custom style by talha -->
        {!! Html::style('assets/css/style.css') !!}
        {!! Html::style('assets/css/photo_upload.css') !!}


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {!! Html::script('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}
        {!! Html::script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}
        <![endif]-->

        @yield('style')

        {!! Html::style('assets/toastr/toastr.min.css') !!}

</head>

