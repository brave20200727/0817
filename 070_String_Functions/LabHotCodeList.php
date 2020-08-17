<?php
$sData = "908872526535442041985072568716";
$result = "1234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);
	$result = $ch . str_replace($ch, "", $result);
	// echo $result."&nbsp&nbsp&nbsp&nbsp&nbsp".$sData."<br>";

}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5);
?>