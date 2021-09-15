<?php
class Fruit {
    //Code starts from here
    //Properties
    public $name;
    public $color;

    //Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
}
//Object Declaration
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$banana->set_name('Banana');
$banana->set_color('Yellow');

echo "1st Fruit:-";
echo "Name: " . $apple->get_name();
echo ",";
echo "Color: " .$apple->get_color();
echo "  2nd Fruit:-";
echo "Name: " . $banana->get_name();
echo ",";
echo "Color: " .$banana->get_color();
?>