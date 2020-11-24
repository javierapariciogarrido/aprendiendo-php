<?php

//OPERADORES ARITMÉTICOS: 
$numero1 = 55;
$numero2=33;

echo 'SUMA: '.  ($numero1+ $numero2).'<br>';
echo 'RESTA: '.($numero1-$numero2).'<br>';
echo 'MULTIPLICACIÓN: '.($numero1*$numero2).'<br>';
echo 'DIVISIÓN: '.($numero1/$numero2).'<br>';
echo 'RESTO: '.($numero1%$numero2);


// OPERADORES DE INCREMENTO Y DECREMENTO

$year = 2019;

//Incremento: $year = $year + 1 o lo que es lo mismo $year++

$year++;

//Decremento : $year = $year - 1 o lo que es lo mismo $year--
$year--;

// Preincremento: $year = 1+ $year o lo que es lo mismo ++$year

++$year;

// Predecremento: $year = 1- $year o lo que es lo mismo --$year
--$year;
echo '<h1>'.$year.'</h1>';


// Operadores de asignación

$edad = 55;

echo $edad.'<br>';

$edad+=5; // Equivale a $edad = $edad + 5;
echo $edad.'<br>';
echo ($edad-=5) .'<br>';
echo ($edad*=5) .'<br>';
echo ($edad/=5).'<br>';