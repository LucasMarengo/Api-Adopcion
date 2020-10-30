<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Persona;

Class EdicionPersonaController extends Controllers
{
    public function mostrar()
    {
        return view('editarpersona');
    }

    public function Editar(string $nombre, string $apellido, integer $dni, integer $telefono, string $email, string $direccion)
    {
        
        $this->setNombre($nombre);
        if($nombre == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "Nombre" se encuentra vacia']);
        }
        else
        {
            return $this->$nombre;
        }
        

        $this->setApellido($apellido);
        if($apellido == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "Apellido" se encuentra vacia']);
        }
        else
        {
            return $this->$apellido;
        }

        $this->setDni($dni);
        if($dni == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "DNI" se encuentra vacia']);
        }
        else
        {
            return $this->$dni;
        }

        $this->setTelefono($telefono);
        if($telefono == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "Telefono" se encuentra vacia']);
        }
        else
        {
            return $this->$telefono;
        }
      
        $this->setEmail($email);
        if($email == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "Email" se encuentra vacia']);
        }
        else
        {
            return $this->$email;
        }

        $this->setDireccion($direccion);
        if($direccion == null)
        {
            return view('errorpersona' , ['mensaje' => 'La Casilla "Direccion" se encuentra vacia']);
        }
        else
        {
            return $this->$direccion;
        }
        $this->save();
    }

}