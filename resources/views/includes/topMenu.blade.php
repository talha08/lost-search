<!-- main navbar -->
{{--@if(Route::getCurrentRoute()->getPath() == '/')--}}
  {{--<nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">--}}
{{--@else--}}
 <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
{{--@endif--}}
  <div class="container">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        {{--<li class=""> <a href="#"><img src="http://static.tumblr.com/j8lh0bq/ymhkzth5d/logo.png" height="40px"  alt=""></a></li>--}}
        <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
        <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
        <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="blog.html">Articles &amp; Blog</a></li>
            <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
            <li><a href="error_404.html">Error 404</a></li>
            <li><a href="shortcode.html">Short Code</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="job_list.html">Find a Job</a></li>
            <li><a href="job_details.html">Job Details</a></li>
            <li><a href="resume_list.html">Find Resumes</a></li>
            <li><a href="resume_details.html">Resume Details</a></li>
            <li><a href="job_post_2.html">Post a Job</a></li>
            <li><a href="company_page.html">Company Profile</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="link-btn"><a href="login.html"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
        <li class="link-btn"><a href="register.html"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
      </ul>
    </div>
  </div>
</nav><!-- end main navbar -->



<!-- mobile navbar -->
<div class="container">
  <nav class="mobile-nav hidden-md hidden-lg">
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
        <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
        <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
        <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
        <li><a href="login.html"><strong>Login</strong></a></li>
        <li><a href="register.html"><strong>Register</strong></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="blog.html">Articles &amp; Blog</a></li>
            <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
            <li><a href="error_404.html">Error 404</a></li>
            <li><a href="shortcode.html">Short Code</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="job_list.html">Find a Job</a></li>
            <li><a href="job_details.html">Job Details</a></li>
            <li><a href="resume_list.html">Find Resumes</a></li>
            <li><a href="resume_details.html">Resume Details</a></li>
            <li><a href="job_post_2.html">Post a Job</a></li>
            <li><a href="company_page.html">Company Profile</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</div>
<!-- mobile navbar -->

