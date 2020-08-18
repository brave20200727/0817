<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' );
// var_dump($lines);
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . htmlspecialchars ( $line ) . "<br />\n";
	// echo "#<i>$line_num</i> : " . $line  . "<br />\n";
}

?> 