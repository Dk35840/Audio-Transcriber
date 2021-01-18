<?php  
 //export.php  
 if(isset($_POST["create_word"]))  
 {  
      if(empty($_POST["heading"]) || empty($_POST['description']))  
      {  
           echo '<script>alert("Audio Transcribed is not available")</script>';  
           echo '<script>window.location = "index.php"</script>';  
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
echo "<h1><b>My first document</b></h1>";
 echo '<h1>'. $c_id.'</h1>';  
           echo $_POST["description"];  
echo "</body>";
echo "</html>";
          
      }  
 }  
 ?>  