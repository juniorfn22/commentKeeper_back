<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    /**
     * Função para retornar todos os comentários
     * Autor: José Carlos Júnior
     */
    public function index()
    {
        $comentarios = Comentarios::all();
        return response()->json($comentarios);
    }
    /**
     * Função para retornar um comentário com base no ID
     * Autor: José Carlos Júnior
     *
     */
    public function show($id)
    {
        $comentarios = Comentarios::find($id);

        if (!$comentarios) {
            return response()->json([
                'message' => 'Comentário não encontrado',
            ], 404);
        }
        return response()->json($comentarios);
    }
    /**
     * Função para armazenar os comentários no banco de daoos
     * Autor: José Carlos Júnior
     *
     */
    public function store(Request $request)
    {
        $comentarios = new Comentarios();
        $comentarios->fill($request->all());
        $comentarios->save();

        return response()->json($comentarios,201);
    }

     /**
     * Função para alterar um comentário
     * Autor: José Carlos Júnior
     *
     */
    public function update(Request $request, $id)
    {
        $comentarios = Comentarios::find($id);

        if (!$comentarios) {
            return response()->json([
                'message' => 'Comentário não encontrado',
            ], 404);
        }

        $comentarios->fill($request->all());
        $comentarios->save();

        return response()->json($comentarios);
    }

    /**
     * Função para deletar um comentário
     * Autor: José Carlos Júnior
     *
     */
    public function destroy($id)
    {
        $comentarios = Comentarios::find($id);

        if (!$comentarios) {
            return response()->json([
                'message' => 'Comentário não encontrado',
            ], 404);
        }

        $comentarios->delete();

        return response()->json([
            'message'=>'Comentário deletado'
        ]);
    }
}
