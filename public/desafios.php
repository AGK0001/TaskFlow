<?php
//DESAFIO 1: LA SUCESIÓN DE FIBONACCI
echo "<h3>DESAFIO 1: LA SUCESIÓN DE FIBONACCI </h3>" ."<br>";
$numero= 0;
$numero_ant= 1;

for($i=0;$i<20;$i++){
    echo "$numero, ";
    $num_temp=$numero;
    $numero=$numero_ant;
    $numero_ant=$num_temp+$numero_ant;
}
echo "<hr>";

//DESAFIO 2: COMPROBADOR DE NÚMEROS PRIMOS
echo "<h3>DESAFIO 2: COMPROBADOR DE NÚMEROS PRIMOS </h3>" ."<br>";
$numero= 29;

