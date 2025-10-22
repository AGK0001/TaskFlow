<?php

//CATEGORÍA 1
//PROBLEMA 1.1: PERFIL DE USUARIO
echo "<h3>PROBLEMA 1.1: PERFIL DE USUARIO </h3>";
$nombre="Abel";
$apellidos="Gámez Kmiec";
$edad= 19;
$altura= 1.86;
$estudiante= true;

echo "Nombre: $nombre" ."<br>";
echo "Apellidos: $apellidos" ."<br>";
echo "Edad: $edad" ."<br>";
echo "Altura: $altura" ."<br>";
echo "Estudiante: " . ($estudiante ? 'Sí' : 'No') ."<br>" ."<hr>";

//PROBLEMA 1.2: INFORMACIÓN DE UN PRODUCTO
echo "<h3>PROBLEMA 1.2: INFORMACIÓN DE UN PRODUCTO </h3>";
$producto="Camiseta";
$precio= 25.99;
$stock= 10;
$oferta= true;

echo "Producto: $producto" ."<br>";
echo "Precio: $precio" ."<br>";
echo "Stock: $stock" ."<br>";
echo "¿Está de oferta? " . ($oferta ? 'Sí' : 'No') ."<br>" ."<hr>";

//PROBLEMA 1.3: CONSTANTES DE LA APLICACIÓN
echo "<h3>PROBLEMA 1.3: CONSTANTES DE LA APLICACIÓN </h3>";
define("NOMBRE_SITIO", "Mi Tienda Online");
echo NOMBRE_SITIO ."<br>";
define("VERSION_APP", "1.0");
echo VERSION_APP ."<hr>";

//CATEGORÍA 2
//PROBLEMA 2.1: CALCULADORA BÁSICA
echo "<h3>PROBLEMA 2.1: CALCULADORA BÁSICA </h3>";
$num1= 10;
$num2= 5;
$suma= $num1+$num2;
$resta= $num1-$num2;
$multiplicacion= $num1*$num2;
$division= $num1/$num2;

echo "La suma es: " . $suma ."<br>";
echo "La resta es: " . $resta ."<br>";
echo "La multiplicación es: " . $multiplicacion ."<br>";
echo "La división es: " . $division ."<br>" ."<hr>";

//PROBLEMA 2.2: ACTUALIZACIÓN DE STOCK
echo "<h3>PROBLEMA 2.2: ACTUALIZACIÓN DE STOCK </h3>";
$stock= 100;
$venta= 25;
$llegada= 50;
echo "El stock después de la venta es de: " .($stock-$venta) ."<br>";
echo "El stock después de la llegada es de: " .($stock+$llegada-$venta) ."<hr>";

//PROBLEMA 2.3: CONCATENACIÓN DE TEXTOS
echo "<h3>PROBLEMA 2.3: CONCATENACIÓN DE TEXTOS </h3>" ."<br>";
$nombre= "Abel";
$apellido= "Gámez";
$curso= "Desarrollo de Aplicaciones Web";
$union_frase="El alumno ".$nombre ." ".$apellido." está matriculado en el grado de $curso";

echo $union_frase ."<hr>";

//PROBLEMA 2.4: COMPARACIÓN SIMPLE
echo "<h3>PROBLEMA 2.4: COMPARACIÓN SIMPLE </h3>" ."<br>";
$edad= 20;
$edad_minima= 18;
$contraseña_guardada= "1234";
$contraseña_usuario= "123";

var_dump($edad>=$edad_minima);
echo "<br>";
var_dump($contraseña_guardada===$contraseña_usuario);
echo "<hr>";

//PROBLEMA 2.5: ¿PAR O IMPAR?
echo "<h3>PROBLEMA 2.5: ¿PAR O IMPAR? </h3>";
$numero= 7;

if($numero%2==0){
    echo "El número es par";
}
else{
    echo "el número es impar" ."<hr>";
}

//CATEGORÍA 3
//PROBLEMA 3.1: CONTROL DE ACCESO
echo "<h3>PROBLEMA 3.1: CONTROL DE ACCESO </h3>" ."<br>";
$edad= 17;

if($edad>= 18){
    echo "Puedes pasar";
}
else{
    echo "No puedes pasar" ."<hr>";
}

//PROBLEMA 3.2: CALIFICACIÓN DE EXAMEN
echo "<h3>PROBLEMA 3.2: CALIFICACIÓN DE EXAMEN </h3>" ."<br>";
$nota= 7.5;

if($nota>=9){
    echo "Sobresaliente" ."<hr>";
}
else if($nota>=7 && $nota<=8.9){
    echo "Notable" ."<hr>";
} 
else if($nota>=5 && $nota<=6.9){
    echo "Aprobado" ."<hr>";
}
else{
    echo "Suspenso" ."<hr>" ."<hr>";
}

