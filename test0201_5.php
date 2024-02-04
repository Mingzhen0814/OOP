<?php
class Car{
    function __construct($numberOfWheel, $power, $brand, $color){
        $this->numberOfWheel = $numberOfWheel;
        $this->power = $power;
        $this->brand = $brand;
        $this->color = $color;
        echo "這是一部{$this->numberOfWheel}輪、{$this->power}馬力{$this->color}的{$this->brand}車子\n";
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
}

// extends繼承父類別的所有屬性方法
// Car: parent父類別
// fiyingCar: child子類別
class flyingCar extends Car{
    // override覆寫
    // 子類別改寫父類別的內容
    function __construct($numberOfWheel, $power, $brand, $color){
        // (父類別的參數有什麼子類別也得要有)
        parent::__construct($numberOfWheel, $power, $brand, $color);
        /* 父類別已經有同樣的程式，子類別可以直接呼叫父類別的即可
        // 有些程式語言已表明在建構式得先呼叫父類別
        $this->numberOfWheel = $numberOfWheel;
        $this->power = $power;
        $this->brand = $brand;
        $this->color = $color;
        */
        echo "這是一部{$this->color}的{$this->brand}飛天車\n";
    }
    function spreadWings(){
        parent::startEngine();
        echo "展翼\n";
    }
    
    function foldWings(){
        echo "收翼\n";
    }

}

$car1 = new flyingCar(4,200,"BMW","銀色");
// $car1->startEngine(); // 在spreadWings()可以直接繼承父類別，先啟動引擎
$car1->spreadWings();



// 呼叫endEngine()可以先收翼再熄火
// 1. 父類別呼叫子類別"實體(instance)"以繼承foldWings()方法
// 2. 覆寫父類別endEngine()的方法
$car1->endEngine();


?>