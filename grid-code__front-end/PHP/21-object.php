<?php
    $myObject = (object) []; // PHP 5
    $myObject_new = new stdClass; // PHP 5

    $myObject->myString = 'Nour';
    $myObject->myInt = 26;

    var_dump ($myObject);

    $user = new stdClass;

    $user->name = 'Mahmoud';
    $user->age = 29;

    print_r($user);

    echo "<br>";
    echo $user->age;