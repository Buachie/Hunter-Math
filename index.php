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
    <img src="img/banner.png" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>
        Welcome to the Math and Statistics Department at Hunter College!
      </h1>
    </div>
  </div>
  <div class="slide fade">
    <a href="http://www.hunter.cuny.edu/dolciani">
    <img src="img/dolciani.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>Check Out the Dolciani Math Center</h1>
    </div>
</a>
  </div>
  <div class="slide fade">
    <img src="img/department_office.jpg" alt="" />
    <div class="mask"></div>
    <div class="text">
      <h1>Come Visit Us!</h1>
      <p>Our department office is located on the 9th floor of Hunter East</p>
    </div>
  </div>
</div>



  <br>

<div class="container">

  <div class="container-sm">
    <div id="news-feed">
      <h1>News (American Math Association PhD Plus Feed)</h1>
      <?php
                    include("rssFeed2.php");
                ?>
    </div>
    <hr>
<div class="quote">
        <p class="bold"> "A mathematician, like a painter or a poet, is a
            maker of patterns." <br> <span class="indent">-G.H. Hardy</span></p>
  </div>
  <div class="quote">
        <p class="bold">"Applied mathematics is mathematics
            for which I happen to know an application. This, I think, includes
            almost everything in mathematics." <br> <span class="indent">-Henry O. Pollack</span></p> 
</div>
<div class="quote">
  <p class="bold"> "I like to think of statistics as the
            science of learning from data... It presents exciting opportunities
            for those who work as professional statisticians. Statistics is
            essential for the proper running of government, central to decision
            making in industry, and a core component of modern educational
            curricula at all levels." <br><span class="indent">-Jon Kettenring ASA President, 1997</span></p>
</div>
<div class="quote">
<p class="bold">
            “The best thing about being a statistician is that you get to play in
            everyone else’s backyard.” <br><span class="indent">-John Tukey, Bell Labs, Princeton
            University</span>
            </p></div>

</div>
  </div>
  
    
<?php
  readfile("footer.php");
  ?>