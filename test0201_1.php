<?php
    //定義物件(物件內部)
    class Car{
        // 屬性
        // public $color = 'white'; // 同$this->color = 'white';

        // 建構子 -> (其他程式語言)init初始化函數
        // 建構子函數不可以有回傳值
        function __construct(){
            $this->color = 'white'; // 屬性可以被放到建構子($this->color: 物件屬性)
            // $color = 'white'; // ($color: 區域變數)
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
    }

// (物件外部)    
// 實體變數instance: 將物件實體化後存放的物件    
$car = new Car();

echo "車子的顏色是{$car->color}\n";
$car->startEngine(); // 操作物件
?>