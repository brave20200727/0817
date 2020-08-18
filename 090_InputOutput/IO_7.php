<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r"); // 開啟檔案
while (!feof($f))
{
	$line = fgets($f); // 讀取一行資料不包含換行
	$sData .= Trim($line) . "<br>";
}
fclose($f); // 關閉檔案
echo $sData;

?>
