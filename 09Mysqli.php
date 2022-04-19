<?php include 'includes/header.php';
//Conectar a la DB con Mysqli
$db = new mysqli('localhost', 'root', '', 'bienes_raices');

// var_dump($db);
//Creamos el Query
$query = "SELECT titulo, imagen FROM propiedades";
// $resultado = $db->query($query);

// var_dump($resultado->fetch_assoc());

// while($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;

//Lo preparamos
$stmt = $db->prepare($query);
//Lo ejecutamos
$stmt->execute();
//Creamos la variable
$stmt->bind_result($titulo, $imagen);
//Asignamos el resultado
// $stmt->fetch();
//Imprimimos el resultado
// var_dump($titulo);
// var_dump($imagen);

while($stmt->fetch()):
    var_dump($titulo);
    var_dump($imagen);
endwhile;

include 'includes/footer.php';
