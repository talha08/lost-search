
<!-- Mainly scripts -->
{!! Html::script('js/jquery-2.1.1.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}


<!-- Custom and plugin javascript -->
{!! Html::script('js/inspinia.js') !!}
{!! Html::script('js/plugins/pace/pace.min.js') !!}

<!-- toastr -->
{!! Html::script('js/plugins/toastr/toastr.min.js') !!}
@include('includes.toastr')



<!-- Additional Script-->
@yield('script')