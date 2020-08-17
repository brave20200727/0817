<?php
$a = 20;
function myFunction($b) {
	echo "a = $a<br>";
	$a = 30;
	echo "a = $a<br>";
	global $a, $c; // "global $a"能夠使此function看到外面的$a,"global $c"等同於宣告一個全域的變數$c
	echo "a = $a<br>";
	return $c = ($b + $a);
}
// 請預測答案是多少?
echo myFunction(40) + $c;
?>