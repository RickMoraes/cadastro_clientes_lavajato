<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Vehicle::all();
        return response()->json(['Aqui está os dados solicitados!', $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Vehicle::create($data);
        return response()->json(['Dados criados com sucesso!'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Vehicle::find($id);
        return response()->json(['aqui está registro solicitado', $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $getRequest = $request->all();
       $data = Vehicle::findOrFail($id);
       $data->update($getRequest);

       return response()->json(['Dados atualizados com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Vehicle::find($id);
        $data->delete();

        return response()->noContent();
    }
}
