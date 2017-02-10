<!DOCTYPE html>
<html lang="en" >
    @include('includes.header')
    <body>
        <!-- wrapper page -->
        <div class="wrapper">
            <!-- main-header -->
            <header class="main-header">
                @include('includes.topMenu')
                @yield('title')

                @if(Route::getCurrentRoute()->getPath() == '/')
                     <div class="hero-header">
                         @include('includes.index')
                     </div>
                @endif

            </header>

              @yield('content')

            <!-- end main-header -->
            @include('includes.footer')
        </div><!-- end wrapper page -->
        @include('includes.js')
    </body>
</html>