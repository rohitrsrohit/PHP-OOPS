<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name,$color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The Fruit is {$this->name} and the Color is {$this->color}.";
    }
}

//Strawberry is inerited from Fruit Class
class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?";
    }
}

$strawberry = new Strawberry("Strawberry","Red");
$strawberry->message();
$strawberry->intro();
?>