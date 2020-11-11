<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Livro;

class LivroController extends Controller
{
    public $model = Livro::class;
 
    public function index()
    {
        $models = $this->model::with('pacotes')->get()->toJson(JSON_PRETTY_PRINT);
        return response($models, 200);
    }

    public function store(Request $request)
    {
        return response()->json($this->model::create($request->all()), 201);
  
    }

    public function show($id)
    {
        if ($this->model::where('id', $id)->exists()) {
            $livro = $this->model::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($livro, 200)->first();
          } else {
            return response()->json([
              "message" => "Book not found"
            ], 404);
          }
    }

    public function update(Request $request, $id)
    {
        if (Livro::where('id', $id)->exists()) {
            $livro = Livro::find($id);
            $livro->titulo = is_null($request->titulo) ? $livro->titulo : $request->titulo;
            $livro->save();
            return response()->json([
              "message" => "records updated successfully"
            ], 200);
          } else {
            return response()->json([
              "message" => "Book not found"
            ], 404);
          }
    
    }

    public function destroy($id)
    {
        if (Livro::where('id', $id)->exists()) {
            $livro = Livro::find($id);
            $livro->delete();
            return response()->json([
                "message" => "records deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "Book not found"
            ], 404);
        }
    }
}
