<!DOCTYPE html>
<html>
   <head>
        @include('user.inside_head')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('user.header')
         <!-- end header section -->

         <!-- slider section -->
         @include('user.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('user.why')
      <!-- end why section -->
      
      <!-- product section -->
      @include('user.product')
      <!-- end product section -->

      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->
     @include('user.script')
   </body>
</html>