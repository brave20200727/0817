<?php
$myArray['myName'] = 'Jeremy';
$myArray['myHeight'] = 191;
$myArray['myWeight'] = 91;
$myArray['myWeight'] = 92;

// var_dump($myArray);

echo "Hello! My name is " . $myArray['myName'] . "<br>";
echo "Hello! My myHeight is " . $myArray['myHeight'] . "<br>";
echo "Hello! My myWeight is " . $myArray['myWeight'];
?>

<pre><?php var_dump($myArray); ?></pre>