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
  <?php ShowHeader("about"); ?>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">hearing</i></h2>
            <div class="row">
              <div class="col s12 m6">
                <h5>About</h5>
                <p class="light">Worcester Talking News is a UK charity, and since 1978 has provided recordings and listener equipment FREE to visually impaired people.</p>
                <p class="light">It is compiled weekly by a team of volunteers, at a studio in Colin Chance House, Worcester.</p>
                <p class="light">All recordings and listener equipment are supplied FREE to visually impaired people.</p>
                <p class="light">We also provide FREE bi-monthly magazines and offer FREE loans of talking books from an extensive in-house library.</p>
                <p class="light">If you know of anyone who would benefit from this service please <a href="contact.html">contact us</a>.</p>
                <!-- <div class="row center hide-on-med-and-up">
                  <a href="gallery" id="download-button" class="btn-large waves-effect waves-light light-blue">Photo Gallery</a>
                </div> -->            
              </div>
              <div class="col s12 m6">
                <!-- <img class="responsive-img" src="img/DSCF4495.JPG"> -->
                <iframe width="560" height="315" src="https://www.youtube.com/embed/R16dBhzMm_M" frameborder="0" allowfullscreen></iframe>
                <br/>
                <img class="responsive-img" src="img/DSCF5259.JPG">
              </div>  
            </div>
          </div>
        </div>

    </div>
    <br><br>

    </div>
  </div>

  <?php ShowFooter(); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
