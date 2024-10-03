<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function index()
    {
        $user = User::all();

        $data = [
            'user' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'sexo' => 'required|in:Mujer,Varón',
            'fecha_nacimiento' => 'required|date',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $user = User::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'sexo' => $request->sexo,
            'fecha_nacimiento' => $request->fecha_nacimiento
        ]);

        if (!$user) {
            $data = [
                'message' => 'Error al crear el Usuario',
                'status' => 500
            ];
            return response()->json($data, 500);
        }

        $data = [
            'user' => $user,
            'status' => 201
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $data = [
            'user' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $user->delete();

        $data = [
            'message' => 'Usuario eliminado',
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'apellidos' => 'required|string|max:50',
            'sexo' => 'required|in:Mujer,Varón',
            'fecha_nacimiento' => 'required|date',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->sexo = $request->sexo;
        $user->fecha_nacimiento = $request->fecha_nacimiento;

        $user->save();

        $data = [
            'message' => 'Usuario actualizado',
            'user' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }

    public function updatePartial(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            $data = [
                'message' => 'Usuario no encontrado',
                'status' => 404
            ];
            return response()->json($data, 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'string|max:50',
            'apellidos' => 'string|max:50',
            'sexo' => 'in:Mujer,Varón',
            'fecha_nacimiento' => 'date',
        ]);

        if ($validator->fails()) {
            $data = [
                'message' => 'Error en la validación de los datos',
                'errors' => $validator->errors(),
                'status' => 400
            ];
            return response()->json($data, 400);
        }

        if ($request->has('nombre')) {
            $user->nombre = $request->nombre;
        }

        if ($request->has('apellidos')) {
            $user->apellidos = $request->apellidos;
        }

        if ($request->has('sexo')) {
            $user->sexo = $request->sexo;
        }

        if ($request->has('fecha_nacimiento')) {
            $user->fecha_nacimiento = $request->fecha_nacimiento;
        }

        $user->save();

        $data = [
            'message' => 'Usuario actualizado',
            'user' => $user,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
}
