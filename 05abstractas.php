<?php include 'includes/header.php';

//Clases absractas son las que no se pueden instanciar solo se pueden heredar
abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona y no gasta gasolina ";
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo "<hr>";

$auto = new Automovil(4, 4, 'Manual');
echo $auto->getInfo();
echo $auto->getTransmision();

include 'includes/footer.php';