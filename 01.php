<?php include 'includes/header.php';

// Definir una clase
class Producto {
    //Agregar atributos o variables
    public $nombre;
    public $precio;
    public $disponible;
}

//Instanciar
$producto = new Producto();

$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;

var_dump($producto->nombre);
var_dump($producto->precio);
var_dump($producto->disponible);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto_dos = new Producto();

$producto_dos->nombre = 'Monitor Curvo';
$producto_dos->precio = 300;
$producto_dos->disponible = true;

echo "<pre>";
var_dump($producto_dos);
echo "</pre>";

include 'includes/footer.php';
