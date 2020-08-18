<?php

    class Animal {
        private $weight = 1;

        function __construct($inputWeight = 1) {
            $this->weight = $inputWeight;
            echo "Object Created!<br>";
        }

        function __destruct() {
            echo "Object Destruct!";
        }

        public function makeNoise() {
            echo "Animal: ...<br>";
        }
        // public function setWeight() {

        // }
        public function getWeight() {
            return $this->weight;
        }
    }

    $obj = new Animal();
    $obj->makeNoise();
    echo $obj->getWeight() . "<br>";
    $obj = null;
    // echo $obj->weight . "<br>";
    // $obj->weight = 10;
    // echo $obj->weight;

    // 變數是有分大小寫的，然而method不分大小寫
    // echo $obj->Weight;
    // $obj->MakeNoise();

?>