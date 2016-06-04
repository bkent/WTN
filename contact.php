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
</head>
<body>
  <nav class="yellow accent-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="img/wtn_logo.png" height="55px" /></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.html">Home</a></li>
        <li><a href="listen.html">Listen</a></li>
        <li><a href="loans.html">Talking Book Loans</a></li>
        <li><a href="volunteer.html">Volunteer</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="info.html">Information</a></li>
        <li><a href="about.html">About</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="listen.html">Listen</a></li>
        <li><a href="loans.html">Talking Book Loans</a></li>
        <li><a href="volunteer.html">Volunteer</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="info.html">Information</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">
      <?php
          include "dbfuncs.php";
          $q = $_GET["q"];
          $t = $_GET["t"];
          $a = $_GET["a"];
          if (isset($_GET["q"]))
          {
            $msg = "Request to borrow talking book, Catalogue No: $q ($t, by $a)";
          }
          else
          {
            $msg= "";
          }
      ?>

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">hearing</i></h2>
            <h5 class="center">Contact</h5>
            <form  method='post' action='sendmail.php'>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" name="message" class="materialize-textarea"><?php echo "$msg"; ?></textarea>
                  <label for="textarea1">Message</label>
                </div>
              </div>
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
            </form>
          </div>
        </div>

    </div>
    <br><br>

    </div>
  </div>

  <footer class="page-footer light-blue lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text">Find Us</h5>
          <p class="grey-text text-lighten-4">Worcester Talking News<br />Colin Chance House<br />11 Wyld's Lane<br />Worcester<br />Worcestershire<br />WR5 1DA</p>


        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Contact Us</h5>
          <h5><a class="white-text" href="tel:01905 767766"><i class="material-icons">phone</i>01905 767766</a></h5>
          <p><a class="white-text" href="mailto:info@worcestertalkingnews.org.uk"><i class="material-icons">email</i>info@worcestertalkingnews.org.uk</a></p>
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">Follow Us</h5>
          <a href="https://www.facebook.com/worcestertalkingnews"><img src="img/facebook.png" height="55px" /></a>
          <a href="https://twitter.com/worcestertn"><img src="img/twitter.png" height="50px" /></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://cyte.co.uk">Cyte</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
