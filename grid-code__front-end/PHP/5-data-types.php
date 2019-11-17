<?php
    $str = 'Hello world';
    var_dump($str);
    echo "<br>";

    $int = 32;
    var_dump($int);
    echo "<br>";

    $float = 20.882;
    var_dump($float);
    echo "<br>";

    $bool = true;
    var_dump($bool);
    echo "<br>";

    $arr = array('html', 'css', 'js', 'php', 99);
    echo $arr[1];
    echo "<br>";
    var_dump($arr);
    echo "<br>";
    var_dump($arr[4]);
    echo "<br>";

    // Make folder, then txt file, then write 50000 inside the file
    class Car {
        public $price = 50000;
    }

    $cloneCar = new Car();
    echo $cloneCar->price . "<br>";

    $null = null;
    var_dump($null);
    echo "<br>";

    // Convert data types
    echo "<h1>Data type conversion</h1>";

    $xample1 = 3;
    var_dump($xample1);
    echo "<br>";

    $xample2 = (string)$xample1; // convert num to string
    var_dump($xample2);
    echo "<br>";

    $texto = '99';
    var_dump($texto);
    echo "<br>";
    
    $texto2 = (int)$texto;
    var_dump($texto2);
    echo "<br>";