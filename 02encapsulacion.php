<?php 
declare(strict_types = 1);
include 'includes/header.php';

//ENCAPSULACIÓN
//En OOP entre más cerrado es mejor

// Definir una clase
class Producto {
    /** Modificadores de acceso 
     *  public - se puede acceder y modificar en cualquier lugar (clase y objeto)
     * protected - se puede acceder / modificar unicamente en la clase
     * private - solo miembros de la misma clase pueden acceder a el
    */
    // Los public abajo se les conoce como modificadores de acceso
    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
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
$producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto_dos = new Producto('Monitor Curvo', 300, true);
// $producto_dos->mostrarProducto();
echo $producto_dos->getNombre();

// echo "<pre>";
// var_dump($producto_dos);
// echo "</pre>";

include 'includes/footer.php';
