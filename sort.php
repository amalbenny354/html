<?php
$students=array("Prein","Renjith","Aromal","Akshay","Akash","Arjun","Aswin","
Athul");

echo "<b>Normal array : </b><br>";
print_r($students);

echo "<br><b>Ascending sort: </b><br>";
asort($students);
print_r($students);

echo "<br><b>Descending Sort: </b><br>";
arsort($students);
print_R($students);
?>