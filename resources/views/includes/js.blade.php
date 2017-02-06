
<!-- Mainly scripts -->




 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery.js"></script>
    <script src="assets/plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="assets/theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="assets/plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="assets/theme/js/map-detail.js"></script>
    <script src="assets/js/script.js"></script>



<!-- toastr -->
{!! Html::script('assets/toastr/toastr.min.js') !!}
@include('includes.toastr')



<!-- Additional Script-->
@yield('script')