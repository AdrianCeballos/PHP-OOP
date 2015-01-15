<?php
//<-----------------------LECTURE 5--------------------------------------------------->
class Animal{
    public $name;
    public $noise;
    public $color;

    
    function __construct($name,$noise,$color) {
        $this->color=$color;
        $this->name=$name;
        $this->noise=$noise;
     
    }
    function getName(){
        return $this->color ." " . $this->name;
    }
}
class Cat extends Animal {
    function __construct($name, $noise, $color,$weight) {
        parent::__construct($name, $noise, $color);
        $this->weight=$weight;
    }
    function weight(){
    return $this->weight ;
    }
} 
class Dog extends Animal {
    function __construct($name, $noise, $color,$size) {
        parent::__construct($name, $noise, $color);
        $this->size=$size;
    }
    function size(){
        return $this->size;
    }
}
$dog = new Dog("Tab","Bark","White","Small", "2lb");
$cat = new Cat("Tib","Meow", "orange", "small ", "1lb");
print "I have a" ." " . $cat->getName();
print " I have a" ." " . $dog->getName();
print " My dog is". " " . $dog->size() ;
print " My cat is". " " . $cat->weight() ;


class Celebreties{
    public $name;
    public $country;
    public $rating;

    
    function __construct($name,$country,$rating) {
        $this->rating=$rating;
        $this->name=$name;
        $this->country=$country;
     
    }
    function getName(){
        return $this->rating ." " . $this->name;
    }
}
class HoneyCocaine extends Celebreties {
    function __construct($name,$country,$rating,$swaglevel) {
        parent::__construct($name, $country, $rating);
        $this->swag=$swaglevel;
    }
    function swag(){
    return $this->swag ;
    }
} 
class TwoChainz extends Celebreties {
    function __construct($name, $country, $rating,$dank) {
        parent::__construct($name, $country, $rating);
        $this->dank=$dank;
    }
    function dank(){
        return $this->dank;
    }
}
$honey = new HoneyCocaine("xxSweg","USA","Best rapper","21");
$chainz = new TwoChainz("2CHAINZ","USA", "Greatest rapper of all time","10");
print "I found a new rapper which is" ." " . $honey->getName();
print " My all time favorite is the" ." " . $chainz->getName();
print " 2chainz is". " " . $chainz->dank() ;
print " xxSweg is". " " . $honey->swag() ;


class Car{
    public $name;
    public $country;
    public $speed;

    
    function __construct($name,$country,$speed) {
        $this->speed=$speed;
        $this->name=$name;
        $this->country=$country;
     
    }
    function getName(){
        return $this->speed ." " . $this->name;
    }
}
class Honda extends Car {
    function __construct($name,$country,$speed,$doors) {
        parent::__construct($name, $country, $speed);
        $this->door=$doors;
    }
    function doors(){
    return $this->door ;
    }
} 
class Toyata extends Car {
    function __construct($name, $country, $speed,$worth) {
        parent::__construct($name, $country, $speed);
        $this->worth=$worth;
    }
    function price(){
        return $this->worth;
    }
}
$honda = new Honda("Honda","Japan","Much fast","21");
$toy = new Toyata(" Toyata","Japan", "So speed ","10");
print " My favorite" ." " . $honda->getName();
print " My all time favorite is the" ." " . $toy->getName();
print " Number of doors the honda has:". " " . $honda->doors() ;
print " Toyota costs". " " . $toy->price() ;






































