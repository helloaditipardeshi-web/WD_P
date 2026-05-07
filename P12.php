<?php

// Creating an array
$students = array("Aditi", "Rahul", "Sneha", "Aman");

// Displaying all values using loop
echo "<h2>All Student Names</h2>";

foreach($students as $name) {
    echo $name . "<br>";
}

// Accessing array elements using index
echo "<h2>Access Using Index</h2>";

echo "First Student: " . $students[0] . "<br>";
echo "Second Student: " . $students[1] . "<br>";
echo "Third Student: " . $students[2] . "<br>";
echo "Fourth Student: " . $students[3] . "<br>";

?>