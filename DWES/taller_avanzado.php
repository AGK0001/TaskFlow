<?php

echo "<h1>Nivel 1: Lógica con Funciones </h1>" ."<br>";
//PROBLEMA 1: CALCULADORA DE DESCUENTOS
echo "<h3>Problema 1: Lógica con Funciones </h3>" ."<br>";

function calcularDescuento($precio, $categoria)
{
    if($categoria=='electronica'){
        $descuento= $precio *15/100;
    }
    else if($categoria=='ropa'){
        $descuento= $precio *10/100;
    }
    else if($categoria=='alimentacion'){
        $descuento= $precio *5/100;
    }
    else{
        $descuento= 0;
    }
    return $descuento;
    "<hr>";
}

$prueba1=calcularDescuento(100,'electronica');
echo "El descuento es de: $prueba1"  ."<br>";

$prueba2=calcularDescuento(100,'ropa');
echo "El descuento es de: $prueba2" ."<br>";

$prueba3=calcularDescuento(100,'alimentacion');
echo "El descuento es de: $prueba3" ."<hr>";
//PROBLEMA 2: EL JUEGO DEL FIZZBUZZ
echo"<h3>Problema 2: El Juego FizzBuzz </h3>" ."<br>";

function fizzbuzz($numero){
    if($numero%15==0){
        $devolver= "FizzBuzz";
    }
    else if($numero%3==0){
        $devolver= "Fizz";
    }
    else if($numero%5==0){
        $devolver= "Buzz";
    }
    else{
        $devolver= $numero;
    }
    return $devolver;
}

$prueba4=fizzbuzz(20);
echo "El resultado es: $prueba4" ."<br>";

$prueba5=fizzbuzz(15);
echo "El resultado es: $prueba5" ."<br>";

$prueba6=fizzbuzz(6);
echo "El resultado es: $prueba6" ."<br>";

$prueba7=fizzbuzz(97);
echo "El resultado es: $prueba7" ."<hr>";
//PROBLEMA 3: VALIDADOR DE CONTRASEÑA
echo"<h3>Problema 3: Validador de Contraseña </h3>" ."<br>";

function validarContraseña($pass){
    $tienenumero=false;

    for($i=0; $i<strlen($pass); $i++){
        if(is_numeric($pass[$i])){
            $tienenumero=true;
            break;
        }
    }
    if(strlen($pass)>=8 && strtolower($pass)!=$pass && $tienenumero==true){
        $devolver= "Fuerte";
    }
    else if(strlen($pass)>=8 && $pass!=strlen($pass) && $pass!=is_numeric($pass)){
        $devolver= "Media";
    }
    else{
        $devolver= "Débil";
    }
    return $devolver;
}

$prueba8=validarContraseña("Holas1234");
echo "La contraseña es: $prueba8" ."<br>";

$prueba9=validarContraseña("Holaaaaa");
echo "La contraseña es: $prueba9" ."<br>";

$prueba10=validarContraseña("Hola");
echo "La contraseña es: $prueba10" ."<hr>";

echo "<h1>Nivel 2: Manipulación Avanzadas de Arrays </h1>" ."<br>";
//PROBLEMA 4: ENCONTRAR EL VALOR MÁXIMO
echo "<h3>Problema 4: Encontrar el Valor Máximo </h3>" ."<br>";

function encontrarMaximo($array){
    $numeroMayor=$array[0];

    for($i=0;$i<count($array);$i++){
        if($array[$i]> $numeroMayor){
            $numeroMayor=$array[$i];
        }
    }
    return $numeroMayor;
}

$prueba11=encontrarMaximo([1,5,4,6]);
echo $prueba11;

//PROBLEMA 5: FILTRAR USUARIOS POR CRITERIO
echo "<h3>Filtrar Usuarios Por Criterio </h3>" ."<br>";

$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];

function filtrarUsuario($usuarios){
    $filtracion=[];
    foreach($usuarios as $usuario){
        $resultado[]=[
            'nombre' =>$usuario['nombre'],
            'activo' =>$usuario['activo']         
        ];
    }
    return $resultado;
}
print_r(filtrarUsuario($usuarios));

