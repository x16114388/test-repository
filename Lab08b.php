<!DOCTYPE html>
<html>
<body>
<?php

  if( $_POST["title"])
  {      echo "Your favourite book is  ". $_POST['title'] ;
 }
  else {
    echo "you didn't type in a book name. Refresh and try again";
  }
  
?>
  
</body>
</html>
