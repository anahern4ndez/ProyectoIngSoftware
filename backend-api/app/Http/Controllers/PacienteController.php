<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;
use DB;

class PacienteController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        $pat = new Paciente;
        $pat->Numero_expediente = $request->Numero_expediente;
        $pat->Nombre = $request->Nombre;
        $pat->Apellido = $request->Apellido;
        $pat->Fecha_de_nacimiento = $request->Fecha_de_nacimiento;
        $pat->Procedencia = $request->Procedencia;
        $pat->Residencia = $request->Residencia;
        $pat->Nombre_de_padre = $request->Nombre_de_padre;
        $pat->Nombre_de_madre = $request->Nombre_de_madre;
        $pat->Telefono = $request->Telefono;
        $pat->Edad = $request->Edad;
        $pat->Sindrome_Clinico_Presentacion = $request->Sindrome_Clinico_Presentacion;
        $pat->Dx_Definitivo = $request->Dx_Definitivo;
        $pat->Dx_Asociados = $request->Dx_Asociados;
        $pat->CUI = $request->CUI;
        $pat->Imagen = $request->Imagen;
        $pat->Tipo_de_Sangre = $request->Tipo_de_Sangre;
        $pat->Estudia = $request->Estudia;
        $pat->Transfusiones = $request->Transfusiones;
        $pat->EstadoActual = $request->EstadoActual;
        $pat->Sexo = $request->Sexo;
        $pat->Historia = $request->Historia;
        $pat->save();

        return response()->json([
            'success' => true,
            'message' => 'Paciente creado con éxito'
        ], 200);
    }

    /**
     * busca segun id (pasado por URL)
     * @param int id
     * 
     * @return obj asignado a variable con info de query.
    */
    function findOne(Request $request){
        $cuir = $request->CUI;
        $paciente = Paciente::where('CUI', $cuir)->with('Procedencia', 'sexo_rel','Sindrome_Clinico_Presentacion', 'Tipo_de_Sangre', 'EstadoActual', 'Estudia', 'Transfusiones')->get();
        //$val = Paciente::find('3006266730101');
        return response()->json([
            'success' => true,
            'Paciente' => $paciente
        ], 200);
    }

    function findById(Request $request){
        (int)$id = $request->ID;
        $paciente =  Paciente::where('id', $id)->with('Procedencia', 'sexo_rel','Sindrome_Clinico_Presentacion', 'Tipo_de_Sangre', 'EstadoActual', 'Estudia', 'Transfusiones')->get();

        return response()->json([
            'success' => true,
            'Paciente' => $paciente
        ], 200);
    }

    function findAll(){
        //$val = Paciente::all();
        $val = Paciente::with('Procedencia', 'sexo_rel','Sindrome_Clinico_Presentacion', 'Tipo_de_Sangre', 'EstadoActual', 'Estudia', 'Transfusiones')->get();

        return response()->json([
            'Pacientes' => $val,
            //'sexo' => $v->sexo->significado
        ], 200);
        
    }
    /**
     * hace update el estado actual o a la imagen del paciente. 
     * @param int id
     * @param \Illuminate\Http\Request 
     * @return null value
     */
    function update(Request $request){
        $cosa = $request->id;
        $toUpdate = Paciente::where('CUI', $cosa)->first();
        
        //jalado del objeto
        if($request->estado){
            $toUpdate->EstadoActual = $request->estado;
        }
        $toUpdate->Imagen = $request->img;
        $toUpdate->save();
    }
    /**
     * hace update a toda la información del paciente, en caso alguna se haya modificado al editar el paciente
     * @param int id
     * @param \Illuminate\Http\Request 
     * @return null value
     */
    function updateAll(Request $request){
        $cosa = $request->id;
        $toUpdate = Paciente::where('id', $cosa)->first();
        $toUpdate->Numero_expediente = $request->Numero_expediente;
        $toUpdate->Nombre = $request->Nombre;
        $toUpdate->Apellido = $request->Apellido;
        $toUpdate->Fecha_de_nacimiento = $request->Fecha_de_nacimiento;
        $toUpdate->Procedencia = $request->Procedencia;
        $toUpdate->Residencia = $request->Residencia;
        $toUpdate->Nombre_de_padre = $request->Nombre_de_padre;
        $toUpdate->Nombre_de_madre = $request->Nombre_de_madre;
        $toUpdate->Telefono = $request->Telefono;
        $toUpdate->Edad = $request->Edad;
        $toUpdate->Telefono = $request->Telefono;
        $toUpdate->Sindrome_Clinico_Presentacion = $request->Sindrome_Clinico_Presentacion;
        $toUpdate->Dx_Definitivo = $request->Dx_Definitivo;
        $toUpdate->Dx_Asociados = $request->Dx_Asociados;
        $toUpdate->CUI = $request->CUI;
        $toUpdate->Imagen = $request->Imagen;
        $toUpdate->Tipo_de_Sangre = $request->Tipo_de_Sangre;
        $toUpdate->Estudia = $request->Estudia;
        $toUpdate->Transfusiones = $request->Transfusiones;
        $toUpdate->EstadoActual = $request->EstadoActual;
        $toUpdate->Sexo = $request->Sexo;
        $toUpdate->Historia = $request->Historia;
        $toUpdate->save();
    }

    /**
     * elimina objeto en busqueda bajo id del elemento.
     * @param id parametro de busqueda para borrar
     * @param \Illuminate\Http\Request
     * @return null value.
     */
    public function delete(Request $request)
    {
         (string)$CUI = $request->cui;
        $user=Paciente::find($CUI);
        $user->delete();
        return response()->json([
            'success' => true,
            'message' => 'eliminado'
        ], 200);
    }
}

