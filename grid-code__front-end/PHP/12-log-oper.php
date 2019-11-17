<?php
    /*
        ** and (&&): both statements are true
        ** or (||): one or all statements are true
        ** !: reverse then type true or false
        ** xor: only one statement is correct, if two are correct => false
    */

    $x = 5;
    $y = 7;

    if ($x === 5 && $y === 7) { echo "YES <br>"; } // YES
    if ($x === 5 && $y === 8) { echo "YES <br>"; } // no output

    if ($x === 5 || $y === 7) { echo "OFCOURSE <br>"; } // YES
    if ($x === 5 || $y === 1000) { echo "OFCOURSE <br>"; } // YES
    if ($x === 0 || $y === 10) { echo "OFCOURSE <br>"; } // no output

    if ($x === 5 xor $y === 8 ) { echo "YOHOO <br>"; } // YOHOO
    if ($x === 5 xor $y === 7 ) { echo "YOHOO <br>"; } // no output