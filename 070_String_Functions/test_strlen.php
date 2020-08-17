<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋';
  echo $s."<br>";
  echo strlen($s)."<br>";
  // strlen, substr, str_replace
  
  $s = "0123456789";
  echo str_replace("12", "34", $s)."<br>";
  echo substr($s, 3, 4)."<br>";
  $pos = strpos($s, "012");
  if($pos === false) {
    echo "Not found!";
  }
  else {
    echo "pos: $pos";
  }
?>