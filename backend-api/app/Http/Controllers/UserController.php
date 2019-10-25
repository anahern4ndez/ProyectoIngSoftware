<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {
    
    /**
     * Retrieves all users from the database.
     */
    public function getUsers (Request $request) {
        $users = User::all();

        if (!$users) {
            return response()->json([
                'success' => true,
                'message' => 'No se encontró el recurso especificado.',
                'data' => '',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Petición exitosa.',
            'data' => $users,
        ], 200);
    }
}
