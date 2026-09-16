<?php
$jsonString = '{"name":"Famor, Princess Ann L.","age":20,"email":"princessannfamo621@gmail.com"}';

$phpObject = json_decode($jsonString);

$phpArray = json_decode($jsonString, true);

echo "Object: " . $phpObject->name . "<br>";
echo "Array: " . $phpArray['email'];
?>
