<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        Categoria::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Categoria::find($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());

        return $categoria;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if(empty($categoria)){
            $resposta = [
                "mensagem" => "O filme que voce procura, nao existe!"
            ];
            return response($resposta , Response::HTTP_NOT_FOUND);
        }

        $categoria->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
