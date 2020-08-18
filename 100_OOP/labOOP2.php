<?php

class CTest {
    public $Price = 100;
    private $dataBag;
    public function __set($i, $input) {
        echo "__set is running<br>";
        $dataBag[$i] = $input;
    }
    public function __get($i) {
        echo "__get be called<br>";
        return $this->dataBag[$i];
    }
}

$obj = new CTest();
// echo $obj->Price, "<br>";
$obj->Location = "Tainan";
echo $obj->Location, "<br>";

?>