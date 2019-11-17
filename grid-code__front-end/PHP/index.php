<?php 

$names = array('Mahmoud', 'Eman', 'Mona', 'Heba', 'Mom');

$count = 0;

while($count < count($names)) {
	echo "<h3>Hi, my name is $names[$count]</h3>";
	$count++;
}

?>