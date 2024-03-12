<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class InstructorController extends Controller
{
    private $rules = [
        'document' => 'required|integer|min:1|max:99999999999999999999',
        'fullname' => 'required|string|min:10|max:50',
        'sena_email' => 'required|string|email|unique:instructor|max:40',
        'personal_email' => 'required|string|email|unique:instructor|max:50',
        'phone' => 'required|string|max:30',
        'password' => 'required|string|min:8|max:255',
        'type' => 'required|string|min:3|max:255',
        'profile' => 'required|string|min:3|max:255',
    ];

    private $traductionAttributes = [
        'document' => 'documento',
        'fullname' => 'nombre completo',
        'sena_email' => 'correo Sena',
        'personal_email' => 'correo personal',
        'phone' => 'teléfono',
        'password' => 'contraseña',
        'type' => 'tipo',
        'profile' => 'perfil',
    ];

    public function applyValidator(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        $validator->setAttributeNames($this->traductionAttributes);
        $data = [];
        if ($validator->fails()) {
            $data = response()->json([
                'errors' => $validator->errors(),
                'data' => $request->all()
            ], Response::HTTP_BAD_REQUEST); 
        }
        return $data;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = Instructor::all();
        return response()->json($instructors, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->applyValidator($request);
        if(!empty($data))
        {
            return $data;
        }
        $instructor = Instructor::create($request->all());
        $response = [
            'message' => 'Registro creado exitosamente',
            'instructor' => $instructor

        ];
        return response()->json($response, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        return response()->json($instructor, Response::HTTP_OK );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        $data = $this->applyValidator($request);
        if(!empty($data))
        {
            return $data;
        }
        $instructor->update($request->all());
        $response = [
            'message' => 'Registro actualizado exitosamente',
            'causal' => $instructor

        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        $response = [
            'message' => 'Registro eliminado exitosamente',
            'causal' => $instructor

        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
