<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray); // 自然排序會將數字看作數字比較而不是字串比較
	var_dump($testArray);
?>
