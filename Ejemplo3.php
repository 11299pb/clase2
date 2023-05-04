<?php

class Transporte {
    protected int $ruedas;
    protected int $capacidad;
    public function __construct(int $ruedas, int $capacidad)
    {
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " persona ";

    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}   


