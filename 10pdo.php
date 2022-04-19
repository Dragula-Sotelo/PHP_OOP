<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', '');

//Creamos query
$query = "SELECT titulo, imagen FROM propiedades";

//Consultar la BD sin utilizar sentencias declaradas
// $propiedades = $db->query($query)->fetch();
// var_dump($propiedades);

//Utilizando sentencias declaradas
//Lo preparamos
$stmt = $db->prepare($query);
//Lo ejecutamos
$stmt->execute();
//Obtener los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
//Iterar
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

include 'includes/footer.php';
