<?php
namespace App\Http\Actions;

use App\Conexion;
use Illuminate\Http\Request;

final class ConexionAddAction
{
    public function __invoke(Request $request)
    {


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

        if($conex->save()){
            return response()->json([
                'status' => "Ok",
                'message' => 'Se cargo la conexion con exito',
            ]);
        }else{
            return response()->json([
                'status' => "Error",
                'message' => 'Ocurrio un error en la carga de conexion',
            ]);
        }

    }
}
