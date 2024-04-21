<?php
namespace App\Http\Controllers;
use App\Models\professor;



use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function create()
{
    return view('professor_create');
}

public function store(Request $request)
{
    $request->validate([
        'rp' => 'required|unique:professor,rp', // Nome correto da tabela no banco de dados
        'nome' => 'required|string|max:255',
    ]);

    $professor = new Professor([
        'rp' => $request->input('rp'),
        'nome' => $request->input('nome'),
    ]);

    $professor->save();

    return redirect()->route('professor.create')->with('success', 'Professor criado com sucesso!');
}}

