<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
     public function getId()
     {
         return $this->id;
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
     public function setDni(bigInteger $dni)
     {
        $this->dni=$dni;
     }
     public function getDni(): bigInteger
     {
         return $this->dni;
     }
     public function setTelefono(integer $telefono)
     {
        $this->telefono=$telefono;
     }
     public function getTelefono(): integer
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
     public function setDireccion(): string
     {
         $this->direccion=$direccion;
     }
     public function getDireccion(): string
     {
         return $this->direccion;
     }

     //RELACIONES
     public function conexiones()
     {
         return $this->hasMany(Conexion::class,'id_persona');
     }
}





