<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exercise;

class ExercisesController extends Controller
{
    public $model = Exercise::class;

    public function index()
    {
        $models = $this->model::all()->toJson(JSON_PRETTY_PRINT);
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
            $model->comando = is_null($request->comando) ? $model->comando : $request->comando;
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
