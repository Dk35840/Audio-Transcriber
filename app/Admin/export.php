<?php  
 //export.php  
 if(isset($_POST["create_word"]))  
 {  
      if(empty($_POST["description"]) || $_POST["description"]==" " )  
      {  
           echo '<script>alert("The audio description is not available")</script>';  
           echo '<script>window.location = "upload.php"</script>';  
      }  
      else  
      {  
           header("Content-type: application/vnd.ms-word");  
           header("Content-Disposition: attachment;Filename=".rand().".doc");  
           header("Pragma: no-cache");  
           header("Expires: 0");  


           echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
echo "<h1><b>Transcribed Audio </b></h1>";

echo'<h4> Audio Id '.$_POST["c_id"] .'</h4>';
echo'<h4> Audio Name'.$_POST["name"] .'</h4>';
echo'<h4> Deadline '.$_POST["deadline"] .'</h4>';


echo'<p><b> Transcribed Audio</b><hr>'. $_POST["description"] .'</p>';



echo'fsda';
echo  $_POST["description"];
echo'fsda';
echo'fsda';
echo "</body>";

echo "</html>";
          
      }  
 }  
 ?>  