<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class SchedulingEnvironmentController extends Controller
{
    private $rules = [
        'course_id' => 'required|numeric',
        'instructor_document' => 'required|numeric',
        'environment_id' => 'required|numeric',
        'date_scheduling' => 'required|date_format:Y-m-d'
    ];

    private $traductionAttributes = [
        'course_id' => 'curso',
        'instructor_document' => 'documento del instructor',
        'environment_id' => 'ambiente',
        'date_scheduling' => 'fecha de programación'
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
