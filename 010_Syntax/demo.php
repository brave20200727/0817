<?php
$userName = "Chen";
echo "user name: $userName<br>";
echo '$userName<br>';
echo $userName;
echo "<hr>";

// 如果使用+的時候，會進行數字的運算
$x = 12;
$y = "34";
$result = $x + $y;
echo '$x = 12, $y = "34"<br>';
echo '$result = $x + $y => ';
echo "$result<br><br>";
$y = "asdasdasd34";
$result = $x + $y;
echo '$x = 12, $y = "asdasdasd34"<br>';
echo '$result = $x + $y => ';
echo "$result<br><br>";
// 如果使用.做運算會變成字串相接
$result = $x . $y;
echo '$x = 12, $y = "asdasdasd34"<br>';
echo '$result = $x . $y => ';
echo "$result<br><br>";
$y = 13;
$result = $x . $y;
echo '$x = 12, $y = 13<br>';
echo '$result = $x . $y => ';
echo "$result<br><br>";
$x = '12';
$y = '34';
$result = $x + $y;
echo '$x = "12", $y = "34"<br>';
echo '$result = $x . $y => ';
echo "$result<br><br>";
?>