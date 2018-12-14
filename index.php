<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mathematics and Statistics - Hunter College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="slides.js" defer></script>
</head>
<?php
    readfile("nav.php");
  ?>

<!-- Home Page Content -->
<div class="slideshow-container">
  <div class="slide fade">
    <img src="img/Outer_Automorph.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>
        Understanding Outer Automorphisms of Free Groups Using Geodesics in
        Culler-Vogtmann Outer Space
      </h1>
    </div>
  </div>
  <div class="slide fade">
    <img src="img/dolciani.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>Check Out the Dolciani Math Center</h1>
    </div>
  </div>
  <div class="slide fade">
    <img src="img/sports.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>Check Out The Latest Sporting Events</h1>
    </div>
  </div>
  <div class="slide fade">
    <img src="img/sports.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>Check Out the Latest Sporting Events</h1>
    </div>
  </div>


  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <br>

  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>
<div class="container">

  <div class="container-sm">
    <div id="news-feed">
      <h1>News</h1>
      <?php
                    include("rssFeed.php");
                ?>
    </div>
  </div>
  <div class="grid-2">
    <div class="quote">
        <p class="bold"> "A mathematician, like a painter or a poet, is a
            maker of patterns." <br> <span class="indent">-G.H. Hardy</span></p>
  </div>
  <div class="quote">
        <p class="bold">"Applied mathematics is mathematics
            for which I happen to know an application. This, I think, includes
            almost everything in mathematics." <br> -Henry O. Pollack </p> 
</div>
</div>
</div>
<?php
  readfile("footer.php");
  ?>