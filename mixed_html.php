//this is some code to incorporate php and html elements. from CS50's PHP Web Development video 

<?php

$line1 = "Hello from PHP!";
$line2 = "Another line";

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Valid HTML</title>
  </head>
  <body>
    <p><?php print($line1); ?></p>
    <p><?php print($line2); ?></p>
  </body>
</html>
