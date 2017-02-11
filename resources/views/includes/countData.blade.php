  <!-- use in Index and dashboard file -->

       <!-- body-content -->
<div class="body-content clearfix" >

    <!-- box simple static -->
    <div class="block-section bg-color1">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <h3 class="font-2x ">{!! \App\User::count() !!}</h3>
                    <h4 class="color-text">Registered Member('s)</h4>
                </div>
                <div class="col-md-4">
                    <h3 class="font-2x ">{!! \App\Post::where('is_lost', 'lost')->count() !!}</h3>
                    <h4 class="color-text">Lost Post('s)</h4>
                </div>
                <div class="col-md-4">
                    <h3 class="font-2x ">{!! \App\Post::where('is_lost', 'found')->count() !!}</h3>
                    <h4 class="color-text">Found Post('s)</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- end box simple static -->

</div>
<!--end body-content -->