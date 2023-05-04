<?php

class Producto{
    #definicion de los atributos
    public string $nombre;
    public int $precio;
    public bool $disponible;

    #metodo constructor, se ejecuta al efectuar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        #se les da valor a los atributos con los parametos que recibe el metodo constuctor
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    #definicion de metodos
    public function mostrarProducto() {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

}

//instancia de la clase en el primer objeto
$producto = new Producto('Tablet', 200, true);
// llamado al metodo mostrar producto, utulizando sintaxis de flecha->
$producto->mostrarProducto();

//impresion en pantalla del primer objeto
echo "<pre>";
var_dump($producto);
echo "</pre>";

//instancia de la clase en el segundo objeto
$producto2 = new Producto('Monitor Curvo', 300, true);
//llamado al metodo mostrar producto, utilizando sintaxis de flecha ->
$producto2->mostrarProducto();

//impresion en pantalla del segundo objeto 
echo "<pre>";
var_dump($producto2);
echo "</pre>";
