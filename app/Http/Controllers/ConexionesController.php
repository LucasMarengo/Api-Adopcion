<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conexion;

class ConexionesController extends Controller
{
    
        public function crear()
        {
            //nombre de la vista
            return view ('');
        }

        public function mostrar(Request $request)
        {
            $request->validate([
                'idPersona' => 'required',
                'idAnimal' =>'required',
                'tipo' => 'required',
                'fechainicial' => 'required',
                'fechafinal' => 'required',
            ]);

            $idPersona = $request->input('idPersona');
            $idAnimal = $request->input('idAnimal');
            $tipo = $request->input('tipo');
            $fechainicial = $request->input('fechainicial');
            $fechafinal = $request->input('fechafinal');

            $conex  = new Conexion();
            $conex->setIdPersona($idPersona);
            $conex->setIdAnimal($idAnimal);
            $conex->setTipo($tipo);
            $conex->setFechaInicial($fechainicial);
            $conex->setFechaFinal($fechafinal);
            $conex->save();

            //nombre de la vista
            return view('', [ 
            'conex' => $conex,
             ]);
        }
   
} 