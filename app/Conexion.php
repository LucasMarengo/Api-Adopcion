<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conexion extends Model
{
    
    public function getId(): int 
    {
        return $this->id;
    }

    public function setIdPersona(string $id_persona)
    {
        $this->id_persona = $id_persona;
    }
    public function setIdAnimal(string $id_animal)
    {
        $this->id_animal = $id_animal;
    }

    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
    }
    public function setFechaInicial(string $fecha_inicial)
    {
        $this->fecha_inicial = $fecha_inicial;
    }

    public function setFechaFinal(string $fecha_final)
    {
        $this->fecha_final = $fecha_final;
    }

    public function getIdPersona(): integer
    {
        $this->id_persona;
    }
    public function getIdAnimal(): integer
    {
        $this->id_animal;
    }
    public function getTipo(): string
    {
        $this->tipo;
    }
    public function getFechaInicial(): string
    {
        $this->fecha_inicial;
    }

    public function getFechaFinal(): string
    {
        $this->fecha_final;
    }

    // Relaciones
    public function personas()
    {
        return $this->belongsTo(Persona::class);
    }

    public function animales()
    {
        return $this->belongsTo(Animal::class);
    }





    
    
}