<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Client::all();
        return response()->json(['Aqui está a lista de todos os clientes cadastrados!' => $data], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Client::create($data);
        
        return response()->json(['dados criados com sucesso!' => $data], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Client::find($id);
        return response()->json(['Aqui está o registo procurado:', $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $client_id = Client::findOrFail($id);
        $client_id->update($data);

        return response()->json(['dados atualizados com sucesso!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Client::find($id);
        $data->delete();

        return response()->noContent();
    }
}
