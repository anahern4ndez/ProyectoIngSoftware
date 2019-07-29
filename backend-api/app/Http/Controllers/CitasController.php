<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitasController extends Controller {
    /**
     * Retorna todas las citas que existen en la BD.
     */
    public function getCitas() {
        return response()->json([
            'success' => true,
            'message' => 'Consulta de citas realizada con éxito.',
            'data' => Cita::all(),
        ], 200);
    }

    /**
     * Guarda una cita en la base de datos, siempre y cuando
     * la informacion proveida sea correcta.
     */
    public function store(Request $request) {
        /* Validacion de datos de request. Si la validacion falla, se envia
           una respuesta con codigo 422 que contiene el mensaje de error. */
        $this->validate($request, 
           [
               'idUsuario' => 'required',
               'idPaciente' => 'required',
               'fecha' => 'required',
               'hora' => 'required',
               'duracionCita' => 'required',
               'estado' => 'required'
           ], 
           [
               'idUsuario.required' => 'El ID del usuario es requerido.',
               'idPaciente.required' => 'El ID del paciente es requerido.',
               'fecha.required' => 'La fecha es requerida.',
               'hora.required' => 'La hora es requerida.',
               'duracionCita.required' => 'La duración de la cita es requerida.',
           ]
       );
        
        // Crear nueva cita, asignarle los datos necesarios y guardarla en DB.
        $cita = new Cita;
        $cita->idUsuario = $request->idUsuario;
        $cita->idPaciente = $request->idPaciente;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado;
        $cita->duracionCita = $request->duracionCita;
        $cita->save();
        
        // Cita creada con exito, se retorna un codigo 200.
        return response()->json([
            'success' => true,
            'message' => 'Cita creada con éxito.'
        ], 200);
    }

    /**
     * Actualiza una cita ya existente.
     */
    public function update(Request $request, $id) {
        // validar que el id venga en el request
        if (!$id) {
            return response()->json([
                'success' => false,
                'message' => 'Petición al servidor inválida.'
            ], 400);
        }

        // buscar cita por id y validar que exista
        $cita = Cita::find($id);

        if (!$cita) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo encontrar la cita con el ID especificado.'
            ], 404);
        }

        /* Validacion de datos de request. Si la validacion falla, se envia
           una respuesta con codigo 422 que contiene el mensaje de error. */
        $this->validate($request, 
            [
                'idUsuario' => 'required',
                'idPaciente' => 'required',
                'fecha' => 'required',
                'hora' => 'required',
                'duracionCita' => 'required',
                'estado' => 'required'
            ], 
            [
                'idUsuario.required' => 'El ID del usuario es requerido.',
                'idPaciente.required' => 'El ID del paciente es requerido.',
                'fecha.required' => 'La fecha es requerida.',
                'hora.required' => 'La hora es requerida.',
                'duracionCita.required' => 'La duración de la cita es requerida.',
            ]
        );

        // actualizar datos de cita
        $cita->idUsuario = $request->idUsuario;
        $cita->idPaciente = $request->idPaciente;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->estado = $request->estado;
        $cita->duracionCita = $request->duracionCita;
        $cita->save();

        // Cita actualizada con exito, se retorna un codigo 200.
        return response()->json([
            'success' => true,
            'message' => 'Cita actualizada con éxito.'
        ], 200);
    }

    /**
     * Borra una cita de la DB.
     */
    public function destroy(Request $request, $id) {
        $cita = Cita::find($id);

        if (!$cita) {
            return response()->json([
                'success' => true,
                'message' => 'No se encontró la cita especificada.'
            ], 404);
        }

        Cita::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Cita eliminada con éxito.'
        ], 200);
    }
}
