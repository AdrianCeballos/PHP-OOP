<?php
//<-----------------------LECTURE 5--------------------------------------------------->
class Animal{
    public $name;
    public $noise;
    public $color;
    public $size;
    public $weight;
    
    function __construct($name,$noise,$color,$size,$weight) {
        $this->color=$color;
        $this->name=$name;
        $this->noise=$noise;
        $this->size=$size;
        $this->weight=$weight;
    }
    function getName(){
        return $this->color ." " . $this->name;
    }
}
class Cat extends Animal {
    function weight(){
    return $this->weight ;
    }
} 
class Dog extends Animal {
    function size(){
        return $this->size;
    }
}
$dog = new Dog("Tab","Bark","White","Small", "2lb");
$cat = new Cat("Tib","Meow", "orange", "small", "1lb");
print "I have a" ." " . $cat->getName();
print " I have a" ." " . $dog->getName();
print " My dog is". " " . $dog->size() ;
print " My cat is". " " . $cat->weight() ;


