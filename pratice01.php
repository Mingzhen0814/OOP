<?php
class Car{
    function __construct(){
        if(func_num_args() == 0){
            $this->numberOfWheel = 4;
            $this->power = 50;
            $this->brand = "TOYOTA";
        } else {
            $this->numberOfWheel = func_get_arg(0);
            $this->power = func_get_arg(1);
            $this->brand = func_get_arg(2);
        }
    }
    function __destruct(){
        echo "車子報廢\n";
    }
    function startEngine(){
        echo "汽車引擎發動了\n";
    }
}


$car = new Car(4,200,"Ford");
echo "這是一部{$car->numberOfWheel}輪、{$car->power}馬力的{$car->brand}車子\n";
$car->startEngine();
?>