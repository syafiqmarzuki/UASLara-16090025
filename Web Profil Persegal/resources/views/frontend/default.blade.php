<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from eyecix.com/html/sportsmagazine/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 11:47:23 GMT -->
@include('frontend.partials._head')
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
        @include('frontend.partials._header')
        <!--// Header \\-->

		<!--// Main Banner \\-->
		@yield('content')
		<!--// Main Content \\-->

		<!--// Footer \\-->
		@include('frontend.partials._footer')

	   <div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->


    @include('frontend.partials._script')
  </body>

<!-- Mirrored from eyecix.com/html/sportsmagazine/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 11:49:42 GMT -->
</html>