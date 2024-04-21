<?php

namespace App\Http\Controllers;

use App\Models\cursos; // Corrigido para 'cursos'
use Illuminate\Http\Request;

class CursoController extends Controller
{
    private $curso;

    public function __construct()
    {
        $this->curso = new cursos();
    }

    public function index()
    {
        $cursos = $this->curso->all();
        return view('cursos', ['cursos' => $cursos]);
    }

    public function edit(cursos $curso) // Corrigido para 'cursos'
    {
        return view('curso_edit', ['curso' => $curso]);
    }

    public function selecionar(Request $request) // Adicionei o parâmetro $request
    {
        $cursoId = $request->input('curso');
        return redirect()->route('atualizar_curso', ['curso' => $cursoId]);
    }


    public function update(Request $request, $id)
    {
        $updated = $this->curso->where('id', $id)->update([
            'nome' => strtolower($request->input('nome')),
            'rc' => $request->input('rc')
        ]);
    
        if ($updated) {
            return redirect()->route('curso.index')->with('success', 'Curso atualizado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Falha ao atualizar o curso.');
        }
    }}
    
