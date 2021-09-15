<?php
//Parent Class
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

//Child Class
class Audi extends Car {
    public function intro() : string {
        return "Choose German Quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud To Be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}

//Create Objects from Child Classes
$audi = new audi("Audi");
echo $audi->intro();
echo "----------";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "----------";

$citroen = new citroen("Citroen");
echo $citroen->intro();
?>