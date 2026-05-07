<?php
  // Display welcome message
  echo "<h2>Welcome to PHP!</h2>";
 
  // Display current date
  $date = date("d-m-Y");
  echo "<p>Today's Date: " . $date . "</p>";
 
  // Display current time
  $time = date("H:i:s");
  echo "<p>Current Time: " . $time . "</p>";
 
  // Display both together
  echo "<p>Date & Time: " . date("d-m-Y H:i:s") . "</p>";
?>

