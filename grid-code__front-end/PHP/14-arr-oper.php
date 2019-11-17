<?php
    $arr1 = array('a' => 'Text_1', 'b' => 'Text_2');
    $arr2 = array('c' => 'Text_3', 'd' => 'Text_4');
    $arr3 = array('a' => 'Text_1', 'b' => 'Text_2');
    $arr4 = array('d' => 'Text_2', 'a' => 'Text_1');

    var_dump($arr1);
    echo "<br>";

    print_r($arr1); // More readable code
    echo "<br>";

    // ==: enought to be same in (key, val)
    var_dump($arr1 == $arr3); // true
    echo "<br>";

    var_dump($arr1 == $arr3); // true
    echo "<br>";

    // ===: must be the same (key, value) && order!
    var_dump($arr1 === $arr4); // false
    echo "<br>";