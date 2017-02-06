<!DOCTYPE html>
<html lang="en" >
    @include('includes.header')
    <body>
        <!-- wrapper page -->
        <div class="wrapper">
            <!-- main-header -->
            <header class="main-header">
                @include('includes.topMenu')
                     <div class="hero-header">
                        @yield('content')
                     </div>
            </header>

            @if(Route::getCurrentRoute()->getPath() == '/')
                 @include('includes.count')
            @endif

            <!-- end main-header -->
            @include('includes.footer')
        </div><!-- end wrapper page -->
        @include('includes.js')
    </body>
</html>