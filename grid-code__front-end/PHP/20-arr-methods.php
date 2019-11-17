<?php
    // Indexed array
    $names = ['Mahmoud', 'Nour', 'Omar', 'Mody'];

    // Looping the array
    $count = count($names);

    for ($i = 0; $i < $count; $i++) {
        echo $names[$i] . "<br>"; // prints all elems
    }
    
    echo "<br>";
    echo "<br>";

    // Associative array: key & val
    $lovers = array(
        'Lover' => 'Mahmoud',
        'Loved' => 'Nour',
        'Reason' => 'Love comes from Allah'
    );

    // Echo specific value
    echo $lovers['Loved'] . "<br>";

    // Looping => using foreach for associative array
    foreach ($lovers as $prop => $val) {
        echo "$prop: $val <br>";
    }

    echo "<br>";
    echo "<br>";

    // Multi-dimentional array
    $persons = array(
        array('Mahmoud', 29),
        array('Nour', 26),
        array('Eman', 39)
    );

    echo $persons[0][1] . "<br>"; // 29
    echo $persons[1][1] . "<br>"; // 26

    // Looping throuhg multi-dim array
    for ($i = 0; $i < count($persons); $i++) {
        echo "<ul>";

        for ($prop = 0; $prop < 2; $prop++) {
            echo "<li>" . $persons[$i][$prop] . "</li>";
        }

        echo "</ul>";
    }

    echo "<br>";
    echo "<br>";

    // Current, Next & Previous
    $people = array('Nour', 'Mody', 'Mahmoud', 'Omar');

    echo current($people) . "<br>"; // Nour
    echo next($people) . "<br>"; // Mody
    echo next($people) . "<br>"; // Mahmoud
    echo prev($people) . "<br>"; // Mody
    echo end($people) . "<br>"; // Omar
    echo prev($people) . "<br>"; // Mahmoud

    echo reset($people) . "<br>"; // Nour

    echo "<br>";
    echo "<br>";

    // Sorting for arrays
    $nums = array(9, 3, 5, 11, 8);
    sort($nums);

    echo "<h2>Assending</h2>";
    for ($i = 0; $i < count($nums); $i++) {
        echo $nums[$i] . "<br>";
    }

    rsort($nums);
    echo "<h2>Descending</h2>";
    for ($i = 0; $i < count($nums); $i++) {
        echo $nums[$i] . "<br>";
    }

    // Also for names, assending & descending (A - Z, Z - A)


    // Sorting with associative array
    $lifeThings = array(
        'love' => 'Nour',
        'who' => 'Mahmoud',
        'programming' => 'Something to live for'
    );

    // sorting based on key
    ksort($lifeThings);

    echo "<h2>Key: Alphabitically</h2>";
    foreach ($lifeThings as $thing => $what) {
        echo $thing . ": " . $what . "<br>";
    } // love, prograaming, who

    echo "<br>";
    echo "<br>";

    echo "<h2>Key: Z - A</h2>";
    krsort($lifeThings);
    foreach ($lifeThings as $thing => $what) {
        echo $thing . ": " . $what . "<br>";
    } // who, programming, love

    // sort based on value
    asort($lifeThings);

    echo "<h2>Value: Alphabitically</h2>";
    foreach ($lifeThings as $thing => $what) {
        echo $thing . ": " . $what . "<br>";
    } // Mahmoud, Nour, Something...

    echo "<br>";
    echo "<br>";

    echo "<h2>Value: Z - A</h2>";
    arsort($lifeThings);
    foreach ($lifeThings as $thing => $what) {
        echo $thing . ": " . $what . "<br>";
    } // Something, Nour, Mahmoud

    echo "<br>";
    echo "<br>";
    
    // Push & Pop: adding & removing elems from array
    $arrayo = array(1, 2, 3);
    // array_push($arrayo, 4, 5, 6);
    print_r($arrayo); // 1 - 6

    echo "<br>";

    array_pop($arrayo); // remove last elem
    print_r($arrayo); // 1