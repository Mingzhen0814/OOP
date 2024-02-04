<?php
    //定義物件(物件內部)
    class Car{
        // 屬性
        // public $color = 'white'; // 同$this->color = 'white';

        // 建構子 -> (其他程式語言)init初始化函數
        // 建構子函數不可以有回傳值
        function __construct($color='white'){
            $this->color = $color; // 屬性可以被放到建構子($this->color: 物件屬性)
            echo "產生了一部車子\n";
        }
        
        // 解構子 -> (有些程式語言沒有解構子) -> 趁物件消失前可利用解構子做事情，如儲存資料
        // https://ithelp.ithome.com.tw/articles/10204860
        // Garbage Collection(GC): 把不用的記憶體回收回來使用
        // 判斷記憶體可以被GC方式: 1. PHP 尾巴的 "? >" 2. 將變數設為null
        function __destruct(){
            echo "車子報廢了\n";
        }

        // 方法
        function startEngine(){
            echo "汽車引擎發動了\n";
        }

        // overload多載: class中的function只要參數內容不同即可使用同一名稱的function(PHP不支援多載)
    }

// (物件外部)    
// 實體變數instance: 將物件實體化後存放的物件    
// $car = new Car();

// 物件外部向物件內部指定屬性值
$car = new Car('green');

echo "車子的顏色是{$car->color}\n";
$car->startEngine(); // 操作物件

$car1 = new Car(); // 物件外部不指定的話可透過物件內部給予預設參數，給予屬性值
echo "車子的顏色是{$car1->color}\n";
?>