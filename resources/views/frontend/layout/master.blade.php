<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include("frontend.layout.partials.head")

<body>
    @include("frontend.layout.partials.header")

    @yield("content")

    @include("frontend.layout.partials.footer")
      <div class="scroll_top">
         <span class="btn btn-info text-center text-light">
         <i class="bi bi-arrow-up"></i>
         </span>
      </div>
    @include("frontend.layout.partials.scripts")
   </body>
</html>
