<?php
$jsonString = '{"name":"Oebanda, Tricia jean","age":20,"email":"oebandatriciajean@gmail.com"}';

$phpObject = json_decode($jsonString);

$phpArray = json_decode($jsonString, true);

echo "Object: " . $phpObject->name . "<br>";
echo "Array: " . $phpArray['email'];
?>
