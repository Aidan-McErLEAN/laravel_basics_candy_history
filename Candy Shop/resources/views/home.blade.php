@extends ('navbar')

@section ('content')

<head> <link rel="stylesheet" href="/slideshow.css"> </head>

<h1><b><i>Welcome to Candy History</i></b></h1>

<div class="breif">
<p>Everyone has ate all different types of Candy, including you but the thought never came accross our minds,
   who invented this candy and how did it start? This website will show you the most popular candy history 
   ranging from soft drinks, sweets and chocolate. Lets explore together about the history of candy!
</p>
</div>

<div class="slidershow middle">
<div class="slides">
  <input type="radio" name="r" id="r1" checked>
  <input type="radio" name="r" id="r2">
  <input type="radio" name="r" id="r3">
  <input type="radio" name="r" id="r4">
  <input type="radio" name="r" id="r5">
  <div class="slide s1">
    <img src="/images/slideshow/1.jpg" alt="">
  </div>
  <div class="slide">
    <img src="/images/slideshow/2.jpg" alt="">
  </div>
  <div class="slide">
    <img src="/images/slideshow/3.jpg" alt="">
  </div>
  <div class="slide">
    <img src="/images/slideshow/4.jpg" alt="">
  </div>
  <div class="slide">
    <img src="/images/slideshow/5.jpg" alt="">
  </div>
</div>

<div class="navigation">
  <label for="r1" class="bar"></label>
  <label for="r2" class="bar"></label>
  <label for="r3" class="bar"></label>
  <label for="r4" class="bar"></label>
  <label for="r5" class="bar"></label>
</div>
</div>

@endsection
