<!DOCTYPE html>
<html lang="en">

@include('includes.header')
<body class="pace-done fixed-sidebar skin-4">

<div id="wrapper">
@include('includes.sideBar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('includes.topMenu')

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-12">
                <h2 class="text-center"><b>{!! $title or "InfancyIT" !!}</b></h2>
            </div>
        </div>



         @yield('content')

         @include('includes.footer')


    </div>
</div>
      @include('includes.js')
</body>
</html>