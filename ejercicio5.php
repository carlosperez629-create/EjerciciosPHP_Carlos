<?php
/*
 Construya un programa tal que dado como datos la base y la altura de un rectángulo, calcule el perímetro y la superficie del mismo. 
Recuerde que la superficie de un rectángulo se calcula aplicando la siguiente fórmula: superficie = base *altura , y el perímetro 
*/
$base = 10;
$altura = 5;
$superficie = $base * $altura;
$perimetro = 2 * ($base + $altura);
echo "Superficie: " . $superficie . "<br>";
echo "Perímetro: " . $perimetro;
?>