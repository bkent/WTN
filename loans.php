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
  <?php ShowHeader("loans"); ?>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">hearing</i></h2>
            <div class="row">
              <div class="col s12 m6">
                <h5>Loans</h5>
                <p class="light">We have a HUGE selection of audiobooks available to borrow for our listeners.</p>
                <p class="light">We will endevour to provide you a recording in a format to suit you (CD, MP3 or Cassette tape).</p>
                <p class="light">Please search the library below, and click on the Catalogue number to submit a request to borrow an audiobook. Alternatively, <a href="contact.php">contact us</a> for further details on arranging a loan.</p>
              </div>
              <div class="col s12 m6">
                <img class="responsive-img" src="img/DSCF4511.JPG">
              </div>
            </div>
          </div>
          <form  method='get' action='search.php'>
              <div class="row">
                <div class="input-field col s8">
                  <input id="search" type="text" name="q">
                  <label for="search">Search the library</label>
                </div>
                <div class="input-field col s4">
                  <button class="btn waves-effect waves-light" type="submit">
                    <i class="material-icons right">search</i>
                  </button>
                </div>
              </div>
            </form>
        </div>
    </div>
    </div>
  </div>

  <?php ShowFooter(); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
