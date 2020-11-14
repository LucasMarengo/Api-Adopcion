<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $primaryKey = 'id_persona';
    //funciones Set

     public function getIdpersona()
     {
         return $this->id_persona;
     }
     public function setNombre(string $nombre)
     {
        $this->nombre=$nombre;
     }
     public function getNombre(): string
     {
         return $this->nombre;
     }
     public function setApellido(string $apellido)
     {
        $this->apellido=$apellido;
     }
     public function getApellido(): string
     {
         return $this->apellido;
     }
     public function setDni(int $dni)
     {
        $this->dni=$dni;
     }
     public function getDni(): int
     {
         return $this->dni;
     }
     public function setTelefono(int $telefono)
     {
        $this->telefono=$telefono;
     }
     public function getTelefono(): int
     {
         return $this->telefono;
     }
     public function setEmail(string $email)
     {
        $this->email=$email;
     }
     public function getEmail(): string
     {
         return $this->email;
     }
     public function setDireccion(string $direccion)
    {
         $this->direccion=$direccion;
     }
     public function getDireccion(): string
     {
         return $this->direccion;
     }
     public function setApto(int $apto)
     {
        $this->apto=$apto;
     }
     public function getAptop(): int
     {
         return $this->apto;
     }

     

     //RELACIONES
     public function conexiones()
     {
         return $this->hasMany(Conexion::class,'id_persona');
     }
}





