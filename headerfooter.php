<?php

function ShowHeader($active) 
{
    switch($active)
	{
		case "index":
			$index =  'class="active"';
        break;
        case "listen":
			$listen =  'class="active"';
        break;
        case "loans":
			$loans =  'class="active"';
        break;
        case "volunteer":
			$volunteer =  'class="active"';
        break;
        case "news":
			$news =  'class="active"';
        break;
        case "news":
			$news =  'class="active"';
        break;
        case "about":
			$news =  'class="active"';
        break;
        case "info":
			$info =  'class="active"';
        break;		
	}
		
	echo '<nav class="yellow accent-2" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="img/wtn_logo.png" height="55px" /></a>
      <ul class="right hide-on-med-and-down">
        <li '. $index .'><a href="index.php">Home</a></li>
        <li '. $listen .'><a href="listen.php">Listen</a></li>
        <li '. $loans .'><a href="loans.php">Talking Book Loans</a></li>
        <li '. $volunteer .'><a href="volunteer.php">Volunteer</a></li>
        <li '. $news .'><a href="news.php">News</a></li>
        <li '. $about .'><a href="about.php">About</a></li>
        <li '. $info .'><a href="info.php">Information</a></li>
        <li '. $contact .'><a href="contact.php">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li '. $index .'><a href="index.php">Home</a></li>
        <li '. $listen .'><a href="listen.php">Listen</a></li>
        <li '. $loans .'><a href="loans.php">Talking Book Loans</a></li>
        <li '. $volunteer .'><a href="volunteer.php">Volunteer</a></li>
        <li '. $news .'><a href="news.php">News</a></li>
        <li '. $about .'><a href="about.php">About</a></li>
        <li '. $info .'><a href="info.php">Information</a></li>
        <li '. $contact .'><a href="contact.php">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
   </nav>';
}

function ShowFooter() 
{
    echo '<footer class="page-footer light-blue lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text">Find Us</h5>
          <p class="grey-text text-lighten-4">Worcester Talking News<br />Colin Chance House<br />11 Wyld\'s Lane<br />Worcester<br />Worcestershire<br />WR5 1DA</p>
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
  </footer>';
}



?>