<?php
  // echo "Flag1 <br>";
  include("testDefine.php");
  // include("xxxtestDefine.php"); // 如果錯誤會是warning
  require("xxxtestDefine.php"); // 非要引用不可，如果錯誤就會顯示error
  // echo "Flag2";
  // include_once("testDefine.php");

  // echo test;
?>