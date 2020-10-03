<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    //funciones Set

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function setEdad(int $edad)
    {
        $this->edad = $edad;
    }
    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }
    public function setRaza(string $raza)
    {
        $this->raza = $raza;
    }
    public function setPeleje(string $pelaje)
    {
        $this->pelaje = $pelaje;
    }
    public function setContextura(string $contextura)
    {
        $this->contextura = $contextura;
    }
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }

    // funciones Get

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getEdad(): int
    {
        return $this->edad;
    }
    public function getGenero(): string
    {
        return $this->genero;
    }
    public function getRaza(): string
    {
        return $this->raza;
    }
    public function getPelaje(): string
    {
        return $this->pelaje;
    }
    public function getContextura(): string
    {
        return $this->contextura;
    }
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

// RELACIONES
public function conexiones()
{
    return $this->hasMany(Conexion::class, 'id_animal');
}


}
