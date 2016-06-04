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
        <li class="active"><a href="loans.html">Talking Book Loans</a></li>
        <li><a href="volunteer.html">Volunteer</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="info.html">Information</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="listen.html">Listen</a></li>
        <li class="active"><a href="loans.html">Talking Book Loans</a></li>
        <li><a href="volunteer.html">Volunteer</a></li>
        <li><a href="news.html">News</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="info.html">Information</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
        <?php
          include "dbfuncs.php";

          $q = $_GET["q"];
          $pagenum = $_GET["p"];
          
          if (!isset($_GET["p"]))
          {
          	$pagenum  = 1;
          } 
          
          echo "<form  method='get' action='search.php'>";
          echo "    <div class='row center'>";
          echo "      <div class='input-field col s8'>";
          echo "        <input id='search' type='text' name='q' value='$q'>";
          echo "        <label for='search'>Search the library</label>";
          echo "       </div>";
          echo "      <div class='input-field col s4'>";
          echo "        <button class='btn waves-effect waves-light' type='submit'>";
          echo "          <i class='material-icons right'>search</i>";
          echo "        </button>";
          echo "      </div>";
          echo "    </div>";
          echo "  </form>";
          
          
          $db = iConnect();
          
          $stmt = $db->query('SELECT title FROM talkinglibrary');
 
        // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          //echo $row['title'];
         // echo "<br />";
         // }
          
          $q = "%$q%";
          
          $qdata = "select distinct a.authorname, t.title, t.catalog
            from authors a, talkinglibrary t
            where a.id=t.authorid
            and (a.authorname like :q1
            or t.title like :q2
            or t.catalog like :q3)";
          $qdata .= " order by t.title,  a.authorname";
            
          $stmt = $db->prepare($qdata);
          $stmt->bindValue(':q1', $q, PDO::PARAM_STR);
          $stmt->bindValue(':q2', $q, PDO::PARAM_STR);
          $stmt->bindValue(':q3', $q, PDO::PARAM_STR);
          $stmt->execute();
          $num_rows = $stmt->rowCount(); 
                             
          //$data = $mysqli->query($qdata); 
          
          //echo "$qdata"; 
            
          //$num_rows = $stmt->num_rows;
                   
          //This is the number of results displayed per page
          $page_rows = 50;
          
          //This tells us the page number of our last page 
          $last = ceil($num_rows/$page_rows);
                  
          //this makes sure the page number isn't below one, or more than our maximum pages 
          if ($pagenum < 1) 
          { 
          	$pagenum = 1; 
          } 
          elseif ($pagenum > $last) 
          { 
          	$pagenum = $last; 
          }   
                    
          //This sets the range to display in our query 
          $max = " LIMIT " .($pagenum - 1) * $page_rows ."," .$page_rows;
          
          $qdata .= $max;
          
          if ($num_rows == 0)
          {
            echo "No results found - please try another search.";
          }
          
          
          if ($num_rows > 0)
          {
            // run the query again with the limit clause
            //$data = $mysqli->query($qdata); 
            $stmt = $db->prepare($qdata);
            $stmt->bindValue(':q1', $q, PDO::PARAM_STR);
            $stmt->bindValue(':q2', $q, PDO::PARAM_STR);
            $stmt->bindValue(':q3', $q, PDO::PARAM_STR);
            $stmt->execute();
            $num_rows = $stmt->rowCount();
            
              $i = 1;
              echo "<table>";
              echo "  <thead>";
              echo "    <tr>";
              echo "      <th data-field='catalogue'>Catalogue</th>";
              echo "      <th data-field='title'>Title</th>";
              echo "      <th data-field='author'>Author</th>";
              echo "    </tr>";
              echo "</thead>";
              echo "<tbody>";
              
          	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
          	{
          	    
          		//$row = $data->fetch_array();
          		$author = $row['authorname'];
          		$catalog = $row['catalog'];
          		$title = $row['title'];
  
              echo "<tr>";
              echo "  <td><a href='contact.php?q=$catalog&amp;t=$title&amp;a=$author'>" . $catalog . "</a></td>";
              echo "  <td>" . $title . "</td>";
              echo "  <td><a href='search.php?q=$author'>" . $author . "</a></td>";
              echo "</tr>";
            
          		$i++;
             }
             echo "</tbody>";
             echo "</table>";
              	
              	if ($num_rows==1)
              		$results = "title";
              	else
              		$results = "titles";
              	
              // First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
              if ($pagenum == 1) 
              {
              	$firstbuttonenabled = "disabled";
              }
              else
              {
              	$firstbuttonenabled = "";
              }
              
              $previous = $pagenum-1;
              
              echo "<div class='row'>";
              
              echo " <div class='center col s3'><form name='formpagefirst' id='formpagefirst' method='get' action='search.php'>
              <button class='btn waves-effect waves-light $firstbuttonenabled' type='submit'>
                   <i class='material-icons center'>fast_rewind</i>
              </button>
              <input type='hidden' name='q' value='$q' />
              <input type='hidden' name='p' value='1' /></form></div>";
              
              $previous = $pagenum-1;
              
              echo " <div class='center col s3'><form name='formpageprevious' id='formpageprevious' method='get' action='search.php'>
              <button class='btn waves-effect waves-light $firstbuttonenabled' type='submit'>
                   <i class='material-icons center'>skip_previous</i>
              </button>
              <input type='hidden' name='q' value='$q' />
              <input type='hidden' name='p' value='$previous' /></form></div>";
              
              //This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
              if ($pagenum == $last) 
              {
              	$lastbuttonenabled = "disabled";
              }
              else
              {
              	$lastbuttonenabled = "";
              }
              
              $next = $pagenum+1;
              
              echo " <div class='center col s3'><form name='formpagenext' id='formpagenext' method='get' action='search.php'>
              <button class='btn waves-effect waves-light $lastbuttonenabled' type='submit'>
                    <i class='material-icons center'>skip_next</i>
              </button>
              <input type='hidden' name='q' value='$q' />
              <input type='hidden' name='p' value='$next' /></form></div>";
              
              echo " <div class='center col s3'><form name='formpagelast' id='formpagelast' method='post' action='search.php'>
              <button class='btn waves-effect waves-light $lastbuttonenabled' type='submit'>
                   <i class='material-icons center'>fast_forward</i>
              </button>
              <input type='hidden' name='q' value='$q' />
              <input type='hidden' name='p' value='$last' /></form></div>";
              echo "</div>";
              echo "<div class='row'>";
              echo "<div class='center col s6'>Page $pagenum of $last &nbsp;</div>";
              	
            	echo "<div class='center col s6'>$num_rows $results</div>"; 
              echo "</div>";
            }
        ?>
        </div>
      </div>
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
