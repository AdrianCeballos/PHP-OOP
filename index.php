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
        $car2=new Car();
        $monkey1=new Monkey();
        $house1=new House();
        print $monkey1->fur;
        print $car1->price;
        print $house1->street;
        ?>
    </body>
</html>
