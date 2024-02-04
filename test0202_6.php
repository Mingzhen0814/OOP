<?php
interface PlatgroundDelegate{
    function engineStartStatus($error);
}
class Car{
    // 委派設計模式（delegation pattern）
    public $delegate;
    function startEngine() {
        echo "汽車引擎啟動\n";
        $this->delegate->engineStartStatus("沒油了"); // ERROR: 沒油了
    }
}

class Motorcycle{
    function startEngine() {
        echo "機車引擎啟動\n";
        $this->delegate->engineStartStatus(null); // ERROR: 沒油了
    }
}

class Playground implements PlatgroundDelegate{
    function run() {
        $car = new Motorcycle();
        $car->delegate = $this; // 註冊
        $car->startEngine();
    }

    // delegate function / callback function 委派函數: 不是使用者呼叫的函數
    // 特色: 需先註冊($car->delegate = $this;)，才能呼叫到此函數
    function engineStartStatus($error) {
        if (! is_null($error)) {
            echo "ERROR: {$error}\n";
        } else {
            echo "Success!\n";
        }
    }
}

$play = new Playground();
$play->run();
?>