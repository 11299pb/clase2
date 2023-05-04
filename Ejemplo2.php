<?php

class Producto {
    #definicion de los atributos
    protected string $nombre;
    public int $precio;
    public bool $disponible;

    #metodo constructor, se ejecuta al efecrtuar la instancia 
    public function __construct(string $nombre, int $precio, bool $disponible)
    {

        #se les da valor a los atributos con los parametros que recibe el metodo constructor
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    #definicion de metodos
    public function mostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;

    }
    #metodo getter para la propiedad protegida de nombre
    public function getNombre() : string {
        return $this->nombre;
    }

    #metodo setter para propiedad protegida de nombre 
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);

// $producto->mostrarProducto();
echo $producto->nombre; // produce un error
echo $producto->getNombre(); //obtiene el nombre
$producto->setNombre('Nuvo Nombre'); //setea el nombre
echo $producto->getNombre();//obtiene el nombre 