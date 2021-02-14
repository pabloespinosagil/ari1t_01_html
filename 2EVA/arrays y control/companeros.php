<?php

$a=13

$companeros=[
	'Andres Cue'
	'Sergio'
	'Andres Dosal'
	'Ivan'
	'Pablo Espinosa'
	'Alverto'
	'Hector'
	'Eduardo'
	'Pablo Negro'
	'Jauri'
	'Pablo Ruca'
	'Francisco'
	'Valentin'
];

sort($companeros);
shuffle($companeros);

echo 'uno' ;
foreach ($companeros as $c){
	echo $c;
}
echo 'uno';
?>
