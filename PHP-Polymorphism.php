<?php
interface Machine {
    public function calcTask();
}
//Function To perform 1st Operation
class Circle implements Machine {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function calcTask() {
        return $this->radius * $this->radius * pi();
    }
}
//Function To perform 2nd Operation
class Rectangle extends Circle {
    private $width;
    private $height;
    public function __construct($width,$height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function calcTask() {
        return $this->width * $this->height;
    }
}
$mycirc = new Circle(3);
$myrect = new Rectangle(4,4);
echo $mycirc->calcTask();
echo $myrect->calcTask();
?>