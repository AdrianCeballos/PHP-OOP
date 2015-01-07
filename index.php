<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ayyy lmao</title>
    </head>
    <body>
        <?php
        class Car{
            public $name="Honda";
            public $price="2";
            public $color="green";
            public $miles="21";
            
            function mileprice(){
                return "{$this->name}".
                        "{$this->color}";
            }
        }
        class House{
            public $street="Lake";
            public $rooms="21";
            public $price="3";
            public $ayy="lmao";
        }
        class Monkey{
           public $age="21";
            public $fur="brown";
            public $price="12";
            public $ayy="lmao";
        }
        
        $car1=new Car();
        $car1->color="Red";
        $car1->name="Honda";
        $monkey1=new Monkey();
        $house1=new House();
        print $monkey1->fur;
        print "My car is a {$car1->mileprice()}.";
        print $house1->street;
        ?>
    </body>
</html>
