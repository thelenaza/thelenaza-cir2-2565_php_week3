<?php
   $start = "Namax star"; //Global Variable

   function dragonball(){
    //echo "สวัสดีฃาว $star";
    static $x = 0;
    $star = "Earth star"; //Local variable

    echo "1. Local variable $star";
    echo "<br />";
    echo "3. Static variable $x";
    echo "<br />" ;
   }
   dragonball(); //เรียกใช้ฟังก์ชัน
   echo "2. Global variable $star";
?>