<?php
    // function: servant for all employees instead of doing the same task by each employee!

    function addNumbers($num1, $num2 = 11) { // params
        echo $num1 + $num2 . "<br>";
    }

    addNumbers(2, 99); // args => 101
    addNumbers(9); // 20

    // Use return in the scope
    function addNums() {
        $num1 = 3;
        $num2 = 4;

        return $num1 + $num2;
    }

    echo addNums() . "<br>";

    // example
    function personData($name, $age = 26) {
        return "The person $name is $age years old!";
    }

    echo personData('Nour Omar');