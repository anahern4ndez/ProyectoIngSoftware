<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

class PacienteController extends Controller
{
    /**
     * crea una tupla nueva.
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        /*Paciente::create(Request::all());
        return 'true';*/
        $pat = new Paciente;
        $pat->Nombre = $request->Nombre;
        $pat->Apellido = $request->Apellido;
        $pat->Fecha_de_nacimiento = $request->Fecha_de_nacimiento;
        $pat->Procedencia = $request->Procedencia;
        $pat->Nombre_de_padre = $request->Nombre_de_padre;
        $pat->Nombre_de_madre = $request->Nombre_de_madre;
        $pat->Telefono = $request->Telefono;
        $pat->Edad = $request->Edad;
        $pat->Telefono = $request->Telefono;
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
        $pat->save();

        return response()->json([
            'success' => true,
            'message' => 'creado'
        ], 200);
    }

    /**
     * busca segun id (pasado por URL)
     * @param int id
     * @return obj asignado a variable con info de query.
     */
    function find($id){
        $val = Paciente::find($id);
        return response()->json([
            'success' => true,
            'Pacientes' => $val
        ], 200);
    }

    function findAll(){
        $val = Paciente::all();
        foreach ($val as $v) {
            $v->Sindrome_Clinico_Presentacion;
            $v->Sexo;
        }
        return response()->json([
            'success' => true,
            'Pacientes' => $val
        ], 200);
        
    }
    /**
     * hace update a todos los properties del elemento
     * @param int id
     * @param \Illuminate\Http\Request 
     * @return null value
     */
    function update(Request $request){
        $cosa = $request->id;
        $toUpdate = Paciente::where('CUI', $cosa)->first();
        
        //jalado del objeto
       
        $toUpdate->EstadoActual = $request->estadoNuevo;
        $toUpdate->save();

        return response()->json([
            'success' => true,
            'message' => 'actualizado'
        ], 200);

    }
    /**
     * elimina objeto en busqueda bajo id del elemento.
     * @param id parametro de busqueda para borrar
     * @param \Illuminate\Http\Request
     * @return null value.
     */
    function destroy(Request $request){
        $id = $request->id;
        echo 'probando23';
        $paciente=Paciente::find($id);
        $paciente->delete();
        return response()->json([
            'success' => true,
            'message' => 'eliminado'
        ], 200);
    }
}

