<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
       $response = Vehicle::all();
        if(count($response) > 0){
            return response()->json(["message" => "Veículos encontrados com sucesso", "data" => $response]);
        }else{

            return response()->json(["message" => "Nenhum Veículo encontrado", "data" => $response]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $response = Vehicle::create([
            'placa' => $request->placa,
            'combustivel' => $request->combustivel,
            'fabricante' => $request->fabricante,
        ]);
        if ($response) {
            return response()->json(["message" => "Veículo cadastrado", "data" => $response]);
        } else {
            return response()->json(["message" => "Erro ao cadastrar veículo", "data" => $response]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Vehicle::where("id", $id)->first();
        if ($response) {
            return response()->json(["message" => "Veículo encontrado", "data" => $response]);
        } else {
            return response()->json(["message" => "nenhum Veículo encontrado", "data" => $response]);
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = $request->all();
        $response = Vehicle::where("id", $id)->update($req);
        if ($response) {
            return response()->json(["message" => "Veículo alterado", "data" => $response]);
        } else {
            return response()->json(["message" => "Houve um erro ao alterar o veículo", "data" => $response]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Vehicle::where("id", $id)->delete();
        if ($response) {
            return response()->json(["message" => "Veículo deletado", "data" => $response]);
        } else {
            return response()->json(["message" => "Houve um erro ao deletar o veículo", "data" => $response]);
        }
    }
}
