<?php
	$contents = file_get_contents('data.txt'); // 將檔案中的資料讀出成為一串字串，其中是有包含換行
	// echo (str_replace("\r\n", "<br />", $contents));
	echo $contents;
?>