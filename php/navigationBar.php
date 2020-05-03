<?php

$menu = array('Home', 'Dados de Qualidade do Ar');
$links = array('index.php', 'purpleair.php');

echo "<ul>";

	for ($i=0; $i < 2; $i++){

		$className = (basename($_SERVER['PHP_SELF'])==$links[$i])?'active':'';

		echo "<li><a href='$links[$i]' class= '$className'>$menu[$i]</a></li>";
	}

		echo "<li id='threeline-icon' class='threeline-icon' onclick='openNav()'>&#9776;</li>";
	

echo "</ul>"; 

?>

