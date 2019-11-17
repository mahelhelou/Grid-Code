<?php

    $greeting = 'Hello world, I am learning PHP';

    // String length
    echo strlen($greeting) . "<br>"; // 30

    // Word count
    echo str_word_count($greeting) . "<br>"; // 6

    // Reverse string
    echo strrev($greeting) . "<br>"; // PHP gninrael ma I ,dlrow olleH

    // Find the position
    echo strpos($greeting, 'or') . "<br>"; // 7
    echo strpos($greeting, 'ph') . "<br>"; // no output
    echo strpos($greeting, ' PH') . "<br>"; // 26

    // Replace something
    echo str_replace('Hello', 'Hi', $greeting) . "<br>";; // Hi World...
    // i: case in sensitive
    echo str_ireplace('php', 'JAVASCRIPT', $greeting) . "<br>";; // ...JAVASCRIPT

    // Break on \n
    $randText = "Text1 \n Text2";
    echo nl2br($randText) . "<br>"; // every text in one line
    
    // Trim
    $text = 'Hello world He';
     echo trim($text, 'He') . "<br>"; // llo world
     echo rtrim($text, 'He') . "<br>"; // Hello world
     echo ltrim($text, 'He') . "<br>"; // ..ello world He

     // Join: conver array to string
     $names = array('Nour', 'LOVES', 'Mahmoud');
     echo join(' ', $names) . "<br>"; // Nour LOVES Mahmoud

     // Split: convert string into array
     $txto = 'Helloo';
     print_r(str_split($txto));
     echo "<br>";

     print_r(str_split($txto, 3)) . "<br>"; // index for every 3 chars
     echo "<br>";

     // Suffle
     echo str_shuffle($txto) . "<br>"; // change every refresh!

     // Repeat
     echo str_repeat('Nour', 10) . "<br>";