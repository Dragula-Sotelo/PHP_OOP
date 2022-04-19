<?php 
declare(strict_types = 1);
include 'includes/header.php';

//ABSTRACCIÓN: definir atributos o métodos, que formas van a tener nuestros datos en nuestras clases.

// Definir una clase
class Producto {
    //Agregar atributos o variables
    // public $nombre;
    // public $precio;
    // public $disponible;

    //Constructores dentro de las clases se conocen como métodos.
    // Los public abajo se les conoce como modificadores de acceso
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        // echo "Desde el constructor";
        // $this->nombre = $nombre;
        // $this->precio = $precio;
        // $this->disponible = $disponible;
    }

    //metodos
    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . ", y su precio es de " . $this->precio;
    }
}

//Instanciar
$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();

$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponible = true;

// echo "<br>";
// var_dump($producto->nombre);
// var_dump($producto->precio);
// var_dump($producto->disponible);

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto_dos = new Producto('Monitor Curvo', 300, true);
$producto_dos->mostrarProducto();

// $producto_dos->nombre = 'Monitor Curvo';
// $producto_dos->precio = 300;
// $producto_dos->disponible = true;

echo "<pre>";
var_dump($producto_dos);
echo "</pre>";

// Un objeto utiliza la sintaxis de flecha ->
//Un arreglo utiliza corchetes y la posición [''] en el arreglo

include 'includes/footer.php';
