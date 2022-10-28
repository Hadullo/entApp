<!doctype html>
<html>


<head>
   @include('includes/.head')   
</head>

<section>
    @include('includes/.nav')
</section>

 <section>
    @include('includes/.header')
 </section>


 <section class="featured-posts">
       @yield('content')
   </section>


 <section>
    @include('includes/.footer')
 </section>

