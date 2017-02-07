<!DOCTYPE html>
<html lang="en" >
    @include('includes.header')
    <body>
        <!-- wrapper page -->
        <div class="wrapper">
            <!-- main-header -->
            <header class="main-header">
                @include('includes.topMenu')

                @if(Route::getCurrentRoute()->getPath() != '/')
                <div class="container"><br>
                    <div class="text-center logo">
                        <div class="container">
                            <!-- Homepage type Section -->
                            <h1 style="color: white;font-size: -webkit-xxx-large;font-weight: bold;font-family: sans-serif;">
                              <span
                                  class="txt-rotate"
                                  data-period="2000"
                                  data-rotate='[ "{!! $title or "Lost Or Found" !!}" ]'>
                              </span>
                            </h1>
                            <!--End of  Homepage type -->
                        </div>
                    </div>
                </div>
                @endif

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