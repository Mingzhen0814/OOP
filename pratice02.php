<?php
class Car{
    function __construct(){
        if(func_num_args() == 0){
            $this->numberOfWheel = 4;
            $this->power = 50;
            $this->brand = "TOYOTA";
            $this->color = "red";
        } else {
            $this->numberOfWheel = func_get_arg(0);
            $this->power = func_get_arg(1);
            $this->brand = func_get_arg(2);
            $this->color = func_get_arg(3);
        }
    }
    function __destruct(){
        echo "車子報廢\n";
    }
    function startEngine(){
        echo "汽車引擎發動了\n";
    }
    function endEngine(){
        echo "車子熄火\n"; 
    }
    function test(){
        $time1 = date ("Y-m-d H:i:s");
        echo "發動時間：{$time1}\n";
        sleep(5);
        $time2 = date ("Y-m-d H:i:s");
        echo "熄火時間：{$time2}\n";
    }
}


$car1 = new Car(4,200,"BMW","銀色");
$car2 = new Car(4,200,"BMW","橘色");
$car3 = new Car(4,200,"BMW","黑色");
echo "這是一部{$car1->numberOfWheel}輪、{$car1->power}馬力{$car1->color}的{$car1->brand}車子\n";
$car1->test();
echo "這是一部{$car2->numberOfWheel}輪、{$car2->power}馬力{$car2->color}的{$car2->brand}車子\n";
$car2->test();
echo "這是一部{$car3->numberOfWheel}輪、{$car3->power}馬力{$car3->color}的{$car3->brand}車子\n";
$car3->test();
?>