//PROBLEMA 3.3: MENÚ DEL DÍA 
echo "<h3>PROBLEMA 3.3: MENÚ DEL DÍA </h3>" ."<br>";
$diaSemana= "lunes";

switch($diaSemana){
    case "lunes";
    echo "Lentejas" ."<hr>";
    break;

    case "Miércoles";
    echo "Paella" ."<hr>";
    break;

    case "Viernes";
    echo "Pescado al horno" ."<hr>";

    default;
    echo "Hoy no hay menú especial" ."<hr>" ."<hr>";
}

//PROBLEMA 3.4: VERIFICACIÓN DE USUARIO AVANZADA
echo "<h3>PROBLEMA 3.4: VERIFICACIÓN DE USUARIO AVAZANDA </h3>" ."<br>";
$rolUsuario= "admin";
$usuarioActivo= true;

if($rolUsuario=="admin" && $usuarioActivo==true){
    echo "Acceso concedido" ."<hr>";
}
else{
    echo "Acceso denegado" ."<hr>";
}

//CATEGORÍA 4
//PROBLEMA 4.1: TABLA DE MULTIPLICAR DEL 7
echo "<h3>PROBLEMA 4.1: TABLA DE MULTIPLICAR DEL 7 </h3>" ."<br>";
for($i=1; $i<=10; $i++){
    echo "7*$i = " .(7*$i) ."<br>";
}
echo "<hr>";

//PROBLEMA 4.2: CUENTA ATRÁS PARA AÑO NUEVO
echo "<h3>PROBLEMA 4.2: CUENTA ATRÁS PARA AÑO NUEVO </h3>" ."<br>";
$contador= 10;

while($contador>=1){
    echo $contador ."<br>";
    $contador--;
}
echo "<hr>";

//PROBLEMA 4.3: RECORRER NOMBRES
echo "<h3>PROBLEMA 4.3: RECORRER NOMBRES </h3>" ."<br>";
$alumnos=["Ana","Juan","Pedro","Sofía"];
foreach($alumnos as $alumno){
    echo "Hola, ".$alumno ."<br>";
}
echo "<hr>";

//PROBLEMA 4.4: LISTADO DE PRODUCTOS
echo "<h3>PROBLEMA 4.4: LISTADO DE PRODUCTOS </h3>" ."<br>";
$productos=[
    ["nombre"=>"Teclado","precio"=>50],
    ["nombre"=>"Ratón","precio"=>25],
    ["nombre"=>"Monitor","precio"=>200]
];
foreach($productos as $produ){
    echo "Producto: " . $produ["nombre"] . ", precio: ". $produ["precio"] ." €<br>";
}
echo "<hr>";

//CATEGORÍA 5
//PROBLEMA 5.1: FICHA DE USUARIO
echo "<h3>PROBLEMA 5.1: FICHA DE USUARIO </h3>" ."<br>";
$usuario=[
    "nombre"=> "Abel",
    "edad"=> 19,
    "estudiante"=> true
];
echo "Nombre: " .$usuario["nombre"] ."<br>";
echo "Edad: " .$usuario["edad"] ."<br>";
echo "Estudiante: " .($usuario ? 'Sí' : 'No') ."<hr>";

//PROBLEMA 5.2: FILTRADO DE NOTAS
echo "<h3>PROBLEMA 5.2: FILTRADO DE NOTAS </h3>" ."<br>";
$notas=[8.5,4.2,7.0,9.8,5.5,3.9];
foreach($notas as $nota){
    if($nota>=5){
        echo $nota ."<br>";
    }
}
echo "<hr>";

//PROBLEMA 5.3: LISTA DE LA COMPRA AVANZADA
echo "<h3>PROBLEMA 5.3: LISTA DE LA COMPRA AVANZADA </h3>" ."<br>";
$listaCompra=[
    "Frutas"=>["Manzanas","Plátanos","Naranjas"],
    "Lácteos"=>["Leche","Queso"],
    "Limpieza"=>["Detergente","Lejía"]
];
foreach($listaCompra as $lista=>$lis){
    echo "<strong>" .$lista .":</strong> <br>";
    foreach($lis as $li){
        echo "- " .$li ."<br>";
    }
}
echo "<hr>";

//PROBLEMA 5.4: CALCULANDO EL TOTAL DEL CARRITO
echo "<h3>PROBLEMA 5.4: CALCULANDO EL TOTAL DEL CARRITO </h3>" ."<br>";
$total= 0;
$productos=[
    ["nombre"=>"Teclado","precio"=>50],
    ["nombre"=>"Ratón","precio"=>25],
    ["nombre"=>"Monitor","precio"=>200]
];
foreach($productos as $produ){
   $total+=$produ["precio"];
}
echo "El coste total del carrito es de: $total €";