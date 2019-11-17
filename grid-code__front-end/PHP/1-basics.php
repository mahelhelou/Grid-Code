<style>
    code {
        background: #333; color: #fff; display: flex; flex-direction: column; justify-content: center; width: 960px; min-height: 100px; font-size: 20px; padding: 0 25px; border-radius: 10px;
    }
</style>

<!-- Output Hello world without <?php ?> -->
Hello World without php syntax!
<br>
<?php 
    echo "Hello World"; // Output: Hello World 
    echo "<br>";

    echo (200); // Output: 200
    echo "<br>";

    echo (45 + 55); // Output: 100
?>
<h1>
<?php
    echo (200);
?>
</h1>

<h1>Variables in PHP</h1>
<pre>
    <code>
        $var_name = value;
        // Value can be string, number, array or other data type.
    </code>
</pre>

<?php
$message = 'A message from $variable';
$num1 = 22;
$num2 = 28;
$total = $num1 + $num2;

echo "$message <br>"; // A message from $variable
echo '$message <br>'; // $message

echo "$total <br>"; // 50
?>

<h1>If Condition</h1>
<pre>
    <code>
        if ($condition) {
            echo "something";
        } else {
            echo "something else";
        }
    </code>
</pre>

<?php
    $loggedIn = false;

    if ($loggedIn) {
        echo '<h1> welcome </h1>';
    } else {
        echo '<h1> Please log in </h1>';
    }
?>


<h1>Arrays</h1>

<pre>
    <code>
        $array_name = array(value1, value2, ...);

        // To print array
        print_r($array_name);
        var_dump($array_name);
    </code>
</pre>

<?php
    $javascript = array('React', 'Vue', 'Angular');

    print_r($javascript);
    echo '<br>';

    var_dump($javascript);
    echo '<br>';

    echo($javascript[0]) . '<br>'; // React
    echo($javascript[2]) . '<br>'; // Angular

    // Associative Array
    $js_frameworks = array(
        'React' => 'Facebook',
        'Vue' => 'Evan You',
        'Angular' => 'Google'
    );

    print_r($js_frameworks);
    echo '<br>';

    var_dump($js_frameworks);
    echo '<br>';

    echo ($js_frameworks['React']); // Facebook
    echo '<br>';
    echo '<h3>' . $js_frameworks['React'] . '</h3>';

    echo ($js_frameworks['Vue']); // Evan You
    echo '<br>';
    echo '<h3>' . $js_frameworks['Angular'] . '</h3>';

    // Multi-dimentional array
    $users = array(
        array(
            'userID' => 'user1',
            'pass' => '12345'
        ),
        array(
            'userID' => 'user2',
            'pass' => '54321'
        )
    );

    var_dump($users);

    echo '<h3>' . $users[0]["userID"] . '</h3>';
?>

<h1>Loops</h1>

<?php
echo '<h3>While Loop</h3>';
$number = 0;
$limit = 10;

echo "<ul>";
while ($number < $limit) {
    echo "<li>$number</li>";
    $number++;
}
echo "<ul>";

echo '<h3>For Loop</h3>';
echo "<ul>";
for ($number=0; $number < $limit; $number++) {
    echo "<li>$number</li>";
}
echo "<ul>";

echo '<h3>Do while Loop</h3>';
$number = 50;

echo "<ul>";
do {
    echo "<li>$number</li> ... Runs at least once, even if the condition isn't met!";
} while ($number < $limit);
echo "</ul>";

echo '<h3>For each Loop</h3>';
$names = array('Eman', 'Mona', 'Nour');
foreach ($names as $name) {
    echo "<li>$name</li>";
}

echo '<h3>For each Loop for Multidimentional Array</h3>';
$languages = array(
    'PHP' => 'Laravel',
    'JavaScript' => 'Vue'
);

echo "<ul>";
foreach ($languages as $language => $framework) {
    echo "<li>Framework of <b>$language</b> is <b>$framework</b></li>";
}
echo "</ul>";
?>

<h1>Functions</h1>
<?php
function sayHello() {
    echo "<h2>Hello</h2>";
}

sayHello();
sayHello();
sayHello();

function add($num1, $num2) {
    return $num1 + $num2;
}

echo "<h1>The value of adding 20 to 30 is " . add(20, 30) . "</h1>";
?>

<h1>Forms</h1>
<form action="dashboard.php" method="post">
    <input type="text" name="userid">
    <input type="password" name="password">
    <input type="submit" value="login">
</form>