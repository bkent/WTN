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
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">hearing</i></h2>
            <h5 class="center">Newspaper Podcast</h5>
            <div class="center">
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="650" height="453" id="pcm_player_19836">
                <param name="movie" value="//podcastmachine.com/swf/player.swf" />
                <param name="allowFullScreen" value="true" />
                <param name="allowScriptAccess" value="always" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="flashvars" value="&amp;file=//podcastmachine.com/podcasts/19836.json&amp;width=650&amp;height=453&amp;skin=//podcastmachine.com/swf/skin_pcm1.swf&amp;fullscreen=true&amp;bgcolor=#000000&amp;playlist=bottom&amp;playlistrows=5&amp;playlistcolumns=1&amp;autostart=false&amp;subscribebutton=true&amp;downloadbutton=true" />
                <embed src="//podcastmachine.com/swf/player.swf" allowFullScreen="true" allowScriptAccess="always" quality="high" width="650" height="453" wmode="transparent" name="pcm_player_19836" type="application/x-shockwave-flash" flashvars="&amp;file=//podcastmachine.com/podcasts/19836.json&amp;width=650&amp;height=453&amp;skin=//podcastmachine.com/swf/skin_pcm1.swf&amp;fullscreen=true&amp;bgcolor=#000000&amp;playlist=bottom&amp;playlistrows=5&amp;playlistcolumns=1&amp;autostart=false&amp;subscribebutton=true&amp;downloadbutton=true" pluginspage="//www.macromedia.com/go/getflashplayer" />
              </object> 
            </div> 
            <h5 class="center">Magazine Podcast</h5>
            <div class="center">
              <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="650" height="453" id="pcm_player_19937">
                <param name="movie" value="//podcastmachine.com/swf/player.swf" />
                <param name="allowFullScreen" value="true" />
                <param name="allowScriptAccess" value="always" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="flashvars" value="&amp;file=//podcastmachine.com/podcasts/19937.json&amp;width=650&amp;height=453&amp;skin=//podcastmachine.com/swf/skin_pcm1.swf&amp;fullscreen=true&amp;bgcolor=#000000&amp;playlist=bottom&amp;playlistrows=5&amp;playlistcolumns=1&amp;autostart=false&amp;subscribebutton=true&amp;downloadbutton=true" />
                <embed src="//podcastmachine.com/swf/player.swf" allowFullScreen="true" allowScriptAccess="always" quality="high" width="650" height="453" wmode="transparent" name="pcm_player_19937" type="application/x-shockwave-flash" flashvars="&amp;file=//podcastmachine.com/podcasts/19937.json&amp;width=650&amp;height=453&amp;skin=//podcastmachine.com/swf/skin_pcm1.swf&amp;fullscreen=true&amp;bgcolor=#000000&amp;playlist=bottom&amp;playlistrows=5&amp;playlistcolumns=1&amp;autostart=false&amp;subscribebutton=true&amp;downloadbutton=true" pluginspage="//www.macromedia.com/go/getflashplayer" />
              </object>
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
