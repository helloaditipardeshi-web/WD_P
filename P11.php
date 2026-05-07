<?php
  $str = "Hello World";
 
  // Length of string
  echo "String:  "  . $str . "<br>";
  echo "Length:  "  . strlen($str) . "<br>";
 
  // Reverse the string
  echo "Reverse:   " . strrev($str) . "<br>";
 
  // Substring (start at index 0, take 5 chars)
  echo "Substring:   " . substr($str, 0, 5) . "<br>";
 
  // Convert to uppercase and lowercase
  echo "Upper:   "   . strtoupper($str) . "<br>";
  echo "Lower:   "   . strtolower($str) . "<br>";
 
  // Find position of a word
  echo "Position of 'World':   " . strpos($str, "World") . "<br>";
 
  // Replace a word
  echo "Replace:   " . str_replace("World", "PHP", $str) . "<br>";
?>
