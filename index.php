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
                return "{$this->color}". " " .
                        "{$this-> name}";
            }
        }
        class House{
            public $street="Lake";
            public $rooms="21";
            public $price="3";
            public $ayy="lmao";
            function ayyroom(){
                return "{$this->ayy}". " " .
                        "{$this-> rooms}";
            }
        }
        class Monkey{
            public $age="21";
            public $fur="brown";
            public $price="12";
            public $ayy="lmao";
            function profile(){
                return "{$this->age}". " " .
                        "{$this-> fur}";
            }
        }
        
        $car1=new Car();
        $car1->color="red";
        $car1->name="Honda";
        $monkey1=new Monkey();
        $house1=new House();
        print $monkey1->fur;
        print " My car is a {$car1->mileprice()}.  ";
        print " Ayy {$house1->ayyroom()}.  ";
        print " Mokey that was {$monkey1->profile()}.  ";
        print $house1->street;
        //________________[LECTURE 2]________________________________________
        // [Example 1]
        class Ayy{
            public $meme;
            public $nice;
            public $keke;
            public $top;
            
               function __construct($meme,$nice,$keke,$top){
                    $this->meme=$meme;
                    $this->nice=$nice;
                    $this->keke=$keke;
                    $this->top=$top;
        }
                function ayylmao(){
                    return "{$this->nice}". " ".
                            "{$this->meme}";
                }
        }
        $aye = new Ayy("meme","dank", "keke","top");
        print " Wow {$aye->ayylmao()}\n";
        class Kitty{
            public $fur;
            public $color;
            public $paws;
            public $claws;
            
               function __construct($fur,$color,$paws,$claws){
                    $this->fur=$fur;
                    $this->color=$color;
                    $this->paws=$paws;
                    $this->claws=$claws;
        }
                function kitkat(){
                    return "{$this->color}". " ".
                            "{$this->fur}";
                }
        }
        $cat = new Kitty("fur","color", "paws","claws");
        print " Cat be {$cat->kitkat()}\n";
         class Shibe{
            public $fur;
            public $color;
            public $paws;
            public $claws;
            
               function __construct($fur,$color,$paws,$claws){
                    $this->fur=$fur;
                    $this->color=$color;
                    $this->paws=$paws;
                    $this->claws=$claws;
        }
                function wowmuch(){
                    return "{$this->color}". " ".
                            "{$this->fur}";
                }
        }
        $wow = new Shibe("fluffy","white", "paws","claws");
        print " Doge be {$wow->wowmuch()}\n";

        
        ?>
    </body>
</html>
