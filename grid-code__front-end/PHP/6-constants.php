<?php
    // Syntax
    // define(name, value, case_sensitive? def: false);
    // val can be any data type

    define('theName', 'Mahmoud');
    echo theName; // without ($) => 
    echo "<br>";
    // echo THENAME; // Use of undefined constant

    // define('theName', 18); // Cannot be re-defined
    echo theName; // Constant theName already defined

    echo "<br>";

    // Set case-sensitive true
    define('lover', 'Nour', true);
    echo lover; // Nour
    echo "<br>";
    echo LOVER; // Nour