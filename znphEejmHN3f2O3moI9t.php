<!DOCTYPE html>
<html lang="en">
  <body>     
  <form action='insert.php' method='post'">
    <p>Passphrase</p>
    <input type="password" name="passphrase" id="passphrase" />
    <p>Title</p>
    <input type="text" name="title" id="title" value="Talking Newspaper <?php echo date("d/m/Y"); ?>" style="width: 600px;" />
    <p>Type (N-newspaper, M-magazine)</p>
    <input type="text" name="type" id="type" value="N"" />
    <p>Date (YYYY-mm-dd)</p>
    <input type="text" name="recordeddate" id="recordeddate" value="<?php echo date("Y-m-d"); ?>"  />
    <p>Description</p>
    <textarea name="descr" id="descr" rows="10" cols="100" ></textarea>
    <p>Archive URL</p>
    <input type="text" name="url" id="url" style="width: 600px;" value="https://archive.org/details/" />
    <input type="submit" value="Enter" />
    <br/><br/>
    <?php
      include "dbfuncs.php";
      $db = iConnect();
          
      $qdata = "select * from episodes";
      $qdata .= " where url = ''";
      $qdata .= " order by recordeddt desc";
      
      $stmt = $db->prepare($qdata);
      $stmt->execute();
      
      echo '<select name="titletoupdate" id="titletoupdate">
        <option value="Please_Select">Please_Select</option>';
      while($row = $stmt->fetch(PDO::FETCH_ASSOC))
    	{
    		$title = $row['title'];
        echo '<option value="' . $title . '">' . $title . '</option>';
      }
      echo '</select>';
   ?>
  </form>                   
  </body>
</html>
