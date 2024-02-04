<?php
// Vehicle是概念，不知道要怎麼操作什麼樣的實體，因此通常實作部分會清空不寫(有參數仍然要寫上去)
class Vehicle{
    function startEngine(){
        // 實作
        /* echo "引擎啟動\n"; */
    }
}

class Car extends Vehicle{
    function startEngine(){
        echo "汽車引擎啟動\n";
    }
}

class Motorcycle extends Vehicle{
    function startEngine(){
        echo "機車引擎啟動\n";
    }

}

function run(Vehicle $vehicle){
    $vehicle->startEngine(); // 透過新的父類別提出重複的部分，再進行覆寫
}
?>