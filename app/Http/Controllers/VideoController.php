<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Video::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoRequest $request)
    {
        Video::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Video::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, $id)
    {
        $video = Video::find($id);
        $video->update($request->all());
        return $video;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if(empty($video)){
            $resposta = [
                "mensagem" => "O filme que voce procura, nao existe!"
            ];
            return response($resposta , Response::HTTP_NOT_FOUND);
        }

        $video->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function search(Request $request, $parametro)
    {
        $videos = Video::pesquisarPorCategoriaOuParavraChave($parametro);
        if($videos->isEmpty()){
            $resposta = [
                "mensagem" => "O filme que voce procura, nao existe!"
            ];
            return response($resposta , Response::HTTP_NOT_FOUND);
        }
        return  $videos;
    }
}
