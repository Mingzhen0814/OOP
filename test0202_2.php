<?php
class Car{
    function startEngine(){
        echo "汽車引擎啟動\n";
    }
}
class flyingCar extends Car{
    function startEngine(){
        echo "飛天車噴射引擎啟動\n";
    }
}

function run(Car $car){
    // Car為資料型態
    $car->startEngine();
}

run(new Car());

// 子類別可任用上n層或自己的資料類別，但父類別不可使用子類別的資料型態
// A->B->C->D，D可使用A、B、C、D的資料型態
// 向上轉型upcasting: 自動轉成上一層的型態
// 而PHP會向下轉型downcasting到原始型態(有些程式語言不會自動轉型)
// 且PHP不允許手動轉型
run(new flyingCar());
?>