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
  <?php ShowHeader("contact"); ?>

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
                  <input id="email" type="email" name="email" class="validate" required="" aria-required="true">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="textarea1" name="message" class="materialize-textarea" required="" aria-required="true"><?php echo "$msg"; ?></textarea>
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

  <?php ShowFooter(); ?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
