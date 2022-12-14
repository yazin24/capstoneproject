<!DOCTYPE html>
<html>
   <head>
        @include('user.inside_head')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

      <!--Comment Section-->
      <div class="text-center">
         <h1 class="display-4 text-center">Comments</h1>

         <form method="POST" action="{{url('add_comment')}}">

            @csrf

            <textarea style="height: 180px; max-width: 600px;" placeholder="Comment Section" name="comment"></textarea>
            <br/>
            <input type="submit"class="btn btn-primary" value="Submit Comment">
         </form>
      </div>

      <div class="mt-4" style="padding-left: 20%">
         <h1 style="font-size: 20px" class="mb-3">Feedbacks</h1>

         @foreach ($comment as $comment)
         <div>
            <b>{{$comment->name}}</b>
            <p>{{$comment->comment}}</p>
            <a href="javascript::void(0)" onClick="reply(this)" data-Commentid="{{$comment->id}}" class="text-primary">Reply</a>

            @foreach($reply as $replies)
            @if($replies->comment_id == $comment->id)
            <div style="padding-left: 3%; padding-top: 10px;  padding-bottom: 10px;">
               <b>{{$replies->name}}</b>
               <p>{{$replies->reply}}</p>
               <a href="javascript::void(0)" onClick="reply(this)" data-Commentid="{{$comment->id}}" class="text-primary">Reply</a>
            </div>
            @endif
            @endforeach

         </div>
         @endforeach
      </div>


      <!-- footer start -->
      @include('user.footer')
      <!-- footer end -->
     @include('user.script')

     <script type="text/javascript">

      function reply(caller){

         document.getElementById('commentId').value = $(caller).attr('data-Commentid');

         $('.replyDiv').insertAfter($(caller));
         $('.replyDiv').show();
      }

      function reply_close(caller){
         $('.replyDiv').hide();
      }
     </script>
     <script>
      document.addEventListener("DOMContentLoaded", function(event) { 
          var scrollpos = localStorage.getItem('scrollpos');
          if (scrollpos) window.scrollTo(0, scrollpos);
      });

      window.onbeforeunload = function(e) {
          localStorage.setItem('scrollpos', window.scrollY);
      };
  </script>
   </body>
</html>