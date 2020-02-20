<?php
$badword = $_GET["badword"];
$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";



$lorem = str_replace($badword, "***", $lorem);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php-badwords</title>
  </head>
  <body>
    <p>badword: <?php  echo $badword;?></p>
    <p><?php echo $lorem;?></p>
    <p>lunghezza paragrafo: <?php echo strlen($lorem) . " "; ?></p>
  </body>
</html>
