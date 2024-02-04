<?php
interface Vehicle{
    function startEngine(); // 只有宣告(定義)，沒有實作
}

class Car implements Vehicle{
    function startEngine(){
        // implements 內的function一定要強制實作內容
        // 繼承class 則不一定要覆寫
        echo "汽車引擎啟動\n";
    }
}

class Motorcycle implements Vehicle{
    function startEngine(){
        echo "機車引擎啟動\n";
    }

}

function run(Vehicle $vehicle){
    $vehicle->startEngine(); // 透過新的父類別提出重複的部分，再進行覆寫
}
?>