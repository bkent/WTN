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
  <?php ShowHeader("listen"); ?>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
        <?php
          include "dbfuncs.php";

          //$q = $_GET["q"];
          $pagenum = $_GET["p"];
          
          if (!isset($_GET["p"]))
          {
          	$pagenum  = 1;
          }       
          
          $db = iConnect();
          
          //$q = "%$q%";
          
          $qdata = "select * from episodes";
          $qdata .= " order by recordeddt desc";
            
          $stmt = $db->prepare($qdata);
          $stmt->execute();
          $num_rows = $stmt->rowCount(); 
          
          $total_num_rows = $num_rows;
                             
          //$data = $mysqli->query($qdata); 
          
          //echo "$qdata"; 
            
          //$num_rows = $stmt->num_rows;
                   
          //This is the number of results displayed per page
          $page_rows = 5;
          
          //This tells us the page number of our last page 
          $last = ceil($total_num_rows/$page_rows);
          
          echo "last=$last";
                  
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
            echo "No results found - please email info@worcestertalkingnews.org.uk for support";
          }
          
          
          if ($num_rows > 0)
          {
            // run the query again with the limit clause
            //$data = $mysqli->query($qdata); 
            $stmt = $db->prepare($qdata);
            $stmt->execute();
            $num_rows = $stmt->rowCount();
            
              $i = 1;
              echo "<table>";
              echo "  <thead>";
              echo "    <tr>";
              echo "      <th data-field='title'>Episode</th>";
              echo "      <th data-field='synopsis'>Description</th>";
              echo "      <th data-field='url'></th>";
              echo "    </tr>";
              echo "</thead>";
              echo "<tbody>";
              
          	while($row = $stmt->fetch(PDO::FETCH_ASSOC))
          	{
          		$title = $row['title'];
              $synopsis = $row['synopsis'];
              $url = $row['url'];
              $norm = $row['type'];
              
              if ($norm == "M")
              {
                $colour = "orange";
              }
              else
              {
                $colour = "red";
              }
              
              if ($url == "")
              {
                $playenabled = "disabled";
              }
              else
              {
                $playenabled = "";
              }
  
              echo "<tr>";
              echo "  <td>" . $title . "</td>";
              echo "  <td>" . $synopsis . "</td>";
              echo "  <td><div class='center col s3'><form action='" . $url . "'>
              <button class='btn waves-effect waves-light " . $colour . " $playenabled' type='submit'>
                    <i class='material-icons center'>play_arrow</i>
              </button>
              </form></div>";
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
              
              echo " <div class='center col s3'><form name='formpagefirst' id='formpagefirst' method='get' action='listen.php'>
              <button class='btn waves-effect waves-light $firstbuttonenabled' type='submit'>
                   <i class='material-icons center'>fast_rewind</i>
              </button>
              <input type='hidden' name='p' value='1' /></form></div>";
              
              $previous = $pagenum-1;
              
              echo " <div class='center col s3'><form name='formpageprevious' id='formpageprevious' method='get' action='listen.php'>
              <button class='btn waves-effect waves-light $firstbuttonenabled' type='submit'>
                   <i class='material-icons center'>skip_previous</i>
              </button>
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
              
              echo " <div class='center col s3'><form name='formpagenext' id='formpagenext' method='get' action='listen.php'>
              <button class='btn waves-effect waves-light $lastbuttonenabled' type='submit'>
                    <i class='material-icons center'>skip_next</i>
              </button>
              <input type='hidden' name='p' value='$next' /></form></div>";
              
              echo " <div class='center col s3'><form name='formpagelast' id='formpagelast' method='get' action='listen.php'>
              <button class='btn waves-effect waves-light $lastbuttonenabled' type='submit'>
                   <i class='material-icons center'>fast_forward</i>
              </button>
              <input type='hidden' name='p' value='$last' /></form></div>";
              echo "</div>";
              echo "<div class='row'>";
              echo "<div class='center col s6'>Page $pagenum of $last &nbsp;</div>";
              	
            	echo "<div class='center col s6'>$total_num_rows $results</div>"; 
              echo "</div>";
            }
        ?>
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
