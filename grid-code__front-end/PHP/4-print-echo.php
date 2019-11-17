<?php

    // ECHO
    $x1 = 1;
    echo $x1; // 1
    
    $x2 = "Hello World";
    echo $x2; // Hello World

    $x3 = 3;
    echo "$x3"; // 3 { value }
    echo '$x3'; // $x3 'string'

    echo "<h1>Hello PHP</h1>"; // Hello PHP (h1)
    echo '<h3>Hello in h3</h3>'; // Hello in h3 (h3)

    echo "<h2>The message is $x2 </h2>";
    // OR
    echo "<h2>The message is " . $x2 . "</h2>";


    // PRINT: Same to ECHO in most cases
    $y1 = 1;
    print $y1; // 1

    $y2 = "Hello World";
    print $y2; // Hello World

    $y3 = 3;
    print "$y3";
    print '$y3';

    print "<h1>Hello PHP</h1>"; // Hello PHP (h1)
    print '<h3>Hello in h3</h3>'; // Hello in h3 (h3)

    print "<h2>The message is $x2 </h2>";
    // OR
    print "<h2>The message is " . $x2 . "</h2>";

    // DIFFERENCE
    /*
        1. echo accepts more than 1 param
                echo "test1", "anyOthersSepWithColon";
        
        2. echo is faster
        3. print can be a part of the statement: $x = print ""; ECHO NOT
    */