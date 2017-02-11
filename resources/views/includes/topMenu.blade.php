@include('includes.needLogin')

<!-- main navbar -->
{{--@if(Route::getCurrentRoute()->getPath() == '/')--}}
  {{--<nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">--}}
{{--@else--}}
 <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
{{--@endif--}}
  <div class="container">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class=""><a href="{!! route('index') !!}"><strong>Home</strong></a></li>
        <li class=""><a href="{!! route('post.index') !!}"><strong>All Posts</strong></a></li>
        <li class=""><a href="{!! route('allLostPost') !!}"><strong>Lost</strong></a></li>
        <li class=""><a href="{!! route('allFoundPost') !!}"><strong>Found</strong></a></li>
        @if(! Auth::user())
        <li class="link-btn1"><a href="#need-Login" data-toggle="modal" ><span class="btn btn-theme  btn-pill btn-xs btn-line">New Post</span></a></li>
        @else
          <li class="link-btn1"><a href="{!! route('post.create') !!}" ><span class="btn btn-theme  btn-pill btn-xs btn-line">New Post</span></a></li>
        @endif
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if( Auth::user())
        <li class="dropdown">
          <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
            <img src="{!! URL::asset('assets/theme/images/people/4.jpg') !!}" alt="" class="img-profile"> &nbsp; Jhon <b class="caret"></b>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{!! route('post.mypost') !!}"> My Post </a></li>
            <li><a href="#"> Notifications <span class="badge ">5</span></a></li>
            <li><a href="{!! route('password.change') !!}"> Change Password</a></li>
          </ul>
        </li>

        <li class="link-btn"><a href="{!! route('logout') !!}"><span class="btn btn-theme  btn-pill btn-xs btn-line">Logout</span></a></li>
        @else

          <li class="link-btn"><a href="{!!  route('login') !!}"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
          <li class="link-btn"><a href="{!!  route('user.create') !!}"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
        @endif


      </ul>
    </div>
  </div>
</nav><!-- end main navbar -->





















<!-- mobile navbar -->
<div class="container">
  <nav class="mobile-nav hidden-md hidden-lg">

    @if(Auth::user())
    <ul class="nav navbar-nav nav-block-left">
      <li class="dropdown">
        <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
          <img src="{!! URL::asset('assets/theme/images/people/4.jpg') !!}" alt="" class="img-profile"> &nbsp; Jhon <b class="caret"></b>
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="{!! route('post.mypost') !!}"> My Post </a></li>
          <li><a href="#"> Notifications <span class="badge ">5</span></a></li>
          <li><a href="{!! route('password.change') !!}"> Change Password</a></li>
          <li><a href="{!! route('logout') !!}"> Logout</a></li>
        </ul>
      </li>
    </ul>
    @endif

    <a href="#" class="btn-nav-toogle first">
      <span class="bars"></span>
      Menu
    </a>
    <div class="mobile-nav-block">
      <h4>Navigation</h4>
      <a href="#" class="btn-nav-toogle">
        <span class="barsclose"></span>
        Close
      </a>

      <ul class="nav navbar-nav">
        <li class=""><a href="{!! route('index') !!}"><strong>Home</strong></a></li>
        <li class=""><a href="{!! route('post.index') !!}"><strong>All Post</strong></a></li>
        <li class=""><a href="{!! route('allLostPost') !!}"><strong>Lost</strong></a></li>
        <li class=""><a href="{!! route('allFoundPost') !!}"><strong>Found</strong></a></li>
        <li  class=""><a  href="#need-Login" data-toggle="modal" ><strong>New Post</strong></a></li>
        @if(! Auth::user())
          <li><a href="{!! route("login") !!}"><strong>Login</strong></a></li>
          <li><a href="{!! route("user.create") !!}"><strong>Register</strong></a></li>
        @endif
      </ul>
    </div>
  </nav>
</div><!-- mobile navbar -->

