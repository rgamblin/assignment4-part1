<?php
  error_reporting(E_ALL);
  ini_set('display_errors',1);
  session_start();
  if (!isset($_SESSION['username'])) 
    header("Location:login.php");
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>content1.php</title>
  </head>
  
<?php
  echo "Click <a href=content1.php>here</a> to go to content 1.";
?>