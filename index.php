<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Worcester Talking News</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
  <style>    
    nav ul li a{ color: black; }    
  </style>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  
    ga('create', 'UA-76948958-1', 'auto');
    ga('send', 'pageview');
  </script>
  <?php include "headerfooter.php"; ?>
</head>
<body>
  <?php ShowHeader("index"); ?>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Worcester Talking News</h1>
      <div class="row center">
        <h5 class="header col s12 light">Bringing local news to visually impaired listeners</h5>
      </div>
      <div class="row center">
        <a href="listen.php" id="download-button" class="btn-large waves-effect waves-light orange">Listen Now</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">hearing</i></h2>
            <h5 class="center">Mission</h5>
            
            <p class="light">Worcester Talking News is a UK charity, and since 1978 has provided recordings and listener equipment FREE to visually impaired people.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings_voice</i></h2>
            <h5 class="center">Newspaper</h5>

            <p class="light">Our 90 minute recording of local news and features is recorded weekly by a team of volunteers at our studios in Colin Chance House, Worcester</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">play_circle_outline</i></h2>
            <h5 class="center">Other Services</h5>

            <p class="light">In addition to the weekly newspaper, we produce a bi-monthly magazine and offer FREE loans of talking books from an extensive in-house library.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>

    <div class="section">

    </div>
  </div>

  <?php ShowFooter(); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
