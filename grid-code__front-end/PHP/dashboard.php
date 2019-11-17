<?php

$userid = $_POST['userid'];
$password = $_POST['password'];

if ($userid === 'mahelhelou' && $password === '123456') {
    echo "<h1>Welcome $userid</h1>";
} else {
    echo "<h1>Incorrect login information</h1>";
}