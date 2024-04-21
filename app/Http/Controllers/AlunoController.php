<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno; // Certifique-se de importar o modelo Aluno

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all(); // Recupera todos os alunos do banco de dados
        return view('selecionar_alunos', compact('alunos')); // Passa os alunos para a view
    }
}
