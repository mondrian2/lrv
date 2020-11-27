<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Questao;

class QuestaoController extends Controller
{
    public $model = Questao::class;

    public function index()
    {
        $models = $this->model::with('itens', 'pacote')->get()->toJson(JSON_PRETTY_PRINT);
        return response($models, 200);
    }

    public function store(Request $request)
    {
        return response()->json($this->model::create($request->all()), 201);
  
    }

    public function show($id)
    {
        if ($this->model::where('id', $id)->exists()) {
            $model = $this->model::where('id', $id)->first()->toJson(JSON_PRETTY_PRINT);
            return response($model, 200);
          } else {
            return response()->json([
              "message" => "not found"
            ], 404);
          }
    }

    public function update(Request $request, $id)
    {
        if ($this->model::where('id', $id)->exists()) {
            $model = $this->model::find($id);
            $model->tipo = is_null($request->tipo) ? $model->tipo : $request->tipo;
            $model->comentario = is_null($request->comentario) ? $model->comentario : $request->comentario;
            $model->enunciado = is_null($request->enunciado) ? $model->enunciado : $request->enunciado;
            $model->peso = is_null($request->peso) ? $model->peso : $request->peso;
            $model->save();
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "not found"
            ], 404);
          }
    
    }

    public function destroy($id)
    {
        if ($this->model::where('id', $id)->exists()) {
            $model = $this->model::find($id);
            $model->delete();
            return response()->json([
                "message" => "records deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "not found"
            ], 404);
        }
    }
}
