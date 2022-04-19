<?php 
declare(strict_types = 1);
include 'includes/header.php';

//Métodos Estaticos

class Producto {
    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";
    
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerImagenProducto() {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del Procuto";
    }

    //metodos
    public function mostrarProducto() : void {
        echo "El producto es: " . $this->nombre . ", y su precio es de " . $this->precio;
    }

    public function getNombre() : string { //Para obtener un valor
        return $this->nombre;
    }

    public function setNombre(string $nombre) { //Para modificar o egregar un valor
        $this->nombre = $nombre;
    }
}

//Instanciar
$producto = new Producto('Tablet', 200, true, '');
// $producto->mostrarProducto();
echo $producto->obtenerImagenProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto_dos = new Producto('Monitor Curvo', 300, true, 'monitorCurvo.jpg');
// $producto_dos->mostrarProducto();
// echo $producto_dos->getNombre();
echo $producto->obtenerImagenProducto();

// echo "<pre>";
// var_dump($producto_dos);
// echo "</pre>";

include 'includes/footer.php';
