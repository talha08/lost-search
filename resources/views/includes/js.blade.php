<!-- Mainly scripts -->

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! Html::script('assets/plugins/jquery.js') !!}
{!! Html::script('assets/plugins/jquery.easing-1.3.pack.js') !!}
    <!-- jQuery Bootstrap -->
{!! Html::script('assets/js/script.js') !!}
    <!-- Lightbox -->
{!! Html::script('assets/js/script.js') !!}
    <!-- Theme JS -->
{!! Html::script('assets/theme/js/theme.js') !!}

    <!-- maps -->
{{--{!! Html::script('http://maps.googleapis.com/maps/api/js?sensor=false') !!}--}}
{{--{!! Html::script('assets/plugins/gmap3.min.js') !!}--}}

    <!-- maps single marker -->
{!! Html::script('assets/theme/js/map-detail.js') !!}

        <!-- addition custom script by talha -->
{!! Html::script('assets/js/script.js') !!}

   <!-- toastr -->
{!! Html::script('assets/toastr/toastr.min.js') !!}
@include('includes.toastr')



<!-- Additional Script-->
@yield('script')