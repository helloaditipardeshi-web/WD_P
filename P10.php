
<!-- process.php -->
<?php
  $name  = $_POST["name"];
  $email = $_POST["email"];
 
  echo "<h2>Form Data Received</h2>";
  echo "<p>Name:  " . $name  . "</p>";
  echo "<p>Email: " . $email . "</p>";
?>
