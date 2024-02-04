<?php
class Car{
    // 委派設計模式（delegation pattern）
    public $delegate;
    function startEngine() {
        echo "汽車引擎啟動\n";
        // $this->delegate->engineStartStatus(null); // Success!
        $this->delegate->engineStartStatus("沒油了"); // ERROR: 沒油了
    }
}

class Motorcycle{
    function startEngine() {
        echo "機車引擎啟動\n";
    }
}

class Playground{
    function run() {
        $car = new Car();
        $car->delegate = $this;
        $car->startEngine();
    }

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